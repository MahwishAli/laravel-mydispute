<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestDispute extends Model
{
    //
    protected $table = 'request_dispute';

    protected $fillable = [
            'user_id' ,
            'companyName' ,
            'companyType' ,
            'industry',
            'email' ,
            'countryName',
            'phone',
            'industryType'   ,
            'disputeType',
            'specificIndustry' ,
            'paymentOption' ,
            'feeOption'  ,
            'region' ,
            'disputeDetail' ,
            'anonymousEmail' ,
            'anonymousPhone' ,
            'contractName' ,
    ];
}
