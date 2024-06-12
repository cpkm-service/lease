<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseContractOrder extends Model
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
            'lease_contract_order_statuses_id',
            'lease_start_date',
            'lease_end_date',
        ],
        'translation' => [
            'lease_contract_order_statuses_id' => [
                'relation' => 'status',
                'format' => 'name',
            ],
            // 'projects_id' => [
            //     'relation' => 'project',
            //     'format' => 'name',
            // ],
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
        'lease_contract_order_statuses_id',
        'sourceable_id',
        'lease_start_date',
        'lease_end_date',
    ];

    public $with = [
        'staff',
        'items',
        'customer',
        'method',
        'customer_contact'
    ];

    public function items()
    {
        return $this->hasMany(LeaseContractOrderItem::class);
    }

    /**
     * 人員
     *
     * @return void
     */
    public function staff() {
        return $this->hasOne(\App\Models\Staff::class, 'id', 'staff_id');
    }

    /**
     * 來源租賃報價單
     *
     * @return void
     */
    public function sourceable() {
        return $this->hasOne(LeaseQuoteOrder::class, 'id', 'sourceable_id');
    }

    public function status() {
        return $this->hasOne(LeaseContractOrderStatus::class, 'id', 'lease_contract_order_statuses_id');
    }

    public function getCloseAttribute() {
        return in_array($this->lease_contract_order_statuses_id, [2,3]);
    }
    
    public function customer() {
        return $this->hasOne(\App\Models\Customer::class, 'id', 'customers_id');
    }

    public function method() {
        return $this->hasOne(LeaseMethod::class, 'id', 'lease_methods_id'); 
    }

    public function customer_contact() {
        return $this->hasOne(\App\Models\CustomerContact::class, 'id', 'customer_contacts_id');
    }

    public function currency() {
        return $this->hasOne(Currency::class, 'id', 'currencies_id');
    }

    public function company() {
        return $this->hasOne(Company::class, 'id', 'companies_id');
    }
    
    /**
     * 回廠單
     *
     * @return void
     */
    public function return_factory_order() {
        return $this->hasOne(LeaseReturnFactoryOrder::class, 'sourceable_id', 'id');
    }
    
    /**
     * 檢修單
     *
     * @return void
     */
    public function overhaul_order() {
        return $this->hasOne(LeaseOverhaulOrder::class, 'sourceable_id', 'id');
    }
}
