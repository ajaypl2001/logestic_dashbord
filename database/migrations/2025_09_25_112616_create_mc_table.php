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
        Schema::create('mc', function (Blueprint $table) {
            $table->id();
            $table->string('mc_no', 55)->default('');
            $table->string('carrier_name', 55)->default('');
            $table->string('commodity_type', 55)->default('');
            $table->string('commodity_value', 55)->default('');
            $table->string('equ_type', 55)->default('');
            $table->string('com_value_prf', 55)->default('');
            $table->string('created_datetime', 25)->default('');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mc');
    }
};
