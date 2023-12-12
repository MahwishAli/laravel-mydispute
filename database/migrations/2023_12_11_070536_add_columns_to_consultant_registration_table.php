<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToConsultantRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultant_registeration', function (Blueprint $table) {
            //
            $table->string('commercialIndustry')->after('industries')->nullable();
            $table->string('specializedServices')->after('services')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultant_registeration', function (Blueprint $table) {
            //
        });
    }
}
