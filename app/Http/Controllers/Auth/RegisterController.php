<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Initiator;
use App\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showRegistrationForm(){
        dd('hello');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => Role::where('name', $data['role'])->first()->id,
        ]);
    }

    protected function initiatorRegister(Request $request)
    {
        // dd($request->agreeTerms);
        // Retrieve the role ID for 'initiator'
        $role = Role::where('name', 'initiator')->pluck('id')->first();

        $validator = Validator::make($request->all(), [
            'companyName'       => 'required|string',
            'companyType'       => 'required|string',
            'industry'          => ($request->input('companyType') == 'Commercial') ? 'required|string' : '',
            'email'             => 'required|string|email|unique:initiator_registeration',
            'password'          => 'required|string|confirmed|min:8',
            'role_id'           => 'required',
            'address'           => 'string',
            'country'           => 'required|string',
            'phone'             => 'required',
            'companyDocuments'  => 'nullable|mimes:jpeg,png,jpg,gif,docx',
            'companydesc'       => 'required|string',
            'paymentOption'     => 'required',
            'feeOption'         => (in_array('Fee Based only', $request->input('paymentOption'))) ? 'required' : '',

            'agreeTerms'        => ['required','array','size:4', // Ensure exactly 4 checkboxes are selected
                function ($attribute, $value, $fail) {
                    // Ensure that at least one of the first three checkboxes is selected
                    if (count(array_intersect($value, ['terms and conditions', 'terms and Disclaimer', 'authentic information'])) < 1) {
                        $fail('At least one of the first three checkboxes must be selected.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('companyDocuments')) {
            $document = $request->file('companyDocuments');  // Use file() method to get UploadedFile instance
            $fileName = time().'.'.$document->extension();
            $document->move(public_path('documentUpload'), $fileName);
            
            $request->merge(['companyDocuments' => $fileName]);
        }
        
        // Hash the password before storing it in the database
        $request->merge(['password' => Hash::make($request->password)]);

        // Add the role_id to the request data
        $request->merge(['role_id' => $role]);

        // Add the paymentOption to the request data
        $request->merge(['paymentOption' => json_encode($request->paymentOption)]);

        // Add the feeOption to the request data
        $request->merge(['feeOption' => json_encode($request->feeOption)]);

        // Add the paymentOption to the request data
        $request->merge(['agreeTerms' => json_encode($request->agreeTerms)]);

        // Store the form data in the database
        $userData = Initiator::create($request->all());

        // You can return a response or redirect to another page
        return response()->json(['success'=>'Account created successfully!']); 
    }

    protected function consultantRegister(Request $request)
    {
        // dd($request->agreeTerms);
        // Retrieve the role ID for 'initiator'
        $role = Role::where('name', 'consultant')->pluck('id')->first();

        $validator = Validator::make($request->all(), [
            'companyName'       => 'required|string',
            'companyType'       => 'required|string',
            'industry'          => ($request->input('companyType') == 'Commercial') ? 'required|string' : '',
            'email'             => 'required|string|email|unique:consultant_registeration',
            'password'          => 'required|string|confirmed|min:8',
            'role_id'           => 'required',
            'address'           => 'string',
            'country'           => 'required|string',
            'phone'             => 'required',
            'companyDocuments'  => 'nullable|mimes:jpeg,png,jpg,gif,docx',
            'companydesc'       => 'required|string',
            'firm'              => 'required',
            'industries'        => 'required',
            'commercialIndustry'      => (in_array('Commercial Industry', $request->input('industries'))) ? 'required' : '',
            'services'                => 'required',
            'specializedServices'     => (in_array('Specific Specialized Services', $request->input('services'))) ? 'required' : '',
            'paymentOption'           => 'required',
            'feeOption'               => (in_array('Fee Based only', $request->input('paymentOption'))) ? 'required' : '',
            'agreeTerms'              => ['required','array','size:4', 
                function ($attribute, $value, $fail) 
                {
                    if (count(array_intersect($value, ['terms and conditions', 'terms and Disclaimer', 'authentic information'])) < 1) {
                        $fail('At least one of the first three checkboxes must be selected.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('companyDocuments')) {
            $document = $request->file('companyDocuments');  // Use file() method to get UploadedFile instance
            $fileName = time().'.'.$document->extension();
            $document->move(public_path('documentUpload'), $fileName);
            $request->merge(['companyDocuments' => $fileName]);
        }

        // Hash the password before storing it in the database
        $request->merge(['password' => Hash::make($request->password)]);

        // Add the role_id to the request data
        $request->merge(['role_id' => $role]);

        $request->merge(['firm' => json_encode($request->firm)]);

        $request->merge(['industries' => json_encode($request->industries)]);

         $request->merge(['services' => json_encode($request->services)]);

        // Add the paymentOption to the request data
        $request->merge(['paymentOption' => json_encode($request->paymentOption)]);

        // Add the feeOption to the request data
        $request->merge(['feeOption' => json_encode($request->feeOption)]);

        // Add the paymentOption to the request data
        $request->merge(['agreeTerms' => json_encode($request->agreeTerms)]);

        // Store the form data in the database
        $userData = Consultant::create($request->all());

        // You can return a response or redirect to another page
        return response()->json(['success'=>'Account created successfully!']); 
    }
}
