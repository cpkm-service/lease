<?php

namespace Cpkm\Lease\Services\Lease;

use App\Models\Staff;
use Illuminate\Support\Arr;
use App\Exceptions\ErrorException;
use DataTables;

use App\Models\SystemSetting;

/**
 * Class ContractOrderService.
 */
class ContractOrderService extends OrderItemService
{
    protected $order_folder = 'lease_contract_order';

    protected $order_item_folder = 'lease_contract_order_item';
    /** 
     * @access protected
     * @var LeaseContractOrderRepository
     * @version 1.0
     * @author Henry
    **/
    protected $LeaseContractOrderRepository;
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
        $this->LeaseContractOrderRepository      =   app(config('lease.contract_order.model'));
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
        return DataTables::of($this->LeaseContractOrderRepository->listQuery($where))->make();
    }

    public function getLeaseContractOrder($id) {
        return $this->LeaseContractOrderRepository->getDetail($id);
    }

    /**
     * 產生單據號
     *
     * @return void
     */
    public function makeNo($date) {
        $no = (new \Carbon\Carbon($date))->format('Ymd');
        $count = LeaseContractOrder::where('no', 'like', $no."%")->count() + 1;
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
            $createData =  Arr::only($data, $this->LeaseContractOrderRepository->getDetailFields());
            $createData['no']   =   $this->makeNo($createData['date']);
            $createData['make_id'] = auth()->user()->staff->id;
            $model     =   $this->LeaseContractOrderRepository->create($createData);
            if(!$model){
                throw new ErrorException(__('backend.errors.insertFail'), 500);
            }
            $this->setItems($model, $data);
            if($model->sourceable && $model->sourceable->lease_quote_order_statuses_id == 1) {
                $model->sourceable->update(['lease_quote_order_statuses_id' => 2]);
            }
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
            $updateData = Arr::only($data, $this->LeaseContractOrderRepository->getDetailFields());
            $model =  $this->getLeaseContractOrder($id);
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
        $model =  $this->getLeaseContractOrder($id);
        if($model->close) {
            throw new ErrorException('該報價憑單已結案', 500, []);
        }
        $model->delete();
        if(!$model){
            throw new ErrorException(__('backend.errors.deleteFail'), 500, []);
        }
        return $model;
    }
    
    public function select($where = []) {
        return $this->LeaseContractOrderRepository->select(['id', 'no'])->where($where)->get()->map(function($item) {
            return [
                'value' =>  $item->id,
                'name'  =>  "{$item->no}"
            ];
        })->toArray();
    }

}