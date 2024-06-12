<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseContractOrderItem extends Model
{
    use HasFactory, \App\Traits\ObserverTrait, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'lease_contract_order_id',
        'products_id',
        'name',
        'standard',
        'size',
        'count',
        'unit',
        'remark',
        'file',
        'depots_id',
        'unit_amount',
        'amount',
        'tax',
        'total_amount',
        'main_amount',
        'main_tax',
        'main_total_amount',
        'remark',
        'file',
        'factory_hours',
    ];

    protected $casts = [
    ];

    public static $audit = [
        'table' => LeaseContractOrder::class,
        //改存欄位 預設id
        'table_id' => 'lease_contract_order_id',

        'only' => [
            'lease_contract_order_id',
            'products_id',
            'name',
            'standard',
            'size',
            'count',
            'unit',
            'remark',
            'file',
            'depots_id',
            'unit_amount',
            'amount',
            'tax',
            'total_amount',
            'main_amount',
            'main_tax',
            'main_total_amount',
            'remark',
            'file',
            'factory_hours',
        ],
    ];

    public $detail = [
        'id',
        'lease_contract_order_id',
        'products_id',
        'name',
        'standard',
        'size',
        'count',
        'unit',
        'remark',
        'file',
        'depots_id',
        'unit_amount',
        'amount',
        'tax',
        'total_amount',
        'main_amount',
        'main_tax',
        'main_total_amount',
        'remark',
        'file',
        'factory_hours',
    ];
}
