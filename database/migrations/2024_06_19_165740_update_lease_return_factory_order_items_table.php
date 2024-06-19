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
        Schema::table('lease_return_factory_order_items', function (Blueprint $table) {
            $table->decimal('use_hours', 16, 2)->default(0)->comment('使用時數')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lease_return_factory_order_items', function (Blueprint $table) {
            $table->unsignedDecimal('use_hours', 16, 2)->default(0)->comment('使用時數')->change();
        });
    }
};
