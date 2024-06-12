<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseOverhaulOrderItem extends Model
{
    use HasFactory, \App\Traits\ObserverTrait, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'lease_overhaul_order_id',
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
        'record',
    ];

    protected $casts = [
    ];

    public static $audit = [
        'table' => LeaseOverhaulOrder::class,
        //改存欄位 預設id
        'table_id' => 'lease_overhaul_order_id',

        'only' => [
            'lease_overhaul_order_id',
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
            'record',
        ],
    ];

    public $detail = [
        'id',
        'lease_overhaul_order_id',
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
        'record',
    ];
}
