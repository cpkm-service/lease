<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseReturnFactoryOrder extends Model
{
    use HasFactory, \App\Traits\ObserverTrait, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'date',
        'no',
        'companies_id',
        'customers_id',
        'customer_contacts_id',
        'customer_phone',
        'lease_methods_id',
        'lease_date',
        'lease_address',
        'currencies_id',
        'staff_id',
        'make_id',
        'invoice_types_id',
        'amount',
        'tax',
        'total_amount',
        'main_amount',
        'main_tax',
        'main_total_amount',
        'remark',
        'file',
        'lease_contract_order_statuses_id',
        'sourceable_type',
        'sourceable_id',
        'lease_start_date',
        'lease_end_date',
        'project_managements_id',
    ];

    protected $casts = [
    ];

    public static $audit = [
        'only' => [
            'date',
            'no',
            'companies_id',
            'customers_id',
            'customer_contacts_id',
            'customer_phone',
            'lease_methods_id',
            'lease_date',
            'lease_address',
            'currencies_id',
            'staff_id',
            'make_id',
            'invoice_types_id',
            'amount',
            'tax',
            'total_amount',
            'main_amount',
            'main_tax',
            'main_total_amount',
            'remark',
            'file',
            'lease_return_factory_order_statuses_id',
            'lease_start_date',
            'lease_end_date',
            'project_managements_id',
        ],
        'translation' => [
            'lease_return_factory_order_statuses_id' => [
                'relation' => 'status',
                'format' => 'name',
            ],
            'project_managements_id' => [
                'relation' => 'project',
                'format' => 'name',
            ],
        ],
    ];

    public $detail = [
        'id',
        'date',
        'no',
        'companies_id',
        'customers_id',
        'customer_contacts_id',
        'customer_phone',
        'lease_methods_id',
        'lease_date',
        'lease_address',
        'currencies_id',
        'staff_id',
        'make_id',
        'invoice_types_id',
        'amount',
        'tax',
        'total_amount',
        'main_amount',
        'main_tax',
        'main_total_amount',
        'remark',
        'file',
        'lease_return_factory_order_statuses_id',
        'sourceable_id',
        'lease_start_date',
        'lease_end_date',
        'project_managements_id',
    ];

    public $with = [
        'staff',
        'items',
        'customer',
        'method',
        'customer_contact',
        'sourceable',
        'project',
    ];

    public function items()
    {
        return $this->hasMany(LeaseReturnFactoryOrderItem::class);
    }

    /**
     * 專案
     *
     * @return void
     */
    public function project() {
        return $this->hasOne(\App\Models\ProjectManagement::class, 'id', 'project_managements_id');
    }

    /**
     * 人員
     *
     * @return void
     */
    public function staff() {
        return $this->hasOne(\App\Models\Staff::class, 'id', 'staff_id');
    }

    public function sourceable() {
        return $this->hasOne(LeaseContractOrder::class, 'id', 'sourceable_id');
    }
    
    /**
     * 狀態
     *
     * @return void
     */
    public function status() {
        return $this->hasOne(LeaseReturnFactoryOrderStatus::class, 'id', 'lease_return_factory_order_statuses_id');
    }
    
    /**
     * 是否結案
     *
     * @return void
     */
    public function getCloseAttribute() {
        return in_array($this->lease_return_factory_order_statuses_id, [2,3]) || $this->contract_order;
    }
    
    /**
     * 租賃合約單
     *
     * @return void
     */
    public function contract_order() {
        return $this->hasOne(LeaseContractOrder::class, 'id', 'sourceable_id');
    }

    public function overhaul_order(){
        return $this->hasOne(LeaseOverhaulOrder::class, 'id', 'sourceable_id');
    }
        
    /**
     * 客戶
     *
     * @return void
     */
    public function customer() {
        return $this->hasOne(\App\Models\Customer::class, 'id', 'customers_id');
    }
    
    /**
     * 租賃方式
     *
     * @return void
     */
    public function method() {
        return $this->hasOne(LeaseMethod::class, 'id', 'lease_methods_id'); 
    }
    
    /**
     * 客戶聯絡人
     *
     * @return void
     */
    public function customer_contact() {
        return $this->hasOne(\App\Models\CustomerContact::class, 'id', 'customer_contacts_id');
    }
    
    /**
     * 幣別
     *
     * @return void
     */
    public function currency() {
        return $this->hasOne(\App\Models\Currency::class, 'id', 'currencies_id');
    }
    
    /**
     * 公司
     *
     * @return void
     */
    public function company() {
        return $this->hasOne(\App\Models\Company::class, 'id', 'companies_id');
    }
}
