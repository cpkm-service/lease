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
        Schema::table('lease_contract_orders', function (Blueprint $table) {
            $table->date('lease_start_date')->nullable()->comment('租賃開始日期')->after('lease_date');
            $table->date('lease_end_date')->nullable()->comment('租賃結束日期')->after('lease_start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lease_contract_orders', function (Blueprint $table) {
            $table->dropColumn('lease_start_date');
            $table->dropColumn('lease_end_date');
        });
    }
};
