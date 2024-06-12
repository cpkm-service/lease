<?php

namespace Cpkm\Lease\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseMethod extends Model
{
    use HasFactory, \Cpkm\Admin\Traits\ObserverTrait;

    protected $fillable = [
        'id',
        'name',
    ];

    public static $audit = [
        'only' => [
            'name',
        ],
    ];
}
