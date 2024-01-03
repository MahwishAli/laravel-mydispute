<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDisputeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_dispute', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyType');
            $table->string('industry')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('countryName');
            $table->string('phone');
            $table->text('companyDocuments')->nullable();
            $table->string('industryType');
            $table->string('disputeType');
            $table->string('specificIndustry')->nullable();
            $table->decimal('disputeAmount', 10, 2)->nullable();
            $table->string('paymentOption');
            $table->string('feeOption')->nullable();
            $table->string('awardPercentage')->nullable();
            $table->string('region');
            $table->string('country')->nullable();
            $table->string('disputeDetail');
            $table->string('anonymousEmail')->nullable();
            $table->string('anonymousPhone')->nullable();
            $table->string('serviceType')->nullable();
            $table->string('contract')->nullable();
            $table->string('contractName')->nullable();
            $table->string('details')->nullable();
            $table->text('summary')->nullable();
            $table->string('disputeServices')->nullable();
            $table->string('disputeResolution')->nullable();
            $table->string('services')->nullable();
            $table->string('pre_dispute')->nullable();
            $table->string('post_dispute')->nullable();
            $table->string('preferences')->nullable();
            $table->text('attachment')->nullable();
            $table->string('proposalReceiving')->nullable();
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
        Schema::dropIfExists('request_dispute');
    }
}
