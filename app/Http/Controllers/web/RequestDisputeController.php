<?php

namespace App\Http\Controllers\web;

use App\RequestDispute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RequestDisputeController extends Controller
{
    public function disputeForm(Request $request){

        // dd($request->input('paymentOption'));
        $request->validate([
            'companyName'       => 'required',
            'companyType'       => 'required',
            'industry'          => ($request->input('companyType') == 'Commercial') ? 'required|string' : '',
            'email'             => 'required|email',
            'address'           => 'nullable',
            'countryName'       => 'required',
            'phone'             => 'required',
            'companyDocuments'  => 'nullable',
            'industryType'      => 'required',
            'disputeType'       => 'required',
            'specificIndustry'  => ($request->input('industryType') == 'Commercial') ? 'required|string' : '',
            'disputeAmount'     => 'nullable',
            'paymentOption'     => 'required',
            'feeOption'         => ($request->input('paymentOption') && in_array('Fee Based only', $request->input('paymentOption'))) ? 'required' : '',
            'awardPercentage'   => 'nullable',
            'region'            => 'required',
            'country'           => 'nullable',
            'disputeDetail'     => 'required',
            'anonymousEmail'    => ($request->input('disputeDetail') == 'Anonymous') ? 'required' : '',
            'anonymousPhone'    => ($request->input('disputeDetail') == 'Anonymous') ? 'required' : '',
            'serviceType'       => 'nullable',
            'contract'          => 'nullable',
            'contractName'      => ($request->input('contract') == 'otherCont') ? 'required' : '',
            'details'           => 'nullable',
            'summary'           => 'nullable',
            'disputeServices'   => 'nullable',
            'disputeResolution' => 'nullable',
            'services'          => 'nullable',
            'pre_dispute'       => 'nullable',
            'post_dispute'      => 'nullable',
            'preferences'       => 'nullable',
            'services'          => 'nullable',
            'pre_dispute'       => 'nullable',
            'post_dispute'      => 'nullable',
            'preferences'       => 'nullable',
            'attachment'        => 'nullable',
            'proposalReceiving' => ['nullable','array',
                function ($attribute, $value, $fail) {
                    $requiredValues = ['terms and conditions', 'terms and Disclaimer', 'requirement is genuine'];

                    // Check if at least one of the required values is missing
                    if (count(array_intersect($value, $requiredValues)) !== count($requiredValues)) {
                        $fail('Last three fields are required.');
                    }
                },
            ],
        ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }

        // Add the paymentOption to the request data
        $request->merge(['paymentOption' => json_encode($request->paymentOption)]);

        // Add the feeOption to the request data
        $request->merge(['feeOption' => json_encode($request->feeOption)]);

        // Add the details to the request data
        $request->merge(['disputeServices' => json_encode($request->disputeServices)]);

        // Add the services to the request data
        $request->merge(['services' => json_encode($request->services)]);

        // Add the details to the request data
        $request->merge(['details' => json_encode($request->details)]);

        // Add the services to the request data
        $request->merge(['preferences' => json_encode($request->preferences)]);

        // Add the proposalReceiving to the request data
        $request->merge(['proposalReceiving' => json_encode($request->proposalReceiving)]);

        // Store the form data in the database
        $disputeData = RequestDispute::create($request->all());

        // You can return a response or redirect to another page
        return back()->with('success', 'Data submitted successfully!');

    }
}
