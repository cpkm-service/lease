<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseContractOrderStatus extends Model
{
    use HasFactory, \Cpkm\Admin\Traits\QueryTrait;

    protected $fillable = [
        'name',
    ];

    public static $audit = [
        //要紀錄欄位
        'only' => [
            'name',
        ],
    ];
    
    /** 
     * @access protected
     * @var detail
     * @version 1.0
     * @author Henry
    **/
    protected $detail = [
        'id',
        'name',
    ];


    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
