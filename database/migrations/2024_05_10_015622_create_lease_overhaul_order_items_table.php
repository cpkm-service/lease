<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lease_overhaul_order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lease_overhaul_order_id')->comment('回廠單單id');
            $table->unsignedBigInteger('products_id')->comment('產品編號');
            $table->string('name')->nullable()->comment('品名');
            $table->string('standard')->nullable()->comment('規格');
            $table->string('size')->nullable()->comment('尺寸');
            $table->unsignedBigInteger('count')->default(0)->comment('數量');
            $table->string('unit')->nullable()->comment('單位');
            $table->text('remark')->nullable()->comment('備註');
            $table->string('file')->nullable()->comment('附加檔案');
            $table->string('record')->nullable()->comment('檢修紀錄');
            $table->unsignedBigInteger('depots_id')->nullable()->comment('倉庫id');
            $table->decimal('unit_amount', 16, 4)->default(0)->comment('單價');
            $table->decimal('amount', 16, 4)->default(0)->comment('未稅金額');
            $table->decimal('tax', 16, 4)->default(0)->comment('稅金');
            $table->decimal('total_amount', 16, 4)->default(0)->comment('總金額');
            $table->decimal('main_amount', 16, 4)->default(0)->comment('未稅金額(本位幣)');
            $table->decimal('main_tax', 16, 4)->default(0)->comment('稅金(本位幣)');
            $table->decimal('main_total_amount', 16, 4)->default(0)->comment('總金額(本位幣)');
            $table->timestamps();
            $table->comment('檢修單項目');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_overhaul_order_items');
    }
};
