<?php

namespace Cpkm\Lease\Services\Lease;

use App\Models\Currency;
use App\Exceptions\ErrorException;
use App\Service\ProductService;
use App\Libraries\Rate;

/**
 * Class OrderItemService.
 */
class OrderItemService
{
    protected $order_folder;

    protected $order_item_folder;
        
    /**
     * 設定項目
     *
     * @param  mixed $model
     * @param  mixed $data
     * @return void
     */
    public function setItems($model, $data) {
        $ProductService = app(ProductService::class);
        $key = 'items';
        $all_data = $model->{$key}->pluck('id')->toArray();
        if($data[$key]??false) {
            foreach ($data[$key] as $sort => $item) {
                if(isset($item['id']) && $item['id']) {
                    $search = $model->{$key}()->where('id', $item['id'])->first();
                    if($search??false) {
                        $result = $search->update($item);
                        unset($all_data[array_search($item['id'],$all_data)]);
                    }
                    // else{
                    //     $result = $model->{$key}()->create($item);
                    // }
                    if(!$result) {
                        throw new ErrorException(__('backend.errors.insertFail'), 500);
                    }
                }else{
                    $product = $ProductService->getProduct($item['products_id']);
                    $item['name']       = $product->product_name;
                    $item['standard']   = $product->product_standard;
                    $item['size']       = $product->size;
                    $result = $model->{$key}()->create($item);
                    if(!$result) {
                        throw new ErrorException(__('backend.errors.insertFail'), 500);
                    }
                }
            }
        }
        foreach ($all_data as $id) {
            $model->{$key}()->where([
                'id' => $id,
            ])->delete();
        }
    }

    /**
     * 計算金額
     *
     * @return void
     */
    public function calculateAmount($data) {
        
        $main_amount = 0;
        $main_tax = 0;
        $main_total_amount = 0;
        $invoice_type = $data['invoice_types_id'];
        $tax_percentage = $this->SystemSettingRepository->getSetting('tax_percentage');
        $decimal_point = $this->SystemSettingRepository->getSetting('decimal_point');
        // $main_currency = $this->SystemSettingRepository->getSetting('main_currency');
        $currency = Currency::find($data['currencies_id']);
        $exchange = $currency?->exchange??0;
        foreach ($data['items']??[] as $key => $item) {
            $amount = (float)bcmul($item['count'], $item['unit_amount'] , $decimal_point);
            $tax = (float)bcmul($amount, ($tax_percentage / 100), $decimal_point);
            //免稅
            if($invoice_type == 3) {
                $tax = 0;
            //含稅
            }else if($invoice_type == 2){
                $amount = (float)bcsub($amount, $tax, $decimal_point);
            }
            $total_amount = (float)bcadd($amount, $tax, $decimal_point);
            
            $data['items'][$key]['amount']          = $amount;
            $data['items'][$key]['tax']             = $tax;
            $data['items'][$key]['total_amount']    = $total_amount;
            //本位幣計算
            $data['items'][$key]['main_amount']         = bcmul($amount, $exchange, $decimal_point);
            $data['items'][$key]['main_tax']            = bcmul($tax, $exchange, $decimal_point);
            $data['items'][$key]['main_total_amount']   = bcmul($total_amount, $exchange, $decimal_point);
            
            //總金額加總
            $main_amount = (float)bcadd($main_amount, $amount, $decimal_point);
            $main_tax = (float)bcadd($main_tax, $tax, $decimal_point);
            $main_total_amount = (float)bcadd($main_total_amount, $total_amount, $decimal_point);

            if(isset($item['file']) && $item['file'] && $item['file'] instanceof \Illuminate\Http\UploadedFile) {
                $data['items'][$key]['file'] = $item['file']->storeAs($this->order_item_folder, date('YmdHis')."-".$item['file']->getClientOriginalName() , 'public');
            }

            if($item['factory_hours']??false && $item['return_factory_hours']??false) {
                $data['items'][$key]['use_hours'] = $item['factory_hours'] - $item['return_factory_hours'];
            }
        }
        $data['amount'] =   $main_amount;
        $data['tax']    =   $main_tax;
        $data['total_amount']   =   $main_total_amount;
        //本位幣計算
        $data['main_amount']        =   bcmul($main_amount, $exchange, $decimal_point);
        $data['main_tax']           =   bcmul($main_tax, $exchange, $decimal_point);
        $data['main_total_amount']  =   bcmul($main_total_amount, $exchange, $decimal_point);
        return $data;
    }
    /**
     * 資料處理
     *
     * @param  mixed $data
     * @return void
     */
    public function dataHandle($data) {
        
        if($data['customer_contacts_id']??false) {
            $customer_contact = \App\Models\CustomerContact::find($data['customer_contacts_id']);
            $data['customer_address']   =   $customer_contact->address;
            $data['customer_phone']     =   $customer_contact->phone;
        }else{
            $data['customer_contacts_id'] = NULL;
            $data['customer_address']   =   '';
            $data['customer_phone']     =   '';
        }
        if(isset($data['file']) && $data['file'] && $data['file'] instanceof \Illuminate\Http\UploadedFile) {
            $data['file'] = $data['file']->storeAs($this->order_folder, date('YmdHis')."-".$data['file']->getClientOriginalName() , 'public');
        }
        return $this->calculateAmount($data);
    }

}