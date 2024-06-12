<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseQuoteOrderItem extends Model
{
    use HasFactory, \App\Traits\ObserverTrait, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'lease_quote_orders_id',
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
    ];

    protected $casts = [
    ];

    public static $audit = [
        'table' => LeaseQuoteOrder::class,
        //改存欄位 預設id
        'table_id' => 'lease_quote_order_id',

        'only' => [
            'lease_quote_order_id',
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
        ],
    ];

    public $detail = [
        'id',
        'lease_quote_order_id',
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
    ];

}
