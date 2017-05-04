<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('alt_email')->nullable();
            $table->string('next_of_kin_title')->nullable();
            $table->string('next_of_kin_first_name')->nullable();
            $table->string('next_of_kin_middle_name')->nullable();
            $table->string('next_of_kin_last_name')->nullable();
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_phone')->nullable();
            $table->string('next_of_kin_alt_phone')->nullable();
            $table->string('next_of_kin_email')->nullable();
            $table->string('next_of_kin_address')->nullable();
            $table->string('proposed_investment_amount');
            $table->string('amount_paid');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('communication_channel');
            $table->string('number_of_hectares');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
