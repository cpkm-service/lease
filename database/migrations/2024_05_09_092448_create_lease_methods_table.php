<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\LeaseMethod;

return new class extends Migration
{
    protected $data = [
        [
            'id'    => 1,
            'name' => '年租',
        ],
        [
            'id'    => 2,
            'name' => '月租',
        ],
        [
            'id'    => 3,
            'name' => '日租',
        ]
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lease_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('租賃方式名稱');
            $table->timestamps();
            $table->comment('租賃方式名稱');
        });

        foreach ($this->data as $key => $value) {
            LeaseMethod::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_methods');
    }
};
