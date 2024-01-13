<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('initiator_registeration');
            $table->string('contact_details');
            $table->string('unsubscribe')->nullable();
            $table->string('busy_status');
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
        Schema::dropIfExists('privacy_details');
    }
}
