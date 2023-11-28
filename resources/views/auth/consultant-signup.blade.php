@extends('layouts.web')
@section('content')
<section class="sign_up_consultant pt-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center mb-4">
                <h1 class="center">Registration Form</h1>
                <p>Companies Providing Dispute Resolution Services</p>
                <div class="seperator member-signup"></div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-lg-11 col-md-12 con-signup-form form-all bg-white mb-5">
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
                        <!-- Company Type -->
                        <div class="col-md-6 mb-3">
                            <label for="companyType" class="form-label">Please Select (one or more as desired): <span class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="consultantFirm" name="companyType[]" value="Consultant Firm" required>
                                <label class="form-check-label" for="consultantFirm">Consultant Firm</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lawFirm" name="companyType[]" value="Law Firm" required>
                                <label class="form-check-label" for="lawFirm">Law Firm</label>
                            </div>
                        </div>
                        <!-- Industries Catered To -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Please Select Industries you cater to: <span class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="constructionIndustry" name="industries[]" value="Construction Industry">
                                <label class="form-check-label" for="constructionIndustry">Construction Industry</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="financeIndustry" name="industries[]" value="Finance Industry">
                                <label class="form-check-label" for="financeIndustry">Finance Industry</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="tradeIndustry" name="industries[]" value="Trade Industry">
                                <label class="form-check-label" for="tradeIndustry">Trade Industry</label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="commercialIndustry" name="industries[]" value="Commercial Industry">
                                <label class="form-check-label" for="commercialIndustry">Commercial Industry</label>
                            </div>
                            <!-- Select Industry (When Commercial is selected) -->
                            <div id="showCommercialIndustry" style="display: none;">
                                <label for="selectCommercialIndustry" class="form-label">Please select your industry (When Commercial is selected): <span class="text-danger">*</span></label>
                                <select class="form-select" id="selectCommercialIndustry" name="selectCommercialIndustry" required>
                                    <option value="construction">Construction</option>
                                    <option value="finance">Finance</option>
                                    <option value="trade">Trade</option>
                                </select>
                            </div>
                        </div>
                        <!-- Services Provided -->
                        <div class="col-md-12 mb-3 ">
                            <label class="form-label d-block">Please select what services you provide: <span class="text-danger">*</span></label>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="arbitrationServices" name="services[]" value="Arbitration Services">
                                        <label class="form-check-label" for="arbitrationServices">Arbitration Services</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="adjudicationServices" name="services[]" value="Adjudication Services">
                                        <label class="form-check-label" for="adjudicationServices">Adjudication Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="litigationServices" name="services[]" value="Litigation Services">
                                        <label class="form-check-label" for="litigationServices">Litigation Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="conciliationServices" name="services[]" value="Conciliation Services">
                                        <label class="form-check-label" for="conciliationServices">Conciliation Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="mediationServices" name="services[]" value="Mediation Services">
                                        <label class="form-check-label" for="mediationServices">Mediation Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="negotiationServices" name="services[]" value="Negotiation Services">
                                        <label class="form-check-label" for="negotiationServices">Negotiation Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="expertDeterminationServices" name="services[]" value="Expert Determination Services">
                                        <label class="form-check-label" for="expertDeterminationServices">Expert Determination Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="awardEnforcementServices" name="services[]" value="Award Enforcement Services">
                                        <label class="form-check-label" for="awardEnforcementServices">Award Enforcement Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="claimConsultantServices" name="services[]" value="Claim Consultant Services">
                                        <label class="form-check-label" for="claimConsultantServices">Claim Consultant Services</label>
                                    </div>   
                                </div>
                                <div class="col-6 ps-4">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="expertWitnessServices" name="services[]" value="Expert Witness Services">
                                        <label class="form-check-label" for="expertWitnessServices">Expert Witness Services</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="forensicDelayAnalysis" name="services[]" value="Forensic Delay Analysis">
                                        <label class="form-check-label" for="forensicDelayAnalysis">Forensic Delay Analysis</label>
                                    </div> 

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="forensicDisruptionAnalysis" name="services[]" value="Forensic Disruption Analysis">
                                        <label class="form-check-label" for="forensicDisruptionAnalysis">Forensic Disruption Analysis</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="quantumAnalysis" name="services[]" value="Quantum Analysis">
                                        <label class="form-check-label" for="quantumAnalysis">Quantum Analysis</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="draftingClaimStatements" name="services[]" value="Drafting of Claim Statements">
                                        <label class="form-check-label" for="draftingClaimStatements">Drafting of Claim Statements</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="legalInterpretation" name="services[]" value="Legal Interpretation of the Contract">
                                        <label class="form-check-label" for="legalInterpretation">Legal Interpretation of the Contract</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="strategizeDisputeResolution" name="services[]" value="Strategize Dispute Resolution">
                                        <label class="form-check-label" for="strategizeDisputeResolution">Strategize Dispute Resolution</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="researchAnalysis" name="services[]" value="Research Based Analysis and Evaluation">
                                        <label class="form-check-label" for="researchAnalysis">Research Based Analysis and Evaluation</label>
                                    </div>
                    
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="specializedServices" name="services[]" value="Specific Specialized Services">
                                        <label class="form-check-label" for="specializedServices">Specific Specialized Services</label>
                                    </div>
                                    <div id="specializedServicesDis" class="mt-3 ms-3" style="display: none;">
                                        <textarea type="text" class="form-control" id="industry" name="industry" placeholder="Please mention by writing some of your specific specialized services e.g., Delay Analysis, Chemical Plant Engineering Analysis " required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Please describe your services, experience, distinctive qualities, expertise and style of work concisely in the below box: </label>
                            <textarea class="form-text col-12" rows="8" placeholder="We have been providing experience and evidence-based claim consultancy and dispute resolution services. Our experts have distinguished and in-depth knowledge and experience in providing arbitration, adjudication, expert determination, expert witnessing and quantum services. We carry out court-proven analysis and evaluation for delay and disruption analysis in the construction industry. (This all written but when the person clicks on this box all written above is removed – above only for idea purposes for the person/company to write.  
                            "></textarea>
                        </div>

                        <!-- Payment Options -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">We are interested in the following payment options (select as desired):</label>

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
                                
                                <div class="form-check mb-2">
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
                            
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="declareAuthentic" name="declareAuthentic" required>
                                <label class="form-check-label" for="declareAuthentic">I declare that all information provided here is correct and authentic.</label>
                            </div>
                            
                            <div class="form-check mb-2">
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
        // Show/hide Specific Specialized Services 
        document.getElementById('specializedServices').addEventListener('change', function () {
            var specializedServices = document.getElementById('specializedServicesDis');
            specializedServices.style.display = this.checked ? 'block' : 'none';
        });
        // Show/hide industry list on selecting commercial 
        document.getElementById('commercialIndustry').addEventListener('change', function () {
            var specializedServices = document.getElementById('showCommercialIndustry');
            specializedServices.style.display = this.checked ? 'block' : 'none';
        });
        // Show/hide Fee Based options based on payment options
        document.getElementById('feeBased').addEventListener('change', function () {
            var feeBasedOptions = document.getElementById('feeBasedOptions');
            feeBasedOptions.style.display = this.checked ? 'block' : 'none';
        });
    </script>
</section>
@endsection