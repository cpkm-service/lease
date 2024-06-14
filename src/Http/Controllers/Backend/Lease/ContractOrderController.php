<?php

namespace Cpkm\Lease\Http\Controllers\Backend\Lease;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cpkm\Admin\Service\SystemSettingsService;
use App\Service\CurrencyService;

class ContractOrderController extends Controller
{
    use \Cpkm\Lease\Traits\OrderTrait;
    protected $form = [];
    protected $fields = [];

    protected $QuoteOrderService;

    protected $ContractOrderService;

    public $show = false;
    public function __construct(
        public SystemSettingsService $SystemSettingsService,
        public CurrencyService $CurrencyService,
    ) {

        $this->form = config('lease.contract_order.form');
        $this->fields = config('lease.contract_order.form.fields');
        $this->CustomerService = app(config('lease.contract_order.customer'));
        $this->ProductService = app(config('lease.contract_order.product'));
        $this->StaffService = app(config('lease.contract_order.staff'));
        $this->QuoteOrderService = app(config('lease.quote_order.service'));
        $this->ContractOrderService = app(config('lease.contract_order.service'));

        $this->fields['companies_id']['value'] = $this->SystemSettingsService->getSetting('company');
        $this->fields['customers_id']['options'] = $this->CustomerService->select(1);
        $this->fields['sourceable_id']['options']    =   $this->QuoteOrderService->select();
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
        $this->form['back'] =   route('backend.lease.contract_order.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->expectsJson()) {
            if(request()->action == 'sourceable_type') {
                return response()->json([   
                    "data"  =>  $this->QuoteOrderService->select([
                        'lease_quote_order_statuses_id'    =>  1,
                    ])
                ]);
            }else if(request()->action == 'sourceable_id') {
                return response()->json([   
                    "data"  =>  $this->QuoteOrderService->getLeaseQuoteOrder(request()->id),
                ]);
            }else if(request()->action) {
                return $this->getAjaxData();
            }
            return response()->json([
                "data"  =>  $this->ContractOrderService->index(request()->extraParam??[]),
                // "data"  =>  \DataTables::of([])->make(),
            ]);
        }
        $data['fields'] = $this->fields;
        return view('lease::backend.contract_order.index', $data);
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
        $this->form['action']   =   route('backend.lease.contract_order.store');
        $this->form['title']    =   '新增合約';
        $this->fields['make_id']['value']   =   auth()->user()->staff?->id;
        $this->fields['date']['value']  =   date('Y-m-d');
        $data['form']   =   $this->form;
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        \View::share('fields',$this->fields);
        return view('lease::backend.contract_order.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->ContractOrderService->store($request->all());
        return redirect()->route('backend.lease.contract_order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['detail'] = $this->ContractOrderService->getLeaseContractOrder($id);
        $this->form['title']    =   '租賃合約單詳情';
        $this->show = true;
        $this->formDataHandle($data['detail']->toArray());
        $data['form']   =   $this->form;
        \View::share('fields',$this->fields);
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        $data['table']  =   'lease_contract_orders';
        $data['show']   =   $this->show;
        return view('lease::backend.contract_order.form',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['detail'] = $this->ContractOrderService->getLeaseContractOrder($id);
        $this->form['title']    =   '編輯租賃合約單';
        $this->form['action']   =   route('backend.lease.contract_order.update',['contract_order'=>$id]);
        $this->form['method']   =   "PUT";
        $this->formDataHandle($data['detail']->toArray());
        $data['form']   =   $this->form;
        \View::share('fields',$this->fields);
        $data['tax_percentage'] =   $this->SystemSettingsService->getSetting('tax_percentage')??0;
        $data['decimal_point'] =   $this->SystemSettingsService->getSetting('decimal_point')??0;
        return view('lease::backend.contract_order.form',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->action == 'close') {
            $this->ContractOrderService->close($id);
            return response()->json(['message' => __('update').__('success')]);
        }else{
            $this->ContractOrderService->update($request->all(),$id);
        }
        return redirect()->route('backend.lease.contract_order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->ContractOrderService->delete($id);
        return response()->json(['message' => __('delete').__('success')]);
    }

    public function print(string $id) {
        $order = $this->ContractOrderService->getLeaseContractOrder($id);
        $TemplateService = app(config('print.template.service'));
        $template = $TemplateService->getPrintTemplateByCode('lease_contract_order');
        $data['template'] = $template;
        $data['data'] = [
            'date'  =>  $order->date,
            'no'    =>  $order->no,
            'company_address'   =>  $order->company->company_address,
            'company_name'  =>  $order->company->company_name,
            'company_phone' =>  $order->company->company_phone,
            'company_fax'   =>  $order->company->tax_number,
            'customer_name' =>  $order->customer->name,
            'customer_phone'    =>  $order->customer->phone,
            'customer_fax'  =>  $order->customer->tax,
            'company_email' =>  $order->company->company_email,
            'items' =>  $order->items,
            'staff' =>  $order->staff?->name,
            'amount'    =>  number_format($order->amount),
            'tax'   =>  number_format($order->tax),
            'total' =>  number_format($order->total_amount),
            'chinese_total' =>  \Cpkm\Admin\Helpers\Universal\Universal::numberToChinese((float)$order->total_amount),
            'day'   =>  3,
        ];
        return view('lease::backend.contract_order.print', $data);
    }
}
