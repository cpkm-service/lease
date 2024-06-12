<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseReturnFactoryOrderItem extends Model
{
    use HasFactory, \App\Traits\ObserverTrait, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'lease_return_factory_order_id',
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
        'return_factory_hours',
        'use_hours',
    ];

    protected $casts = [
    ];

    public static $audit = [
        'table' => LeaseReturnFactoryOrder::class,
        //改存欄位 預設id
        'table_id' => 'lease_return_factory_order_id',

        'only' => [
            'lease_return_factory_order_id',
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
            'return_factory_hours',
            'use_hours',
        ],
    ];

    public $detail = [
        'id',
        'lease_return_factory_order_id',
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
        'return_factory_hours',
        'use_hours',
    ];
}
