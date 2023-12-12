<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantRegisterationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_registeration', function (Blueprint $table) {
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
            $table->text('companydesc')->nullable();
            $table->string('firm');
            $table->text('industries');
            $table->text('services');
            $table->string('paymentOption');
            $table->string('feeOption')->nullable();
            $table->string('agreeTerms');
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
        Schema::dropIfExists('consultant_registeration');
    }
}
