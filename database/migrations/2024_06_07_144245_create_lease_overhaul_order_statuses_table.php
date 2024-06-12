<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\LeaseOverhaulOrderStatus;

return new class extends Migration
{
    public $data = [
        [
            'id'    =>  1,
            'name'  => '未結案',
        ],
        [
            'id'    =>  2,
            'name'  => '結案',
        ],
        [
            'id'    =>  3,
            'name'  => '取消',
        ],
        // [
        //     'id'    =>  4,
        //     'name'  => '檢修中',
        // ],
        // [
        //     'id'    =>  5,
        //     'name'  => '檢修完成',
        // ]
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lease_overhaul_order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名稱');
            $table->timestamps();
            $table->comment('檢修單狀態');
        });
        foreach ($this->data as $key => $value) {
            LeaseOverhaulOrderStatus::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_overhaul_order_statuses');
    }
};
