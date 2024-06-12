<?php

namespace Cpkm\Lease\Http\Controllers\Backend\Lease;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cpkm\Admin\Service\SystemSettingsService;
use App\Service\CurrencyService;

class QuoteOrderController extends Controller
{
    use \Cpkm\Lease\Traits\OrderTrait;

    protected $QuoteOrderService;

    protected $form = [];
    protected $fields = [];

    public $show = false;
    public function __construct(
        public SystemSettingsService $SystemSettingsService,
        public CurrencyService $CurrencyService,
    ) {

        $this->form = config('lease.quote_order.form');
        $this->fields = config('lease.quote_order.form.fields');
        $this->CustomerService = app(config('lease.quote_order.customer'));
        $this->ProductService = app(config('lease.quote_order.product'));
        $this->StaffService = app(config('lease.quote_order.staff'));
        $this->QuoteOrderService = app(config('lease.quote_order.service'));

        $this->fields['companies_id']['value'] = $this->SystemSettingsService->getSetting('company');
        $this->fields['customers_id']['options'] = $this->CustomerService->select(1);
        $this->fields['lease_methods_id']['options'] = \Cpkm\Lease\Models\LeaseMethod::all()->map(function($item){
            return [
                'value' =>  $item->id,
                'name'  =>  $item->name,
            ];
        })->toArray();
        $this->fields['invoice_types_id']['options'] = \App\Models\InvoiceType::all()->map(function($item){
            return [
                'value' =>  $item->id,
                'name'  =>  $item->name,
            ];
        })->toArray();
        $this->form['back'] =   route('backend.lease.quote_order.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->expectsJson()) {
            if(request()->action) {
                return $this->getAjaxData();
            }
            return response()->json([
                "data"  =>  $this->QuoteOrderService->index(request()->extraParam??[]),
            ]);
        }
        $data['fields'] = $this->fields;
        return view('lease::backend.quote_order.index', $data);
    }

    public function formDataHandle($detail) {
        foreach($detail as $field => $value) {
            if(in_array($field, ['items'])) {
                foreach ($this->fields[$field]['parameters'] as $key => $item) {
                    if(isset($this->fields[$item['field']])) {
                        if($this->show) {
                            $this->fields[$item['field']]['disabled']  =   true;
                        }
                    }
                }
                if($this->show) {
                    $this->fields[$field]['disabled']  =   true;
                }
                $this->fields[$field]['value']  =   $value;
            }else if($field == 'customers_id'){
                $this->fields[$field]['value']  =   $value;
                if($this->show) {
                    $this->fields[$field]['disabled']  =   true;
                }
                $customer = $this->CustomerService->getCustomer($value);
                $this->fields['customer_contacts_id']['options'] =  $customer->customer_contacts->map(function($item){
                    return [
                        'value' =>  $item->id,
                        'name'  =>  $item->name,
                    ];
                })->toArray();
            }else if(in_array($field, ['contact'])){
                $this->fields['phone']['value'] = $value['mobile']??'';
            }else if(isset($this->fields[$field])) {
                $this->fields[$field]['value']  =   $value;
                if($this->show) {
                    $this->fields[$field]['disabled']  =   true;
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->form['action']   =   route('backend.lease.quote_order.store');
        $this->form['title']    =   '新增報價單';
        $this->fields['make_id']['value']   =   auth()->user()->staff?->id;
        $this->fields['date']['value']  =   date('Y-m-d');
        $data['form']   =   $this->form;
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        \View::share('fields',$this->fields);
        return view('lease::backend.quote_order.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->QuoteOrderService->store($request->all());
        return redirect()->route('backend.lease.quote_order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['detail'] = $this->QuoteOrderService->getLeaseQuoteOrder($id);
        $this->form['title']    =   '租賃報價單詳情';
        $this->show = true;
        $this->formDataHandle($data['detail']->toArray());
        $data['form']   =   $this->form;
        \View::share('fields',$this->fields);
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        $data['table']  =   'lease_quote_orders';
        $data['show']   =   $this->show;
        return view('lease::backend.quote_order.form',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['detail'] = $this->QuoteOrderService->getLeaseQuoteOrder($id);
        $this->form['title']    =   '編輯租賃報價單';
        $this->form['action']   =   route('backend.lease.quote_order.update',['quote_order'=>$id]);
        $this->form['method']   =   "PUT";
        $this->formDataHandle($data['detail']->toArray());
        $data['form']   =   $this->form;
        \View::share('fields',$this->fields);
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        return view('lease::backend.quote_order.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->action == 'close') {
            $this->QuoteOrderService->close($id);
            return response()->json(['message' => __('update').__('success')]);
        }else{
            $this->QuoteOrderService->update($request->all(),$id);
        }
        return redirect()->route('backend.lease.quote_order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->QuoteOrderService->delete($id);
        return response()->json(['message' => __('delete').__('success')]);
    }
}
