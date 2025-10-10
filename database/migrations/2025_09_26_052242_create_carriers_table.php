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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('carrier_name', 255);
            $table->string('mc_ff', 10);
            $table->string('mc_ff_hidden', 50)->nullable();
            $table->string('dot', 50)->nullable();
            $table->string('address', 255);
            $table->string('address_line2', 255)->nullable();
            $table->string('address_line3', 255)->nullable();
            $table->string('country', 100);
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('zip_code', 20);
            $table->string('contact_name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telephone', 20);
            $table->string('extn', 10)->nullable();
            $table->string('toll_free', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('payment_terms', 50);
            $table->string('tax_id', 50)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('urs', 50)->nullable();
            $table->string('factoring_company', 100);
            $table->text('notes')->nullable();
            $table->tinyInteger('acc_sts');
            $table->string('load_type', 50);
            $table->enum('black_listed', ['Yes', 'No'])->default('No');
            $table->enum('corporation', ['Yes', 'No'])->default('No');
            $table->string('lib_company', 255)->nullable();
            $table->string('lib_policy_no', 50)->nullable();
            $table->date('lib_exp_date')->nullable();
            $table->string('lib_telephone', 20)->nullable();
            $table->string('lib_extn', 10)->nullable();
            $table->string('lib_contact', 100)->nullable();
            $table->decimal('lib_liability', 15, 2)->nullable();
            $table->text('lib_notes')->nullable();
            $table->enum('ins_com_same_lib', ['Yes', 'No'])->default('No');
            $table->string('ins_company', 255)->nullable();
            $table->string('ins_policy_no', 50)->nullable();
            $table->date('ins_exp_date')->nullable();
            $table->string('ins_telephone', 20)->nullable();
            $table->string('ins_extn', 10)->nullable();
            $table->string('ins_contact', 100)->nullable();
            $table->decimal('ins_liability', 15, 2)->nullable();
            $table->text('ins_notes')->nullable();
            $table->enum('cargo_com_same_lib', ['Yes', 'No'])->default('No');
            $table->string('cargo_company', 255)->nullable();
            $table->string('cargo_policy_no', 50)->nullable();
            $table->date('cargo_exp_date')->nullable();
            $table->string('cargo_telephone', 20)->nullable();
            $table->string('cargo_extn', 10)->nullable();
            $table->decimal('cargo_liability', 15, 2)->nullable();
            $table->string('cargo_contact', 100)->nullable();
            $table->text('cargo_notes')->nullable();
            $table->string('wsib', 50)->nullable();
            $table->string('fmcsa_ins_com', 255)->nullable();
            $table->string('wsib_policy_no', 50)->nullable();
            $table->date('wsib_exp_date')->nullable();
            $table->string('wsib_type', 50)->nullable();
            $table->decimal('wsib_coverage', 15, 2)->nullable();
            $table->string('wsib_telephone', 20)->nullable();
            $table->string('best_rating', 20)->nullable();
            $table->string('primary_name', 100)->nullable();
            $table->string('primary_telephone', 20)->nullable();
            $table->string('primary_email', 100)->nullable();
            $table->string('sec_name', 100)->nullable();
            $table->string('sec_telephone', 20)->nullable();
            $table->string('sec_email', 100)->nullable();
            $table->integer('size_of_fleet')->default(0);
            $table->text('main_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
