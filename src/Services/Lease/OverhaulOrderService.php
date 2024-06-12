<?php

namespace Cpkm\Lease\Services\Lease;

use App\Models\Staff;
use Illuminate\Support\Arr;
use App\Exceptions\ErrorException;
use DataTables;
use App\Models\SystemSetting;

/**
 * Class OverhaulOrderService.
 */
class OverhaulOrderService extends OrderItemService
{
    protected $order_folder = 'lease_overhaul_order';

    protected $order_item_folder = 'lease_overhaul_order_item';
    /** 
     * @access protected
     * @var LeaseOverhaulOrderRepository
     * @version 1.0
     * @author Henry
    **/
    protected $LeaseOverhaulOrderRepository;
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
        $this->LeaseOverhaulOrderRepository      =   app(config('lease.overhaul_order.model'));
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
        return DataTables::of($this->LeaseOverhaulOrderRepository->listQuery($where))->make();
    }

    public function getLeaseOverhaulOrder($id) {
        return $this->LeaseOverhaulOrderRepository->getDetail($id);
    }

    /**
     * 產生單據號
     *
     * @return void
     */
    public function makeNo($date) {
        $no = (new \Carbon\Carbon($date))->format('Ymd');
        $count = $this->LeaseOverhaulOrderRepository->where('no', 'like', $no."%")->count() + 1;
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
            $createData =  Arr::only($data, $this->LeaseOverhaulOrderRepository->getDetailFields());
            $createData['no']   =   $this->makeNo($createData['date']);
            $createData['make_id'] = auth()->user()->staff->id;
            $model     =   $this->LeaseOverhaulOrderRepository->create($createData);
            if(!$model){
                throw new ErrorException(__('backend.errors.insertFail'), 500);
            }
            $this->setItems($model, $data);
            if($model->sourceable && $model->sourceable?->status?->id == 1) {
                if($model->sourceable::class == 'App\Models\LeaseContractOrder') {
                    $model->sourceable->update(['lease_contract_order_statuses_id' => 2]);
                }else if($model->sourceable::class == 'App\Models\LeaseReturnFactoryOrder') {
                    $model->sourceable->update(['lease_return_factory_order_statuses_id' => 2]);
                }
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
            $updateData = Arr::only($data, $this->LeaseOverhaulOrderRepository->getDetailFields());
            $model =  $this->getLeaseOverhaulOrder($id);
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
        $model =  $this->getLeaseOverhaulOrder($id);
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
        return $this->LeaseOverhaulOrderRepository->select(['id', 'no'])->where($where)->get()->map(function($item) {
            return [
                'value' =>  $item->id,
                'name'  =>  "{$item->no}"
            ];
        })->toArray();
    }

}