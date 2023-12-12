<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class Consultant extends Model
{
    //
    protected $table = 'consultant_registeration';

    protected $fillable = [
            'companyName' ,
            'companyType' ,
            'industry',
            'email' ,
            'password',
            'role_id' ,
            'address',
            'country' ,
            'phone'   ,
            'companyDocuments',
            'companydesc' ,
            'firm',
            'industries',
            'commercialIndustry',
            'services',
            'specializedServices',
            'paymentOption' ,
            'feeOption'  ,
            'agreeTerms' ,
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
