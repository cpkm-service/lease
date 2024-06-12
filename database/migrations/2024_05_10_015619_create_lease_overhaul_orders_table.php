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
        Schema::create('lease_overhaul_orders', function (Blueprint $table) {
            $table->id();
            $table->date('date')->comment('日期');
            $table->string('no')->comment('單號');
            $table->unsignedBigInteger('companies_id')->comment('公司別');
            $table->unsignedBigInteger('customers_id')->nullable()->comment('租賃客戶id');
            $table->nullableMorphs('sourceable');
            $table->unsignedBigInteger('customer_contacts_id')->nullable()->comment('租賃客戶聯絡人');
            $table->string('customer_phone')->nullable()->comment('廠商連絡電話');
            $table->unsignedBigInteger('lease_methods_id')->nullable()->comment('租賃方式');
            $table->string('lease_date')->nullable()->comment('租賃期間');
            $table->string('lease_address')->nullable()->comment('租賃地址');
            $table->unsignedBigInteger('currencies_id')->comment('幣別');
            $table->unsignedBigInteger('staff_id')->comment('業務人員');
            $table->unsignedBigInteger('make_id')->comment('製單人員');
            $table->unsignedBigInteger('invoice_types_id')->comment('發票類型');
            $table->decimal('amount', 16, 4)->default(0)->comment('未稅金額');
            $table->decimal('tax', 16, 4)->default(0)->comment('稅金');
            $table->decimal('total_amount', 16, 4)->default(0)->comment('總金額');
            $table->decimal('main_amount', 16, 4)->default(0)->comment('未稅金額(本位幣)');
            $table->decimal('main_tax', 16, 4)->default(0)->comment('稅金(本位幣)');
            $table->decimal('main_total_amount', 16, 4)->default(0)->comment('總金額(本位幣)');
            $table->text('remark')->nullable()->comment('備註');
            $table->unsignedTinyInteger('lease_overhaul_order_statuses_id')->default(1)->comment('狀態');
            $table->string('file')->nullable()->comment('附加檔案');
            $table->timestamps();
            $table->comment('檢修單');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_overhaul_orders');
    }
};
