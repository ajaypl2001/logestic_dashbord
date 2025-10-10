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
        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addressl_1')->nullable();
            $table->string('addressl_2')->nullable();
            $table->string('addressl_3')->nullable();
            $table->string('country_name')->nullable();
            $table->string('state_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('tele_phone')->nullable();
            $table->string('telephone_ext')->nullable();
            $table->string('toll_free')->nullable();
            $table->string('fax')->nullable();
            $table->string('shipping_hours')->nullable();
            $table->string('appointments')->nullable();
            $table->string('major_inspection_Dir')->nullable();
            $table->string('duplicate_Info')->nullable();
            $table->tinyInteger('status_ind')->default(1);
            $table->text('notes')->nullable();
            $table->text('internal_notes')->nullable();
            $table->string('as_consignee')->nullable();
            $table->tinyInteger('acc_sts')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippers');
    }
};
