<?php

namespace Cpkm\Lease\Services\Lease;

use App\Models\Staff;
use Illuminate\Support\Arr;
use App\Exceptions\ErrorException;
use DataTables;

use App\Models\SystemSetting;

/**
 * Class QuoteOrderService.
 */
class QuoteOrderService extends OrderItemService
{
    protected $order_folder = 'lease_quote_order';

    protected $order_item_folder = 'lease_quote_order_item';

    /** 
     * @access protected
     * @var LeaseQuoteOrderRepository
     * @version 1.0
     * @author Henry
    **/
    protected $LeaseQuoteOrderRepository;
    /** 
     * @access protected
     * @var SystemSettingRepository
     * @version 1.0
     * @author Henry
    **/
    protected $SystemSettingRepository;
    
    /** 
     * 建構子
     * @version 1.0
     * @author Henry
    **/
    public function __construct(
        Staff $Staff, 
        SystemSetting $SystemSetting,
        ) {
        $this->LeaseQuoteOrderRepository      =   app(config('lease.quote_order.model'));
        $this->StaffRepository      =   $Staff;
        $this->SystemSettingRepository = $SystemSetting;
    }

    /**
     * 報價單列表
     * @param array $data
     * @version 1.0
     * @author Henry
     * @return \DataTables
     */
    public function index($data) {
        $where = Arr::only($data,["name","status"]);
        return DataTables::of($this->LeaseQuoteOrderRepository->listQuery($where))->make();
    }
    
    /**
     * 取得報價單資料
     *
     * @param  mixed $id
     * @return void
     */
    public function getLeaseQuoteOrder($id) {
        return $this->LeaseQuoteOrderRepository->getDetail($id);
    }

    /**
     * 產生單據號
     *
     * @return void
     */
    public function makeNo($date) {
        $no = (new \Carbon\Carbon($date))->format('Ymd');
        $count = LeaseQuoteOrder::where('no', 'like', $no."%")->count() + 1;
        return $no.str_pad($count, 4, "0", STR_PAD_LEFT);
    }

    public function getDepartmentId($staff_id) {
        $staff = Staff::where('id', $staff_id)->first();
        return $staff->department_id;
    }

    /**
     * 建立報價單
     * @param array $data
     * @return object $model
     * @throws \App\Exceptions\Universal\ErrorException
     * @version 1.0
     * @author Henry
     */
    public function store(array $data) {
        return \DB::transaction(function() use ($data){
            $data = $this->calculateAmount($this->dataHandle($data));
            $createData =  Arr::only($data, $this->LeaseQuoteOrderRepository->getDetailFields());
            $createData['no']   =   $this->makeNo($createData['date']);
            $createData['make_id'] = auth()->user()->staff->id;
            $model     =   $this->LeaseQuoteOrderRepository->create($createData);
            if(!$model){
                throw new ErrorException(__('backend.errors.insertFail'), 500);
            }
            $this->setItems($model, $data);
            return $model;
        });
    }
        
    /**
     * 更新訂購參數資料
     * @param array $updateData
     * @param string $id
     * @return object $model
     * @throws \App\Exceptions\Universal\ErrorException
     * @version 1.0
     * @author Henry
     */
    public function update(array $data, string $id) {
        return \DB::transaction(function() use ($data, $id){
            $data = $this->calculateAmount($this->dataHandle($data));
            $updateData = Arr::only($data, $this->LeaseQuoteOrderRepository->getDetailFields());
            $model =  $this->getLeaseQuoteOrder($id);
            $result = $model->update($updateData);
            if(!$result){
                throw new ErrorException(__('backend.errors.updateFail'), 500);
            }
            $this->setItems($model, $data);
            return $model;
        });
    }

    /**
     * 刪除訂購參數資料
     * @param string $id
     * @return object $model
     * @throws \App\Exceptions\Universal\ErrorException
     * @version 1.0
     * @author Henry
     */
    public function delete(string $id) {
        $model =  $this->getLeaseQuoteOrder($id);
        if($model->close) {
            throw new ErrorException('該報價憑單已結案', 500, []);
        }
        $model->delete();
        if(!$model){
            throw new ErrorException(__('backend.errors.deleteFail'), 500, []);
        }
        return $model;
    }
        
    /**
     * 報價單下拉選單選項
     *
     * @param  mixed $where
     * @return void
     */
    public function select($where = []) {
        return $this->LeaseQuoteOrderRepository->select(['id', 'no'])->where($where)->get()->map(function($item) {
            return [
                'value' =>  $item->id,
                'name'  =>  "{$item->no}"
            ];
        })->toArray();
    }
    
    /**
     * 結案
     *
     * @param  mixed $id
     * @return void
     */
    public function close($id) {
        $model =  $this->getLeaseQuoteOrder($id);
        if($model->status?->id == 1) {
            $updateData['lease_quote_order_statuses_id'] = 3;
        }

        if($model->status?->id == 3) {
            $updateData['lease_quote_order_statuses_id'] = 1;
        }
        
        if($model->status?->id == 1 && $model->contact_order) {
            $updateData['lease_quote_order_statuses_id'] = 2;
        }
        $result = $model->update($updateData);
        if(!$result){
            throw new ErrorException(__('backend.errors.updateFail'), 500);
        }
        return $model;
    }

}