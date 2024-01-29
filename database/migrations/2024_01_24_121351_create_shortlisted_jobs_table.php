<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortlistedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortlisted_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('consultant_registeration');
            $table->foreignId('request_id')->constrained('consultant_registeration');
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
        Schema::dropIfExists('shortlisted_jobs');
    }
}
