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
                            
                            <div class="form-check mb-2 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#termsCondition">
                                        I agree to the terms and conditions
                                    </a>
                                </label>
                            </div>

                            <div class="form-check mb-2 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="agreeDisclaimer" name="agreeDisclaimer" required>
                                <label class="form-check-label" for="agreeDisclaimer">
                                    <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#disclaimer">
                                        I agree to the terms of the Disclaimer
                                    </a>
                                </label>
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

    {{-- Modal for terms and condition--}}
    <div class="modal fade" id="termsCondition" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="termsConditionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="termsConditionLabel">Terms & Conditions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body">
                    <ol class="decimal-list1">
                        <li>My Dispute Resolution Partner is abbreviated as MyDRP and this abbreviation is used throughout the site, policies and contracts.</li>
                        <li>Please note that MyDRP holds the right to cancel any membership without notice.</li>
                        <li>Please note that membership terms and conditions can change without notice.</li>
                        <li>Please note that MyDRP holds the right to reject any membership application without notice and without providing any explanation.</li>
                        <li>If a member of MyDRP is found to be misusing the site – his or her membership will be cancelled.</li>
                        <li>Please keep your dealings with companies requiring dispute resolution services fair and transparent. Any complaints and negative feedback can lead to investigation and cancellation of the membership.</li>
                        <li>Any comments or actions of misbehavior will be dealt accordingly and can lead to the cancellation of the membership.</li>
                        <li>Please note that members have to carry out their own due diligence before they engage in any commitments with companies or individuals seeking dispute resolution services.</li>
                        <li>MyDRP will not be held responsible for any loss or harm occurring due to the usage of the site.</li>
                        <li>If approved for dispute resolution consultancy services then contract accordingly as applicable. The responsibility of contracting and fulfillment of either the fees or award percentage is the sole responsibility of the parties involved and MyDRP does not provide support in this regard.</li>
                        <li>We advise caution to consultant firms before contracting. Please carry out your due diligence before contracting.</li>
                        <li>MyDRP does not support in enforcing any legal award.</li>
                        <li>All Material available on the site or third-party sites are for educational and learning purposes and does not form part of any official, reliable or dependable material.</li>
                        <li>MyDRP by giving membership to companies seeking dispute resolution services does not endorse any member of any characteristic whether legal or moral.</li>
                        <li>Our website may use cookies for the better experience of a member.</li>
                        <li>In the case of hacking or any information being leaked MyDRP holds no responsibility for any loss or harm due to such hacking, leaked information or misuse of data provided.</li>
                        <li>Fees for the renewal of membership can change without notice.</li>
                        <li>MyDRP holds the right to investigate any member from time to time or as per the required management of site for transparency, clarity and reliability purposes.</li>
                    </ol>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="close btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal for disclaimer--}}
    <div class="modal fade" id="disclaimer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="disclaimerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="disclaimerLabel">Terms of the Disclaimer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol class="decimal-list1">
                        <li>My Dispute Resolution Partner is shortened to the abbreviation MyDRP.</li>
                        <li> MyDRP does not promise that the site or any of its contents, services, and features are error-free and/or
                            uninterrupted.</li>
                        <li> MyDRP does not promise that the usage of the site will result in desired, required, and/or specific
                            results.</li>
                        <li> MyDRP website and its content are provided on an ‘as is’ and ‘as available’ basis.</li>
                        <li> All information and services provided can change without notice.</li>
                        <li> If maintenance of the site is required, then MyDRP has no responsibility for any loss occurring due to
                            shutdown of services.</li>
                        <li> MyDRP disclaims any responsibility or loss if any unforeseen and unfortunate event or occurrence stops
                            the services partially or fully.</li>
                        <li> MyDRP cannot ensure if any files or data downloaded by the members would be virus-free or free from
                            destructive features.</li>
                        <li> The members assume total responsibility for the use of the site and any linked sites.s</li>
                        <li> If any regional, international, and/or national rules, laws, and regulations make the MyDRP services
                            void; in this case, MyDRP will not be held responsible, and members assume full responsibility for carrying out
                            required and desired due diligence and related jurisdictional approvals.</li>
                        <li> The sole remedy upon dissatisfaction with the site or any of its contents is to stop using the site or
                            any
                            such content.</li>
                        <li> MyDRP disclaims any responsibility for loss, harm, conflict, and/or dispute arising between consultants
                            and
                            companies (providing and requiring dispute services respectively) due to any reasons.</li>
                        <li> MyDRP provides new jobs for dispute consultants on an “as is” and “as available” basis and does not
                            carry
                            any responsibility in authenticating such jobs. It is the consultant’s own responsibility to verify and
                            authenticate jobs requiring dispute resolution services.</li>
                        <li> MyDRP provides dispute resolution services through registered members to registered members on an “as
                            is”
                            and “as available” basis and does not take any responsibility in authenticating dispute resolution service
                            providers. It is the responsibility of the company requiring dispute resolution services to verify and
                            authenticate experts and consultants providing the desired and required dispute resolution services.</li>
                        <li> MyDRP will not be held responsible for any losses occurring out of the use of the services provided
                            through the platform: My Dispute Resolution provider website.</li>
                        <li> MyDRP disclaims any or all liability for the acts, omissions, and conduct of any third parties.</li>
                        <li> Disputes are sensitive matters and MyDRP takes no responsibility that even when the Dispute Resolution
                            requirements are posted anonymously that other information may not be hacked or leaked. MyDRP disclaims any
                            loss or harm occurring out of hacking of its website or misconduct or mistake by the members.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
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