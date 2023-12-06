@extends('layouts.web')
@section('content')
<section class="resolution pt-5">
    <div class="container my-5" >
        <div class="row justify-content-around mt-2">
            {{-- <div class="col-lg-2 mb-4 justify-content-center" >
            </div> --}}
            <div class="col-lg-11 col-md-12 mb-4 px-1 innnerlanding_form" >
                <div class="topsection">
                    <div class="lefttutor_details_full p-4" id="hideclass2">
                        <h2>Request Dispute Resolution and Claim Consultancy Requirements Now - It’s Free.</h2>
                        <p>
                            By completing and submitting this form you will become a registered member of MyDRP and your dispute resolution requirements will also be posted.
                        </p>
                        <p class="find_text">
                            If You're Already a User?
                        <a href="/join-as-tutor" target="_blank" style="text-decoration: none">click here</a>
                        </p>
                    </div>
                </div>
                <div class="bottomform_holder" id="hideclass3">
                    <div class="formlebel" data-step="first_page">
                        <form action="#" method="post" enctype="multipart/form-data">
                            {{-- page 2 start --}}
                            <div class="page1 animated zoomIn" data-step="first_page" >
                                <div class="custom_progress_bar">
                                    <div class="processtext">0%</div>
                                    <div class="progressbar_text">
                                    <div class="probar" style="width: 0%"></div>
                                    </div>
                                </div>
                                <h4 class="frmtitle text-center fw-bold">Dispute Resolution Initiator</h4>
                                <!-- Company Information -->
                                <div class="row mt-5 mb-4 mx-2" >
                                    <!-- Company Information -->
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="companyName" class="form-label col-4">Company Name: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="" required>
                                    </div>
            
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="companyType" class="form-label col-4">Company Type: <span class="text-danger">*</span></label>
                                        <select class="form-select" id="companyType" name="companyType" required>
                                            <option value="Construction">Construction</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Trade">Trade</option>
                                            <option value="Commercial">Commercial</option>
                                        </select>
                                    </div>
            
                                    <!-- Specific Industry (Visible only if Commercial is selected) -->
                                    <div id="specificIndustry" class="col-md-12 mb-3" style="display: none;">
                                        <div  class="col-md-12 m-0 d-flex align-items-center" >
                                            <label for="industry" class="form-label col-3">Please mention your Specific Industry: <span class="text-danger">*</span></label>
                                            <select class="form-select" id="industry" name="industry" required>
                                                <option value="Retail">Retail</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Healthcare">Healthcare</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Hospitality">Hospitality</option>
                                                <option value="Automotive">Automotive</option>
                                                <option value="Telecommunications">Telecommunications</option>
                                                <option value="Energy">Energy</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                                <option value="Education">Education</option>
                                                <option value="Consulting">Consulting</option>
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="email" class="form-label col-4">Email Address: <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
            
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="address" class="form-label col-4">Address:</label>
                                        <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                                    </div>
            
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="country" class="form-label col-4">Country: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="country_name" name="country_name" required>     
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="phone" class="form-label col-4">Phone No: <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <!-- Company Documents Attachment -->
                                    <div class="col-md-12 mb-3 d-flex mt-1">
                                        <label for="companyDocuments" class="form-label col-2">Company Documents Attachment:</label>
                                        <div class="">
                                            <input type="file" class="form-control" id="companyDocuments" name="companyDocuments">
                                                <p class="form-text">We encourage you to upload company documents as this increases your chance of success in finding the right Dispute Resolution Partner.</p>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="frmtitle text-center fw-bold"><u>Dispute Details</u></h4>
                                <div class="row my-5 mx-2">
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="industryType" class="form-label col-4">Industry Type: <span class="text-danger">*</span></label>
                                        <select name="industry_type" id="industry_type" class="form-select industry_type"
                                            onchange="javascript:getLocation(this.id);">
                                            <option value="">Industry Type</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Financial">Financial</option>
                                            <option value="Trade">Trade</option>
                                            <option value="Commercial">Commercial</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="disputeType" class="form-label col-4">Dispute Type: <span class="text-danger">*</span></label>
                                        <select name="dispute_type" id="dispute_type" class="form-select dispute_type">
                                            <!-- onchange="javascript:getLocation(this.id);" -->
                                            <option value="">Dispute Type</option>
                                            <option value="Negotiation">Negotiation</option>
                                            <option value="Mediation">Mediation</option>
                                            <option value="Conciliation">Conciliation</option>
                                            <option value="Adjudication">Adjudication</option>
                                            <option value="Litigation">Litigation</option>
                                            <option value="Arbitration">Arbitration</option>
                                            <option value="Expert Determination">Expert Determination</option>
                                            <option value="Award Enforcement">Award Enforcement</option>
                                        </select>
                                    </div>
                        
                                    <!-- Specific Industry (Visible only if Commercial is selected) -->
                                    <div id="specificIndustryType" class="col-md-12 mb-3" style="display: none;">
                                        <div  class="col-md-12 m-0 d-flex align-items-center" >
                                            <label for="industry" class="form-label col-3">Please mention your Specific Industry: <span class="text-danger">*</span></label>
                                            <select class="form-select" id="industry" name="industry" required>
                                                <option value="Retail">Retail</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Healthcare">Healthcare</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Hospitality">Hospitality</option>
                                                <option value="Automotive">Automotive</option>
                                                <option value="Telecommunications">Telecommunications</option>
                                                <option value="Energy">Energy</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                                <option value="Education">Education</option>
                                                <option value="Consulting">Consulting</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="amount" class="form-label col-4">Dispute Amount:</label>
                                        <select name="dispute_amount" id="dispute_amount" class="form-select dispute_amount">
                                            <option value="">Dispute Amount</option>
                                            <option value="1">$0 to $10</option>
                                            <option value="2">$11 to %50</option>
                                            <option value="3">$51 to $100</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-12 mb-3 mt-3" id="feeBasedhide">
                                        <label for="companyType" class="form-label">Select Dispute Resolution Partner Type (select as many options as desired): <span class="text-danger">*</span></label>
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
                                    </div>
                                    
                                    <div class="col-md-12 mb-3">
                                        <!-- Additional Options for Fee Based -->
                                        <div id="feeBasedOptions" class=" mt-2 mb-3" style="display: none;">
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
                                    {{-- show when fee and award is selected --}}
                                    <div class="col-md-12 mb-3" id="feeAwardshow" class=" mb-1" style="display: none;">
                                        {{-- <div class=" mb-1" > --}}
                                            <label class="form-label col-3">Award Percentage Based:</label>
                                            <input type="text" class="form-control" name="awardPercentage" placeholder="Enter percentage (e.g., up to 5%, up to 10%, up to 50%)" style="height: 40px;">
                                    </div>

                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="region" class="form-label col-4">Region: <span class="text-danger">*</span></label>
                                        <select name="region" id="region" class="form-select regiondropdn"
                                            onchange="javascript:getLocation(this.id);" required>
                                            <option value="">Region*</option>
                                        </select>
                                    </div>
            
                                    <!-- Specific Industry (Visible only if Commercial is selected) -->
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <label for="country" class="form-label col-4">Country:</label>
                                        <select name="country" id="country" class="form-select countrydropdn"
                                            onchange="javascript:getLocation(this.id);">
                                            <option value="">Country</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-3">
                                        <label for="companyregister" class="form-label">Due to the sensitivity of data, you can post the Dispute Details as: <span class="text-danger">*</span></label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="companyReg" name="anonymous" value="Fee Based only">
                                            <label class="form-check-label" for="feeBased">The Company Registered</label>
                                        </div>
            
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="anonymous" name="anonymous" value="Fee and Award Percentage Based">
                                            <label class="form-check-label" for="feeAndAward">Anonymous</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mb-3" id="anonymousShow" style="display: none;">
                                        <div class="mb-3 row">
                                            {{-- <div class=" mb-3">
                                                (if Anonymous is selected then you can put a different e-mail address and phone number to be contacted)
                                            </div> --}}
                                            <div class="mb-1 col-md-6 d-flex align-items-center">
                                                <label for="anonymousEmail" class="form-label col-4 ">Your anonymous email: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="anonymousEmail" name="anonymousEmail" placeholder="" required>
                                            </div>
                                            <div class="mb-3 col-md-6 d-flex align-items-center">
                                                <label for="anonymousPhone" class="form-label col-4 ">Your anonymous phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="anonymousPhone" name="anonymousPhone" placeholder="" required>
                                            </div>
                                            <div class="mb-3 col-md-12"><b>
                                                Selecting Anonymous will hide all registered company details except but will show the dispute details as selected.</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3" >
                                        <label for="companyType" class="form-label">Please select Option for Free posting and receiving of proposals in which only our paid members can see your Dispute Details or Select the Paid Service by MyDRP to receive a list of Dispute Resolution and Claim Consultants best suiting your dispute requirements.</label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" id="paid_service" name="service_type" value="paid_service" onclick="toggleButtons();">
                                            <label class="form-check-label" for="">Paid Service</label>
                                        </div>
            
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" id="free_service" name="service_type" value="free" onclick="toggleButtons();">
                                            <label class="form-check-label" for="">Free</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="new_button_holder">
                                            <a href="#" class="button_common nextbtn">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- page 1 end --}}
                            {{-- page 2 start --}}
                            <div class="page2 typeConstruction animated zoomIn" data-step="second_page" style="display: none">
                                <div class="custom_progress_bar2">
                                    <div class="processtext2">50%</div>
                                    <div class="progressbar_text2">
                                    <div class="probar2" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <h4 class="frmtitle text-center fw-bold">Page 2</h4>
                                <div class="row mb-5 mx-2" >
                                    <div class="typeConstruction" id="typeConstruction">
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label for="contractgov" class="form-label">Contract is governed by:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="fidic" name="fidic" value="fidic">
                                                <label class="form-check-label" for="fidic">FIDIC</label>
                                            </div>
                
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="otherCont" name="otherCont" value="otherCont">
                                                <label class="form-check-label" for="otherCont">Any other please state</label>
                                            </div>
                                        </div>
                                        <div id="otherContract" class="col-md-12 mb-3" style="display: none;">
                                            <div  class="col-md-12 m-0 d-flex align-items-center" >
                                                <label for="contract" class="form-label col-3">Mention the name:</label>
                                                <input type="text" class="form-control" id="contract" name="contract" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label class="form-label">Please select Dispute Details (select one or many as desired):</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="extensionOfTime" name="" value="extensionOfTime">
                                                <label class="form-check-label" for="extensionOfTime">Extension of Time Analysis</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="forensicDelay" name="" value="forensicDelay">
                                                <label class="form-check-label" for="forensicDelay">Forensic Delay Analysis</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="forensicDisruption" name="" value="forensicDisruption">
                                                <label class="form-check-label" for="forensicDisruption">Forensic Disruption Analysis</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="expertWitnessing" name="" value="expertWitnessing">
                                                <label class="form-check-label" for="expertWitnessing">Expert Witnessing</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="quantumAnalysis" name="" value="quantumAnalysis">
                                                <label class="form-check-label" for="quantumAnalysis">Quantum Analysis</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="claimStatements" name="" value="claimStatements">
                                                <label class="form-check-label" for="claimStatements">Drafting of Claim Statements</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="legalInterpretation" name="" value="legalInterpretation">
                                                <label class="form-check-label" for="legalInterpretation">Legal Interpretation of the Contract</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="strategizeResolution" name="" value="strategizeResolution">
                                                <label class="form-check-label" for="strategizeResolution">Strategize Dispute Resolution</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="researchAnalysis" name="" value="researchAnalysis">
                                                <label class="form-check-label" for="researchAnalysis">Research Based Analysis Required</label>
                                            </div>
                                        
                                            <div class="form-check mb-3 ms-3">
                                                <input class="form-check-input" type="checkbox" id="specialistFieldServices" name="" value="specialistFieldServices">
                                                <label class="form-check-label" for="specialistFieldServices">Specific Specialist Field Services are allowed*</label>
                                                <div class="mt-3 text-danger">
                                                    <small>*By ticking this box, you allow consultant firms which are specialist firms in a specific field such as Delay Analysis, Legal Interpretation, or Chemical Plant Engineering Analysis to contact you for providing any required services either selected above or mentioned below in the Concise Summary and Requirements of the Dispute Resolution.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution: </label>
                                            <textarea class="form-text col-12" rows="8" placeholder="This is initially a confidential and private mediation which can lead to arbitration. Extensive experience and in-depth knowledge may be required to substantiate the demonstration of damages incurred in the project of wastewater treatment plant due to the mismanagement of work caused by the direct intervention of the Contractor/Employer.
                                            We initially require expert interpretation of the legal contract and quantum services for a large case of damages caused due to delay and disruption. This can solidify towards an Arbitration settlement. As the matter is private and confidential hence no company information can be given. Please provide your kind proposals on the basis of either fee only, fee or award percentage or completely on sharing the award percentage sharing basis. If you are considered for this arrangement, we will contact you back and a confidential, private and legal contract will be signed stating the details of the dispute resolution requirements. "></textarea>
                                        </div> 
                                    </div>
                                    <div class="typeFinance" id="typeFinance" style="display: none">
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label class="form-label">Please select which dispute resolution services you may require:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="forensicAccounting" name="disputeServices" value="forensicAccounting">
                                                <label class="form-check-label" for="forensicAccounting">Forensic Accounting Analysis</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="fraudExamination" name="disputeServices" value="fraudExamination">
                                                <label class="form-check-label" for="fraudExamination">Fraud Examination</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="financialStatementsAnalysis" name="disputeServices" value="financialStatementsAnalysis">
                                                <label class="form-check-label" for="financialStatementsAnalysis">Analysis of Financial Statements</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="Forecasting" name="Forecasting" value="forecasting">
                                                <label class="form-check-label" for="forecasting">Forecasting of Financial Statements</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="quantumAnalysis" name="" value="quantumAnalysis">
                                                <label class="form-check-label" for="quantumAnalysis">Quantum for Loss of Opportunity Analysis</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="comapanyVal" name="" value="claimStatements">
                                                <label class="form-check-label" for="companyVal">Company Valuation</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="quantum" name="" value="quantum">
                                                <label class="form-check-label" for="quantum">Quantum for Damages</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="draftingClaim" name="" value="draftingClaim">
                                                <label class="form-check-label" for="draftingClaim"> Drafting of Claim Statement</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="legalInter" name="legalInter" value="researchAnalysis">
                                                <label class="form-check-label" for="legalInter">Legal Interpretation of the Contract</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="strategizeResolution" name="" value="strategizeResolution">
                                                <label class="form-check-label" for="strategizeResolution">Strategize Dispute Resolution</label>
                                            </div>
                                        
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="researchAnalysis" name="" value="researchAnalysis">
                                                <label class="form-check-label" for="researchAnalysis">Research Based Analysis</label>
                                            </div>
                                            <div class="form-check mb-3 ms-3">
                                                <input class="form-check-input" type="checkbox" id="specialistFieldServices" name="" value="specialistFieldServices">
                                                <label class="form-check-label" for="specialistFieldServices">Specific Specialist Field Services are allowed*</label>
                                                <div class="mt-3 text-danger">
                                                <small>*By ticking this box, you allow consultant firms which are specialist firms in a specific field such as Delay Analysis, Legal Interpretation, or Chemical Plant Engineering Analysis to contact you for providing any required services either selected above or mentioned below in the Concise Summary and Requirements of the Dispute Resolution.</small></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution: </label>
                                            <textarea class="form-text col-12" rows="8" placeholder="We require a consultant firm which may provide us with loss of opportunity claim. The consultants would be required to forecast financial statements of a company and provide valuation of the upcoming profits and the total value of the company. The consultant company has to provide a quantum of damages apart from the principal money. The consultant company has also to opt for recovery of damages in relation to the psychological harm that the investors have faced. This is a forensic case of fraud examination. (This all written but when the person clicks on this box all written above is removed – above only for idea purposes for the person/company to write. )
                                             "></textarea>
                                        </div> 
                                    </div>
                                    <div class="typeTrade" id="typeTrade" style="display: none" >
                                        <div class="col-md-12 mb-3 mt-2">
                                            <label for="contractgov" class="form-label">Contract is governed by:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="gafta" name="gafta" value="gafta">
                                                <label class="form-check-label" for="gafta">GAFTA </label>
                                            </div>
                
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="otherContrac" name="otherContrac" value="otherContrac">
                                                <label class="form-check-label" for="otherCont">Any other please state</label>
                                            </div>
                                        </div>
                                        <div id="otherContract2" class="col-md-12 mb-3" style="display: none;">
                                            <div  class="col-md-12 m-0 d-flex align-items-center" >
                                                <label for="contract" class="form-label col-3">Mention the name:</label>
                                                <input type="text" class="form-control" id="contract" name="contract" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label class="form-label">Please select which dispute resolution services you may require:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="commercialTradeForensic" name="disputeServices" value="commercialTradeForensic">
                                                <label class="form-check-label" for="commercialTradeForensic">Commercial Trade Forensic Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="digitalCyberForensic" name="disputeServices" value="digitalCyberForensic">
                                                <label class="form-check-label" for="digitalCyberForensic">Digital-Cyber Forensic Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="fraudExamination" name="disputeServices" value="fraudExamination">
                                                <label class="form-check-label" for="fraudExamination">Fraud Examination</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="lossOfOpportunityForensic" name="disputeServices" value="lossOfOpportunityForensic">
                                                <label class="form-check-label" for="lossOfOpportunityForensic">Loss of Opportunity Forensic Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="quantumForDamages" name="disputeServices" value="quantumForDamages">
                                                <label class="form-check-label" for="quantumForDamages">Quantum for Damages</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="draftingOfClaimStatement" name="disputeServices" value="draftingOfClaimStatement">
                                                <label class="form-check-label" for="draftingOfClaimStatement">Drafting of Claim Statement</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="legalInterpretation" name="disputeServices" value="legalInterpretation">
                                                <label class="form-check-label" for="legalInterpretation">Legal Interpretation of the Contract</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="strategizeDisputeResolution" name="disputeServices" value="strategizeDisputeResolution">
                                                <label class="form-check-label" for="strategizeDisputeResolution">Strategize Dispute Resolution</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="researchBasedAnalysis" name="disputeServices" value="researchBasedAnalysis">
                                                <label class="form-check-label" for="researchBasedAnalysis">Research Based Analysis</label>
                                            </div>
                                            <div class="form-check mb-3 ms-3">
                                                <input class="form-check-input" type="checkbox" id="specialistFieldServices" name="specialistFieldServices">
                                                <label class="form-check-label" for="specialistFieldServices">Specific Specialist Field Services are allowed*</label>
                                                <div class="mt-3 text-danger">
                                                    <small>*By ticking this box, you allow consultant firms which are specialist firms in a specific field such as Delay Analysis, Legal Interpretation, or Chemical Plant Engineering Analysis to contact you for providing any required services either selected above or mentioned below in the Concise Summary and Requirements of the Dispute Resolution.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution: </label>
                                            <textarea class="form-text col-12" rows="8" placeholder="We are a X-country based trading house. We want a partner who can fund our claim of US$ 10 million against a company based in Y-country. We are ready to mutually agree upon beneficial terms and possibly a percentage of the claim amount and fee together. Please if you have dealt with similar cases of litigation in Country-Y or other countries please contact us. We encourage consultant firms to provide us with their proposals and we can make selection upon expertise, experience and percentage sharing and fees."></textarea>
                                        </div> 
                                    </div>
                                    <div class="typeCommercial" id="typeCommercial" style="display: none">
                                        <div class="col-md-12 mb-3 mt-2 align-items-center">
                                            <label for="contractgoverned" class="form-label">Contract is governed by:</label>
                                            <div  class="col-md-12 mt-1 d-flex align-items-center" >
                                                <label for="contract" class="form-label col-4">Name of the organization if any: </label>
                                                <input type="text" class="form-control" id="" name="contract" placeholder="e.g., FIDIC, GAFTA, The Berne Convention, ICSID Convention" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label class="form-label">Please select which dispute resolution services you may require:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="commercialForensicAnalysis" name="disputeServices" value="commercialForensicAnalysis">
                                                <label class="form-check-label" for="commercialForensicAnalysis">Commercial Forensic Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="iprQuantumOfDamages" name="disputeServices" value="iprQuantumOfDamages">
                                                <label class="form-check-label" for="iprQuantumOfDamages">Intellectual Property Right Quantum of Damages</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="patentAnalysis" name="disputeServices" value="patentAnalysis">
                                                <label class="form-check-label" for="patentAnalysis">Patent Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="digitalCyberForensicAnalysis" name="disputeServices" value="digitalCyberForensicAnalysis">
                                                <label class="form-check-label" for="digitalCyberForensicAnalysis">Digital-Cyber Forensic Analysis</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="fraudExamination" name="disputeServices" value="fraudExamination">
                                                <label class="form-check-label" for="fraudExamination">Fraud Examination</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="quantumForDamages" name="disputeServices" value="quantumForDamages">
                                                <label class="form-check-label" for="quantumForDamages">Quantum for Damages</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="draftingOfClaimStatement" name="disputeServices" value="draftingOfClaimStatement">
                                                <label class="form-check-label" for="draftingOfClaimStatement">Drafting of Claim Statement</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="legalInterpretation" name="disputeServices" value="legalInterpretation">
                                                <label class="form-check-label" for="legalInterpretation">Legal Interpretation of the Contract</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="strategizeDisputeResolution" name="disputeServices" value="strategizeDisputeResolution">
                                                <label class="form-check-label" for="strategizeDisputeResolution">Strategize Dispute Resolution</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="researchBasedAnalysis" name="disputeServices" value="researchBasedAnalysis">
                                                <label class="form-check-label" for="researchBasedAnalysis">Research Based Analysis</label>
                                            </div>
                                            <div class="form-check mb-3 ms-3">
                                                <input class="form-check-input" type="checkbox" id="specialistFieldServices" name="specialistFieldServices">
                                                <label class="form-check-label" for="specialistFieldServices">Specific Specialist Field Services are allowed*</label>
                                                <div class="mt-3 text-danger">
                                                    <small>*By ticking this box, you allow consultant firms which are specialist firms in a specific field such as Delay Analysis, Legal Interpretation, or Chemical Plant Engineering Analysis to contact you for providing any required services either selected above or mentioned below in the Concise Summary and Requirements of the Dispute Resolution.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution: </label>
                                            <textarea class="form-text col-12" rows="8" placeholder="We are a X-country based trading house. We want a partner who can fund our claim of US$ 10 million against a company based in Y-country. We are ready to mutually agree upon beneficial terms and possibly a percentage of the claim amount and fee together. Please if you have dealt with similar cases of litigation in Country-Y or other countries please contact us. We encourage consultant firms to provide us with their proposals and we can make selection upon expertise, experience and percentage sharing and fees."></textarea>
                                        </div> 
                                    </div>
                                    <div class="expertDetermination" id="expertDetermination" style="display: none">
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label for="expert" class="form-label">Please select the details of the Expert Determination:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="pre_dispute" name="pre_dispute" value="pre_dispute">
                                                <label class="form-check-label" for="pre_dispute">Pre - Dispute</label>
                                            </div>
                
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="post_dispute" name="post_dispute" value="post_dispute">
                                                <label class="form-check-label" for="post_dispute">Post - Dispute</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 mt-3">
                                            <label class="form-label">Please select what you are looking in an expert determiner:</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="technicalExpertise" name="preferences" value="technicalExpertise">
                                                <label class="form-check-label" for="technicalExpertise">Technical Expertise</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="legalExpertise" name="preferences" value="legalExpertise">
                                                <label class="form-check-label" for="legalExpertise">Legal Expertise</label>
                                            </div>
                                    
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="discretionForProcedures" name="preferences" value="discretionForProcedures">
                                                <label class="form-check-label" for="discretionForProcedures">Expert Determiner’s Discretion for Procedures is Allowed</label>
                                            </div>
                                    
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="experienceInIndustry" name="preferences" value="experienceInIndustry">
                                                <label class="form-check-label" for="experienceInIndustry">Experience in the Stated Industry</label>
                                            </div>
                                    
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="postDisputeAgreement" name="preferences" value="postDisputeAgreement">
                                                <label class="form-check-label" for="postDisputeAgreement">Post Dispute Agreement Governs the Conditions of Expert Determination</label>
                                            </div>
                                    
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="hireOtherExperts" name="preferences" value="hireOtherExperts">
                                                <label class="form-check-label" for="hireOtherExperts">Expert Determiner can hire other Experts if needed</label>
                                            </div>                                    
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution:</label>
                                            <textarea class="form-text col-12" rows="8" placeholder="We are looking for a competitive firm which may provide us Expert Determination services in the Process of Mediation. The Expert Determiner has to be an experienced individual in the industry of construction and must have performed in a same or similar position. However, we will consider individuals which are competitive and have a good experience record. 
                                            The Expert Determiner has to be an Engineer but does not need to have legal expertise and can hire legal experts as the nature of the dispute revolves around engineering experience and expertise."></textarea>
                                        </div> 
                                    </div>
                                    <div class="awardEnforcement" id="awardEnforcement" style="display: none">
                                        <div class="col-md-12 mb-3 mt-2 align-items-center">
                                            <label for="contractgoverned" class="form-label">Contract is governed by:</label>
                                            <div  class="col-md-12 mt-1 d-flex align-items-center" >
                                                <label for="contract" class="form-label col-4">State the nature of the award: </label>
                                                <input type="text" class="form-control" id="" name="contract" placeholder="Arbitral Award, Binding Expert Determination, ICSID Award" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="" class="form-label">Please provide anonymous or non-anonymous concise summary and requirements of the dispute resolution:</label>
                                            <textarea class="form-text col-12" rows="8" placeholder="We have a favourable award to be enforced. We require expertise in enforcing the award on a company. We need the enforcement experts to devise and execute a recovery plan. We have an ICC award but are facing hurdles in recovering the due money. Please contact us at our given email address in the application. We are also open to sharing a percentage of the award depending upon mutual conditions. "></textarea>
                                        </div> 
                                    </div>
                                    <div class="col-md-12 mb-3 mt-2 text-center">
                                        <label class="form-label">Attach Dispute Relevant Documents:</label>
                                        <div class="file-attachment-container">
                                            <input type="file" id="attachment" name="attachment" class="file-attachment" multiple="">
                                            <label for="attachment" class="file-label">Attach Documents</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-1">                              
                                        <label class="form-label mt-3">Please select for proposals receiving:</label>
                                
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="contactInformation" name="proposalReceiving" value="contactInformation">
                                            <label class="form-check-label" for="contactInformation">Let my contact information be available to receive proposals and communication (your registered email address or, in the case of anonymous selection, the other email address given with Dispute Detail would be visible for consultants to contact)</label>
                                        </div>
                                
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="consultantContact" name="proposalReceiving" value="consultantContact">
                                            <label class="form-check-label" for="consultantContact">Let the Dispute Resolution and Claim Consultant ask for Contact information (The paid consultant firm will have to press the "Let me contact" button to let the Dispute Resolution Initiator know that a Dispute Resolution Consultant wants to connect with all the consultant’s specific details)</label>
                                        </div>

                                        <div class="form-check mb-3 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox"  name="condition">
                                            <label class="form-check-label" for="disclaimer">
                                                <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#termsCondition">
                                                    I agree to the terms and conditions
                                                </a>
                                            </label>
                                        </div>                                        
                                        
                                        <div class="form-check mb-3 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox"  name="disclaimer">
                                            <label class="form-check-label" for="disclaimer">
                                                <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#disclaimer">
                                                    I agree to the terms of the Disclaimer
                                                </a>
                                            </label>
                                        </div>
                                
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="genuineDeclaration" name="genuineDeclaration">
                                            <label class="form-check-label" for="genuineDeclaration">I declare that my dispute resolution requirement is genuine, and all the information provided here is correct and authentic</label>
                                        </div>
                                    </div>                                   
                                    <div class="col-md-12 mt-1">
                                        <div class="new_button_holder" >
                                            <a href="#" class="backbtn">Back</a>
                                            <a href="#" class="button_common" id="submitAndPayBtn" style="display: none" >Submit and Pay</a>
                                            <a href="#" class="button_common" id="submitBtn" style="display: none">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-2 mb-4 justify-content-center" >
            </div> --}}
        </div>
        <div class="exist_login">
            <span>If you are facing any problem kindly
              <a href="https://www.mydispute.ae/contact" class="login" target="_blank">Contact Us</a>
              or write to
              <a href="mailto:support@mydispute.ae" class="login" target="_blank"><span>support@mydispute.ae</span></a></span>
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

        $(document).on("click", ".nextbtn", function (e) {
            e.preventDefault();
            var flag = 0;

            if (flag == 0) {
            $(".page1").hide();

            $(".page2").show();

            $(".backbtn").show();
            }
        });
        $(document).on("click", ".backbtn", function (e) {
            e.preventDefault();
            var flag = 0;

            if (flag == 0) {
                $(".page2").hide();

                $(".page1").show();
            }
        });


        // Show/hide specific industry field based on Company Type
        document.getElementById('companyType').addEventListener('change', function () {
            var specificIndustry = document.getElementById('specificIndustry');
            specificIndustry.style.display = (this.value === 'Commercial') ? 'block' : 'none';
        });

        // Show/hide specific industry field based on Industry Type
        document.getElementById('industry_type').addEventListener('change', function () {
            var specificIndustryType = document.getElementById('specificIndustryType');
            specificIndustryType.style.display = (this.value === 'Commercial') ? 'block' : 'none';
        });

        // Show/hide form based on expert determination
        document.getElementById('dispute_type').addEventListener('change', function () {
            var expertDeter = document.getElementById('expertDetermination');
            var awardEnforcement = document.getElementById('awardEnforcement');
            var typeContruction = document.getElementById('typeConstruction');

            typeContruction.style.display = (this.value === 'Expert Determination' || this.value === 'Award Enforcement') ? 'none' : 'block';
            expertDeter.style.display = (this.value === 'Expert Determination') ? 'block' : 'none';
            awardEnforcement.style.display = (this.value === 'Award Enforcement') ? 'block' : 'none';
        });

        // Show/hide Fee Based options based on payment options
        document.getElementById('feeBased').addEventListener('change', function () {
            var feeBasedOptions = document.getElementById('feeBasedOptions');
            feeBasedOptions.style.display = this.checked ? 'block' : 'none';
        });

        // show/hide percentage box based on fee & award 
        document.getElementById('feeAndAward').addEventListener('change', function() {
            var feeAward = document.getElementById('feeAwardshow');
            feeAward.style.display = this.checked ? 'flex' : 'none';
        });

        // show/hide email fields based on anonymous
        document.getElementById('anonymous').addEventListener('change', function() {
            var anonymous = document.getElementById('anonymousShow');
            anonymous.style.display = this.checked ? 'block' : 'none';
        });
        
        // Display pages on the basis of selecting the industry type
        document.getElementById('industry_type').addEventListener('change', function() {
            var industryType = document.getElementById('industry_type').value;
            var typeContruction = document.getElementById('typeConstruction');
            var typeFinance = document.getElementById('typeFinance');
            var typeTrade = document.getElementById('typeTrade');
            var typeCommercial = document.getElementById('typeCommercial');

            typeFinance.style.display = 'none';
            typeTrade.style.display = 'none';
            typeCommercial.style.display = 'none';

            if (industryType === "Financial") {
                typeFinance.style.display = 'block';
                typeContruction.style.display = 'none';
            } else if (industryType === "Trade") {
                typeTrade.style.display = 'block';
                typeContruction.style.display = 'none';
            } else if (industryType === "Commercial") {
                typeCommercial.style.display = 'block';
                typeContruction.style.display = 'none';
            }
        });
        
        // Display submit button
        function toggleButtons() {
            var paidService = document.getElementById("paid_service");
            var freeService = document.getElementById("free_service");
            var submitAndPayBtn = document.getElementById("submitAndPayBtn");
            var submitBtn = document.getElementById("submitBtn");

            if (paidService.checked) {
                console.log("Displaying Submit and Pay Button");
                submitAndPayBtn.style.display = "inline-block";
                submitBtn.style.display = "none";
            } else if (freeService.checked) {
                console.log("Displaying Submit Button");
                submitAndPayBtn.style.display = "none";
                submitBtn.style.display = "inline-block";
            }
        }

        // page 2 

        function enableUnderstoodButton() {
            var agreeCheckbox = document.getElementById('agreeCheckbox');
            var understoodBtn = document.getElementById('understoodBtn');

            if (agreeCheckbox.checked) {
                understoodBtn.disabled = false;
            } else {
                understoodBtn.disabled = true;
            }
        }
        // show/hide contract governed based on 
        document.getElementById('otherCont').addEventListener('change', function() {
            var otherCont  = document.getElementById('otherContract');
            otherCont.style.display = this.checked ? 'block' : 'none';
        });

        // page 3
        // show/hide contract governed based on 
        document.getElementById('otherContrac').addEventListener('change', function() {
            var otherCont  = document.getElementById('otherContract2');
            otherCont.style.display = this.checked ? 'block' : 'none';
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var countrySelect = document.getElementById('country');
            var regionSelect = document.getElementById('region');
    
            // Replace 'https://restcountries.com/v3.1/all' with a valid API endpoint
            fetch('https://restcountries.com/v3.1/all')
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    // Sort countries in ascending order
                    data.sort(function (a, b) {
                        return a.name.common.localeCompare(b.name.common);
                    });
    
                    data.forEach(function (country) {
                        var option = document.createElement('option');
                        option.value = country.name.common;
                        option.textContent = country.name.common;
                        countrySelect.appendChild(option);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching countries:', error);
                });
    
            var regions = [
                "Asia",
                "Europe",
                "Africa",
                "North America",
                "South America",
                "Australia",
                "Antarctica",
                "Middle East",
                "Central America",
                "Caribbean"
            ];
    
            regions.forEach(function (region, index) {
                var option = document.createElement('option');
                option.value = index + 1; // Assign unique values based on index (1-based)
                option.textContent = region;
                regionSelect.appendChild(option);
            });
        });
    
        function getLocation(id) {
            var regionSelect = document.getElementById(id);
            // Your getLocation function logic here
        }
    </script>
</section> 
@endsection

