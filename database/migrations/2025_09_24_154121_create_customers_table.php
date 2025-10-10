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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('mc_ff')->nullable();
            $table->string('mc_ff_hidden')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('address')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('address_line3')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('ISBillingAddSameAsMailing')->nullable();
            $table->string('bill_address')->nullable();
            $table->string('bill_address_line2')->nullable();
            $table->string('bill_address_line3')->nullable();
            $table->string('bill_country')->nullable();
            $table->string('bill_state')->nullable();
            $table->string('bill_city')->nullable();
            $table->string('bill_zip_code')->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('telephone')->nullable();
            $table->string('extn')->nullable();
            $table->string('email')->nullable();
            $table->string('toll_free')->nullable();
            $table->string('fax')->nullable();
            $table->string('secondary_contact')->nullable();
            $table->string('secondary_email')->nullable();
            $table->string('bill_mail')->nullable();
            $table->string('secondary_telephone')->nullable();
            $table->string('secondary_extn')->nullable();
            $table->string('acc_sts')->nullable();
            $table->string('urs')->nullable();
            $table->string('black_listed')->nullable();;
            $table->string('is_broker')->nullable();;
            $table->string('curr_setting')->nullable();
            $table->string('payment_terms')->nullable();
            $table->decimal('credit_limit', 15, 2)->nullable();
            $table->string('sales_rep')->nullable();
            $table->string('factoring_company')->nullable();
            $table->string('federal_id')->nullable();
            $table->string('workers_comp')->nullable();
            $table->string('website_url')->nullable();
            $table->String('show_tel_tax')->nullable();
            $table->String('as_shipper')->nullable();
            $table->String('as_consignee')->nullable();
            $table->text('internal_notes')->nullable();
            $table->string('show_miles_quote')->nullable();;
            $table->string('rate_type')->nullable();
            $table->string('fsc_type')->nullable();
            $table->decimal('fsc_rate', 8, 2)->nullable();
            $table->string('created_by')->nullable();
            $table->string('created_name')->nullable();
            $table->date('created_date')->nullable();
            $table->dateTime('created_datetime')->nullable();
            $table->dateTime('last_update_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
