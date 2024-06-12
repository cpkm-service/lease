<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\AdminPermission;

return new class extends Migration
{
    public $permissionList = [
        [
            'id'            => '295',
            'name'          => '租賃系統',
            'parent_id'     => NULL,
            'is_show'       => '1',
            'seq'           =>  16,
            'link'          => NULL,
            'controller'    => NULL,
            'function'      => NULL,
        ],
        [
            'id'            => '296',
            'name'          => '租賃報價單',
            'parent_id'     => '295',
            'is_show'       => 1,
            'link'          => 'lease.quote_order',
            'controller'    => 'App\Http\Controllers\Backend\Lease\QuoteOrderController',
            'function'      => 'create,store',
            'tags_hide'     => '.create',
        ],
        [
            'id'            => '297',
            'name'          => '新增租賃報價單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\QuoteOrderController',
            'function'      => 'show',
            'tags_hide'     => '.read',
        ],
        [
            'id'            => '298',
            'name'          => '修改租賃報價單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\QuoteOrderController',
            'function'      => 'edit,update',
            'tags_hide'     => '.edit',
        ],
        [
            'id'            => '299',
            'name'          => '刪除租賃報價單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\QuoteOrderController',
            'function'      => 'destroy',
            'tags_hide'     => '.delete',
        ],
        [
            'id'            => '300',
            'name'          => '租賃合約單',
            'parent_id'     => '295',
            'is_show'       => 1,
            'link'          => 'lease.contract_order',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ContractOrderController',
            'function'      => 'create,store',
            'tags_hide'     => '.create',
        ],
        [
            'id'            => '301',
            'name'          => '新增租賃合約單',
            'parent_id'     => '300',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ContractOrderController',
            'function'      => 'show',
            'tags_hide'     => '.read',
        ],
        [
            'id'            => '302',
            'name'          => '修改租賃合約單',
            'parent_id'     => '300',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ContractOrderController',
            'function'      => 'edit,update',
            'tags_hide'     => '.edit',
        ],
        [
            'id'            => '303',
            'name'          => '刪除租賃合約單',
            'parent_id'     => '300',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ContractOrderController',
            'function'      => 'destroy',
            'tags_hide'     => '.delete',
        ],
        [
            'id'            => '304',
            'name'          => '回廠單',
            'parent_id'     => '295',
            'is_show'       => 1,
            'link'          => 'lease.return_factory_order',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ReturnFactoryOrderController',
            'function'      => 'create,store',
            'tags_hide'     => '.create',
        ],
        [
            'id'            => '305',
            'name'          => '新增回廠單',
            'parent_id'     => '304',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ReturnFactoryOrderController',
            'function'      => 'show',
            'tags_hide'     => '.read',
        ],
        [
            'id'            => '306',
            'name'          => '修改回廠單',
            'parent_id'     => '304',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ReturnFactoryOrderController',
            'function'      => 'edit,update',
            'tags_hide'     => '.edit',
        ],
        [
            'id'            => '307',
            'name'          => '刪除回廠單',
            'parent_id'     => '304',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\ReturnFactoryOrderController',
            'function'      => 'destroy',
            'tags_hide'     => '.delete',
        ],
        [
            'id'            => '308',
            'name'          => '檢修單',
            'parent_id'     => '295',
            'is_show'       => 1,
            'link'          => 'lease.overhaul_order',
            'controller'    => 'App\Http\Controllers\Backend\Lease\OverHaulOrderController',
            'function'      => 'create,store',
            'tags_hide'     => '.create',
        ],
        [
            'id'            => '309',
            'name'          => '新增檢修單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\OverHaulOrderController',
            'function'      => 'show',
            'tags_hide'     => '.read',
        ],
        [
            'id'            => '310',
            'name'          => '修改檢修單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\OverHaulOrderController',
            'function'      => 'edit,update',
            'tags_hide'     => '.edit',
        ],
        [
            'id'            => '311',
            'name'          => '刪除檢修單',
            'parent_id'     => '296',
            'is_show'       => '0',
            'controller'    => 'App\Http\Controllers\Backend\Lease\OverHaulOrderController',
            'function'      => 'destroy',
            'tags_hide'     => '.delete',
        ],
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach ($this->permissionList as $key => $value) {
            AdminPermission::create($value);
        } 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach ($this->permissionList as $key => $value) {
            AdminPermission::where('id',$value['id'])->delete();
        } 
    }
};
