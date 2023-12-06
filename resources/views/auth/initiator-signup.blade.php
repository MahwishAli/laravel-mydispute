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
                    <ol class="decimal-list">
                        <li>My Dispute Resolution Partner is abbreviated as MyDRP and this abbreviation is used throughout the site, policies and contracts.</li>
                        <li>Please note that MyDRP is a facilitating platform that provides the service of connecting various parties involved in dispute resolution and does not provide any other related services to dispute resolution.</li>
                        <li>Please note that MyDRP holds the right to cancel any membership without notice.</li>
                        <li>Please note that membership terms and conditions can change without notice.</li>
                        <li>Please note that MyDRP holds the right to reject any membership application without notice and without providing any explanation.</li>
                        <li>If a member of MyDRP is found to be misusing the site – his or her membership will be cancelled.</li>
                        <li>Any comments or actions of misbehavior will be dealt accordingly and can lead to the cancellation of the membership.</li>
                        <li>Please note that members have to carry out their own due diligence before they engage in any commitments with companies or individuals providing dispute resolution services.</li>
                        <li>MyDRP will not be held responsible for any loss or harm occurring due to the usage of the site.</li>
                        <li>We advise caution to firms (plaintiff) seeking dispute resolution services before contracting. Please carry out your due diligence before contracting with any parties registered as a member on the MyDRP site.</li>
                        <li>If you are a paid member or take the services of MyDRP on a paid basis, please note that membership fee or fee for a specific query can change in the future without notice.</li>
                        <li>If you have paid for a specific query upon a specific claim or dispute resolution service – you may or may not achieve satisfactory or desired results while using the MyDRP services. If this may so occur, MyDRP will not be held responsible for any losses or harm, and any fee paid shall be non-compensable and non-refundable.</li>
                        <li>Any Membership or Service Fee paid is on a non-refundable basis.</li>
                        <li>Please keep your dealings with companies or individuals providing dispute resolution services fair and transparent. Any complaints and negative feedback can lead to an investigation and cancellation of the membership.</li>
                        <li>MyDRP will not be held responsible for any loss or harm occurring due to the usage of the site.</li>
                        <li>All Material available on the site or third-party sites are for educational and learning purposes and do not form part of any official, reliable, or dependable material.</li>
                        <li>MyDRP by giving membership to companies or individuals providing dispute resolution services does not endorse any member of any characteristic whether legal or moral.</li>
                        <li>Member acknowledges that he or she has read the disclaimer.</li>
                        <li>MyDRP does not support in enforcing any legal award.</li>
                        <li>Our website may use cookies for the better experience of a member.</li>
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
                    <ol class="decimal-list">
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

        // Show/hide Fee Based options based on payment options
        document.getElementById('feeBased').addEventListener('change', function () {
            var feeBasedOptions = document.getElementById('feeBasedOptions');
            feeBasedOptions.style.display = this.checked ? 'block' : 'none';
        });
    </script>
</section>
@endsection