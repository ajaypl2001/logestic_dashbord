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
        Schema::create('shipper_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipper_id');
            $table->unsignedBigInteger('creation_id');
            $table->string('shipper_location');
            $table->date('shipper_date');
            $table->time('shipper_chktime')->nullable();
            $table->text('shipper_description')->nullable();
            $table->string('shipper_type')->nullable();
            $table->integer('shipper_qty')->nullable();
            $table->decimal('shipper_weight', 10, 2)->nullable();
            $table->decimal('shipper_value', 10, 2)->nullable();
            $table->text('shipping_notes')->nullable();
            $table->string('po_number')->nullable();
            $table->string('customer_broker')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipper_details');
    }
};
