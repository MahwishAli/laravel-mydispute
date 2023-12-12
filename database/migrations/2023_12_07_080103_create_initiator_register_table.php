<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiatorRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiator_register', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyType');
            $table->string('industry')->nullable();
            $table->string('email', 191)->unique(); 
            $table->string('password');
            $table->foreignId('role_id')->constrained('roles');
            $table->text('address')->nullable();
            $table->string('country');
            $table->string('phone');
            $table->text('companyDocuments')->nullable();
            $table->text('companydesc');
            $table->string('paymentOption');
            $table->string('feeOption')->nullable();
            $table->boolean('agreeTerms');
            $table->boolean('agreeDisclaimer');
            $table->boolean('declareAuthentic');
            $table->boolean('receivePromotions')->nullable();
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
        Schema::dropIfExists('initiator_register');
    }
}
