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
        Schema::create('consignee_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consignee_id'); 
            $table->unsignedBigInteger('creation_id');
            $table->string('consignee_location');
            $table->date('consignee_date');
            $table->time('consignee_time');
            $table->text('consignee_description')->nullable();
            $table->string('consignee_type')->nullable();
            $table->integer('consignee_quantity')->nullable();
            $table->string('consignee_weight')->nullable();
            $table->decimal('consignee_value', 15, 2)->nullable();
            $table->text('delivery_notes')->nullable();
            $table->string('consignee_po_number')->nullable();
            $table->integer('consignee_pro_miles')->nullable();
            $table->string('consignee_empty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consignee_details');
    }
};
