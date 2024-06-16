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
        Schema::table('lease_quote_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('project_managements_id')->nullable()->comment('傳案')->after('lease_end_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lease_quote_orders', function (Blueprint $table) {
            $table->dropColumn('project_managements_id');
        });
    }
};
