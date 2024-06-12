<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseQuoteOrder extends Model
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
        'lease_quote_order_statuses_id',
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
            'lease_quote_order_statuses_id',
            'lease_start_date',
            'lease_end_date',
        ],
        'translation' => [
            'lease_quote_order_statuses_id' => [
                'relation' => 'status',
                'format' => 'name',
            ],
            'invoice_types_id'  =>  [
                'relation' => 'type',
                'format' => 'name',
            ],
            'currencies_id' =>  [
                'relation' => 'currency',
                'format' => 'name',
            ],
            'lease_methods_id'  =>  [
                'relation' => 'method',
                'format' => 'name',
            ],
            'staff_id'  =>  [
                'relation' => 'staff',
                'format' => 'name',
            ],
            'customers_id'  =>  [
                'relation' => 'customer',
                'format' => 'name',
            ],
            'companies_id'  =>  [
                'relation' => 'company',
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
        'lease_quote_order_statuses_id',
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
    
    /**
     * 租任何約項目
     *
     * @return void
     */
    public function items()
    {
        return $this->hasMany(LeaseQuoteOrderItem::class);
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
     * 報價單狀態
     *
     * @return \App\Models\LeaseQuoteOrderStatus
     */
    public function status() {
        return $this->hasOne(LeaseQuoteOrderStatus::class, 'id', 'lease_quote_order_statuses_id');
    }
    
    /**
     * 租賃合約單
     *
     * @return \App\Models\LeaseContractOrder
     */
    public function contract_order() {
        return $this->hasOne(LeaseContractOrder::class, 'sourceable_id', 'id');
    }

    public function getCloseAttribute() {
        return in_array($this->subscription_order_statuses_id, [2,3]) || ($this->inquiry_order || $this->purchase_order);
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
