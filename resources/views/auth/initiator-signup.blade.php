@extends('layouts.web')
@section('content')

<section class="sign_up_initiator pt-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center mb-4">
                <h1 class="center">Registration Form</h1>
                <p>Companies Seeking Dispute Resolution Services</p>
                <div class="seperator member-signup"></div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-lg-11 col-md-12 ini-signup-form form-all bg-white mb-5">
                <form action="#" method="post" enctype="multipart/form-data">
                    <!-- Company Information -->
                    <div class="row my-5 mx-2">
                        <!-- Company Information -->
                        <div class="col-md-6 mb-3">
                            <label for="companyName" class="form-label">Company Name: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="companyName" name="companyName" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="companyType" class="form-label">Company Type: <span class="text-danger">*</span></label>
                            <select class="form-select" id="companyType" name="companyType" required>
                                <option value="Construction">Construction</option>
                                <option value="Finance">Finance</option>
                                <option value="Trade">Trade</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                        </div>

                    <!-- Specific Industry (Visible only if Commercial is selected) -->
                        <div id="specificIndustry" class="col-md-12 mb-3" style="display: none;">
                            <label for="industry" class="form-label">Please mention your Specific Industry: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="industry" name="industry" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address: <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Country: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="country" name="country" required>     
                            <div class="mt-3">
                                <label for="phone" class="form-label">Phone No.: <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <!-- Company Documents Attachment -->
                        <div class="col-md-6 mb-3">
                            <label for="companyDocuments" class="form-label">Company Documents Attachment:</label>
                            <input type="file" class="form-control" id="companyDocuments" name="companyDocuments">
                            <small>(can upload later)</small>
                            <p class="form-text">We encourage you to upload company documents as this increases your chance of success in finding the right Dispute Resolution Partner.</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Please describe your company and style of work concisely in the below: </label>
                            <textarea class="form-text col-12" rows="8" placeholder="We are a construction company located in Oman, established in the year 1980. We deal in building roads, dams and water and wastewater treatment plants in the Middle East. We have a turnover of USD 10 million and we do employ sub-contractors from time-to-time. We mainly deal with government or semi government projects. We know that sometimes disputes can be resolved amicably but may require independent third-party evaluation even in Mediation. Due to the expansion of the company and intense growth we like to resolve our disputes by sharing a percentage on an award especially in arbitrations.(This all written but when the person clicks on this box all written above is removed – above only for idea purposes for the person/company to write. 
                            "></textarea>
                        </div>
                        
                        <!-- Payment Options -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">We are generally interested in the following payment options (select as desired – one or more):</label>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="feeBased" name="paymentOption" value="Fee Based only">
                                <label class="form-check-label" for="feeBased">Fee Based only</label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="feeAndAward" name="paymentOption" value="Fee and Award Percentage Based">
                                <label class="form-check-label" for="feeAndAward">Fee and Award Percentage Based</label>
                            </div>
                            
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="awardPercentage" name="paymentOption" value="Award Percentage Based only">
                                <label class="form-check-label" for="awardPercentage">Award Percentage Based only</label>
                            </div>
                            <!-- Additional Options for Fee Based -->
                            <div id="feeBasedOptions" class=" mt-4" style="display: none;">
                                <label class="form-label">Please select one or as desired:</label>
                                
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="lumpSum" name="feeOption" value="Lump Sum Fee">
                                    <label class="form-check-label" for="lumpSum">Lump Sum Fee</label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="hourlyBased" name="feeOption" value="Hourly Based Fee">
                                    <label class="form-check-label" for="hourlyBased">Hourly Based Fee</label>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Agreement and Declaration -->
                        <div class="col-md-6 mb-3">
                            <label class="form-check-label mb-2">Select to submit form:</label>
                            
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">I agree to the terms and conditions</label>
                            </div>
                            
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="agreeDisclaimer" name="agreeDisclaimer" required>
                                <label class="form-check-label" for="agreeDisclaimer">I agree to the terms of the Disclaimer</label>
                            </div>
                            
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="declareAuthentic" name="declareAuthentic" required>
                                <label class="form-check-label" for="declareAuthentic">I declare that all information provided here is correct and authentic.</label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="receivePromotions" name="receivePromotions">
                                <label class="form-check-label" for="receivePromotions">I want to receive promotional information from MyDRP (optional)</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="row text-center my-5">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a type="submit" class="btn btn-primary" style="background: #006DA7">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Show/hide specific industry field based on Company Type
        document.getElementById('companyType').addEventListener('change', function () {
            var specificIndustry = document.getElementById('specificIndustry');
            specificIndustry.style.display = (this.value === 'Commercial') ? 'block' : 'none';
        });

        // Show/hide Fee Based options based on payment options
        document.getElementById('feeBased').addEventListener('change', function () {
            var feeBasedOptions = document.getElementById('feeBasedOptions');
            feeBasedOptions.style.display = this.checked ? 'block' : 'none';
        });
    </script>
</section>
@endsection