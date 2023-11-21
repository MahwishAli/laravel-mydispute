@extends('layouts.web')
@section('content')
<section class="how_it_works pt-5">
    <div class="container my-5" >
        <div class="row justify-content-around mt-2">
            <div class="col-lg-2 mb-4 justify-content-center" >
            </div>
            <div class="col-lg-8 mb-4 px-1 innnerlanding_form" >
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
                <div class="custom_progress_bar">
                    <div class="processtext">0%</div>
                    <div class="progressbar_text">
                    <div class="probar" style="width: 0%"></div>
                    </div>
                </div>
                <div class="bottomform_holder" id="hideclass3">
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="first_page">
                    <div class="frmtitle">Dispute Resolution Initiator</div>
                    <div class="midsection_common">
                        <div class="other_information signupscreen">
                        <input type="hidden" name="subjectid" id="subjectid" value="" />
                        <div class="match_dropdown_holder down_mark searchboxcontainernew" id="subject_div_holder">
        
                            <input type="text" onkeyup="filterdropdown(this,'theList')"
                            class="input_subject_holder input_match_holder" id="subject_textbox" placeholder="Company Name*"
                            autocomplete="off" value="" required />

                            <div class="input_holder">
        
                            <div class="dropdownbox">
                                <select name="loc" id="loc" class="locdropdn" onchange="javascript:getLocation(this.id);">
                                <option value="">Company Type*</option>
        
                                <option value="1">Construction</option>
                                <option value="2">Financial</option>
                                <option value="3">Trade</option>
                                <option value="4">Commercial</option>
                                <option value="5">Technology</option>
                                </select>
                            </div>
        
                            </div>
        
                            <input type="text" onkeyup="filterdropdown(this,'theList')"
                            class="input_email_holder input_match_holder" id="email_textbox" placeholder="Email Address"
                            autocomplete="off" value="" required />
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="initiator_country" id="initiator_country" class="countrydropdn"
                                    onchange="javascript:getLocation(this.id);">
                                    <option value="">Country*</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
                            <input type="text" onkeyup="filterdropdown(this,'theList')"
                            class="input_phone_holder input_match_holder" id="phone_textbox" placeholder="Phone No*"
                            autocomplete="off" value="" required />

                            <div class="mb-3">
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
        
                            <br />
                            <div class="frmtitle_small">
                            We encourage to upload company documents as this increases
                            your chance of success in finding the right Dispute
                            Resolution Partner.
                            </div>
                            <br />
                            <br />
                            <h3>
                            <strong>
                                <u>Dispute Details so Claim Consultants</u></strong>
                            </h3>
                            <br />
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="industry_type" id="industry_type" class="industry_type"
                                    onchange="javascript:getLocation(this.id);">
                                    <option value="">Industry Type*</option>
        
                                    <option value="1">Construction</option>
                                    <option value="2">Financial</option>
                                    <option value="3">Trade</option>
                                    <option value="4">Commercial</option>
                                    <option value="5">Technology</option>
                                    <option value="6">Digital</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="dispute_type" id="dispute_type" class="dispute_type">
                                    <!-- onchange="javascript:getLocation(this.id);" -->
                                    <option value="">Dispute Type*</option>
        
                                    <option value="1">Negotiation</option>
                                    <option value="2">Mediation</option>
                                    <option value="3">Adjudication</option>
                                    <option value="4">Litigation</option>
                                    <option value="5">Arbitration</option>
                                    <option value="6">Expert Determination</option>
                                    <option value="7">Award Enforcement</option>
                                    <option value="8">Class Action</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="dispute_amount" id="dispute_amount" class="dispute_amount">
                                    <option value="">Dispute Amount</option>
        
                                    <option value="1">$0 to $10</option>
                                    <option value="2">$11 to %50</option>
                                    <option value="3">$51 to $100</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
                            <div class="opt_data_holder_new">
                            <div class="frmtitle_small">
                                Select Dispute Resolution Partner Type (select as many
                                options as desired):
                            </div>
                            </div>
        
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                <input name="dispute_partner_type" class="subject_radio locpref_chk" id="fee_based_only"
                                    value="fee_based_only" type="checkbox" />
                                <label for="fee_based_only" class="subject_text">Fee Based Only</label>
                                </li>
        
                                <li>
                                <input name="dispute_partner_type" class="subject_radio locpref_chk"
                                    id="fee_and_award_percentage" value="fee_and_award_percentage" type="checkbox" />
                                <label for="fee_and_award_percentage" class="subject_text">Fee and Award Percentage
                                    Based</label>
                                </li>
        
                                <li>
                                <input name="dispute_partner_type" class="subject_radio locpref_chk" id="award_percentage_based"
                                    value="award_percentage_based" type="checkbox" />
                                <label for="award_percentage_based" class="subject_text">Award Percentage Based Only</label>
                                </li>
                            </ul>
                            </div>
        
                            <div class="conditional-options">
                            <!-- If "Fee Based Only" is selected -->
                            <div class="fee-based-options" style="display: none">
                                <p class="frmtitle_small">
                                Please select one or as desired:
                                </p>
                                <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                    <input type="checkbox" name="lump_sum_fee" id="lump_sum_fee"
                                    class="subject_radio locpref_chk" />
                                    <label for="lump_sum_fee" class="subject_text">Lump Sum Fee</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="hourly_based_fee" id="hourly_based_fee"
                                    class="subject_radio locpref_chk" />
                                    <label for="hourly_based_fee" class="subject_text">Hourly Based Fee</label>
                                </li>
                                </ul>
                            </div>
        
                            <!-- If "Fee and Award Percentage Based" is selected -->
                            <div class="fee-and-award-options" style="display: none">
                                <p class="frmtitle_small">
                                Award Percentage Based (Range can be given like up to
                                5%, up to 10%, ... up to 50% or custom in which the
                                Claim Initiator can put the percentage like 24% etc.)
                                </p>
                                <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                    <input type="checkbox" name="lump_sum_fee" id="lump_sum_fee"
                                    class="subject_radio locpref_chk" />
                                    <label for="lump_sum_fee" class="subject_text">Lump Sum Fee</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="hourly_based_fee" id="hourly_based_fee"
                                    class="subject_radio locpref_chk" />
                                    <label for="hourly_based_fee" class="subject_text">Hourly Based Fee</label>
                                </li>
                                </ul>
                                <!-- Custom input field for percentage -->
                                <input type="text" name="custom_percentage" id="custom_percentage" class="input_percentage_holder"
                                placeholder="Custom Percentage (e.g., 24%)" />
                            </div>
        
                            <!-- If "Award Percentage Based Only" is selected -->
                            <div class="award-percentage-options" style="display: none">
                                <!-- Custom input field for percentage -->
                                <input type="text" name="custom_percentage" id="custom_percentage" class="input_percentage_holder"
                                placeholder="Custom Percentage (e.g., 24%)" />
                            </div>
                            </div>
        
                            <br />
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="region" id="region" class="regiondropdn"
                                    onchange="javascript:getLocation(this.id);" required>
                                    <option value="">Region*</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
        
                            <div class="input_holder">
                            <div class="">
                                <div class="dropdownbox">
                                <select name="country" id="country" class="countrydropdn"
                                    onchange="javascript:getLocation(this.id);">
                                    <option value="">Country</option>
                                </select>
                                </div>
                            </div>
                            </div>
        
                            <br />
        
                            <div class="opt_data_holder_new">
                            <div class="frmtitle_small">
                                Due to the sensitivity of data, you can post the Dispute
                                Details as:
                            </div>
                            </div>
        
                            <!-- Dispute Details Privacy Option -->
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                <input name="dispute_privacy" class="subject_radio locpref_chk" id="company_registered"
                                    value="company_registered" type="radio" />
                                <label for="company_registered" class="subject_text">The Company Registered</label>
                                </li>
                                <li>
                                <input name="dispute_privacy" class="subject_radio locpref_chk" id="anonymous" value="anonymous"
                                    type="radio" />
                                <label for="anonymous" class="subject_text">Anonymous</label>
                                </li>
                            </ul>
        
                            <div class="frmtitle_small">
                                (if Anonymous is selected then you can put a different
                                e-mail address and phone number to be contacted)
                            </div>
                            <div class="frmtitle_small">
                                Selecting Anonymous will hide all registered company
                                details except but will show the dispute details as
                                selected.
                            </div>
                            </div>
        
                            <br />
        
                            <div class="opt_data_holder_new">
                            <div class="frmtitle_small">
                                Please select Option for Free posting and receiving of
                                proposals in which only our paid members can see your
                                Dispute Details or Select the Paid Service by MyDRP to
                                receive a list of Dispute Resolution and Claim
                                Consultants best suiting your dispute requirements.
                            </div>
                            </div>
        
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                <input name="dispute_service" class="subject_radio locpref_chk" id="paid_service"
                                    value="paid_service" type="radio" onchange="toggleButtons();" />
                                <label for="paid_service" class="subject_text">Paid Service</label>
                                </li>
                                <li>
                                <input name="dispute_service" class="subject_radio locpref_chk" id="free_service"
                                    value="free_service" type="radio" onchange="toggleButtons();" />
                                <label for="free_service" class="subject_text">Free</label>
                                </li>
                            </ul>
                            </div>
        
        
                        </div>
                        </div>
                    </div>
        
                    <a href="#" class="button_common nextbtn">Next</a>
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        terms and conditions
                    </button> -->
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="">
                    <div class="frmtitle">What curriculum do you follow?</div>
        
                    <div class="frmtitle_small">
                        ( Scroll down for more curriculums )
                    </div>
        
                    <div class="midsection_common">
                        <div class="opt_data_holder_new">
                        <div class="searchboxcontainer">
                            <input name="searchbox" placeholder="Search" type="text" class="searchbox" />
                        </div>
        
                        <ul class="subjectlist boardlist scrollblock"></ul>
                        </div>
                    </div>
        
                    <div class="new_button_holder">
                        <a href="#" class="backbtn">Back</a>
                        <a href="#" class="button_common nextbtn">Next</a>
                    </div>
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="second_page">
                    <div class="frmtitle">Page 2</div>
        
                    <div class="midsection_common">
                        <div class="other_information signupscreen">
        
                        <div class="match_dropdown_holder down_mark searchboxcontainernew" id="subject_div_holder">
        
                            <div class="require pright">* Required field</div>
                            <div class="opt_data_holder_new">
                            <div class="frmtitle_small">
                                Select Dispute Resolution Partner Type (select as many
                                options as desired):
                            </div>
                            </div>
        
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                <input name="dispute_partner_type" class="subject_radio locpref_chk" id="fidic" value="fidic"
                                    type="radio" />
                                <label for="fidic" class="subject_text">FIDIC</label>
                                </li>
        
                                <li>
                                <input name="dispute_partner_type" class="subject_radio locpref_chk" id="other" value="other"
                                    type="radio" />
                                <label for="other" class="subject_text">Any other please state</label>
                                </li>
                            </ul>
                            </div>
        
                            <!-- other -->
                            <div class="conditional-input">
                            <!-- If "Other" is selected -->
                            <div class="other-option" style="display: none">
                                <p class="frmtitle_small">Please specify other:</p>
                                <input type="text" name="other_option" id="other_option"
                                class="input_other_option input_subject_holder input_match_holder"
                                placeholder="Specify other option" />
                            </div>
                            </div>
        
                            <div class="require pright">* Required field</div>
                            <div class="opt_data_holder_new">
                            <div class="frmtitle_small">
                                Please select Dispute Details (select one or many as desired):
                            </div>
                            </div>
                            <!--  -->
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist">
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="extension_of_time"
                                    value="extension_of_time" type="checkbox" />
                                <label for="extension_of_time" class="subject_text">Extension of Time</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="delay_analysis"
                                    value="delay_analysis" type="checkbox" />
                                <label for="delay_analysis" class="subject_text">Delay Analysis</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="disruption_analysis"
                                    value="disruption_analysis" type="checkbox" />
                                <label for="disruption_analysis" class="subject_text">Disruption Analysis</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="quantum_analysis"
                                    value="quantum_analysis" type="checkbox" />
                                <label for="quantum_analysis" class="subject_text">Quantum Analysis</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="claim_statements"
                                    value="claim_statements" type="checkbox" />
                                <label for="claim_statements" class="subject_text">Drafting of Claim Statements</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="legal_interpretation"
                                    value="legal_interpretation" type="checkbox" />
                                <label for="legal_interpretation" class="subject_text">Legal Interpretation of the
                                    Contract</label>
                                </li>
                                <li>
                                <input name="dispute_details" class="subject_radio locpref_chk" id="strategize_resolution"
                                    value="strategize_resolution" type="checkbox" />
                                <label for="strategize_resolution" class="subject_text">Strategize Dispute Resolution</label>
                                </li>
                            </ul>
                            </div>
                            <!-- textarea -->
                            <div class="opt_data_holder_new">
                            <textarea name="dispute_information" rows="3"
                                placeholder="Please provide anonymous or non-anonymous information of the dispute:"
                                style="width: 93%;"></textarea>
                            </div>
        
                            <div class="opt_data_holder_new">
        
                            <div class="file-attachment-container">
                                <input type="file" id="attachment" name="attachment" class="file-attachment" multiple />
                                <label for="attachment" class="file-label">Attach Documents</label>
                            </div>
        
                            <div class="frmtitle_small">
                                Attach Dispute Relevant Documents (optional).
                            </div>
        
                            </div>
        
                            <div class="opt_data_holder_new">
        
                            <div class="frmtitle_small">
                                Please select for proposals receiving:
                            </div>
        
                            <ul class="subjectlist locpreflist">
                                <li>
                                <input name="proposals_receiving" class="subject_radio locpref_chk"
                                    id="contact_information_available" value="contact_information_available" type="radio" />
                                <label for="contact_information_available" class="subject_text">
                                    Let my contact information be available to receive proposals and communication (your
                                    registered email address or in the case of anonymous selection the other email address given
                                    with Dispute Detail would be visible for consultants to contact)
                                </label>
                                </li>
        
                                <li>
                                <input name="proposals_receiving" class="subject_radio locpref_chk"
                                    id="ask_for_contact_information" value="ask_for_contact_information" type="radio" />
                                <label for="ask_for_contact_information" class="subject_text">
                                    Let the Dispute Resolution and Claim Consultant ask for Contact information (The paid
                                    consultant firm will have to press (Let me contact button) to let the Dispute Resolution
                                    Initiator to know that a Dispute Resolution Consultant wants to connect with all the
                                    consultant’s specific details)
                                </label>
                                </li>
                            </ul>
        
                            </div>
        
                            <br><br>
        
                            <div class="opt_data_holder_new">
                            <!-- <div class="frmtitle_small">
                                I agree to the terms and conditions
                            </div> -->
                            <ul class="subjectlist locpreflist">
                                <!-- <li>
                                <input name="agree_terms_conditions" class="subject_radio locpref_chk" id="agree_terms"
                                    value="agree_terms" type="checkbox" />
                                <label for="agree_terms" class="subject_text">
                                    I agree to the terms and conditions
                                </label>
                                </li> -->
                            </ul>
                            </div>
                            <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Terms and Conditions
                        </a>
                            <div class="opt_data_holder_new">
                            <ul class="subjectlist locpreflist">
                                <li>
        
                                <input name="declare_genuine" class="subject_radio locpref_chk" id="declare_genuine"
                                    value="declare_genuine" type="checkbox" />
                                <label for="declare_genuine" class="subject_text">
                                    I declare that my dispute resolution requirement is genuine and all the information provided
                                    here is correct and authentic
                                </label>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="new_button_holder">
                        <a href="#" class="backbtn">Back</a>
                        <a href="#" class="button_common" id="submitAndPayBtn" style="display: none;">Submit and Pay</a>
                        <a href="#" class="button_common" id="submitBtn" style="display: none;">Submit</a>
                    </div>
        
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="locationpref">
                    <div class="frmtitle">What are you looking for?</div>
        
                    <div class="midsection_common">
                        <div class="opt_data_holder_new">
                        <ul class="subjectlist locpreflist scrollblock">
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_1" value="Private Tutor"
                                type="radio" />
                            <label for="locpref_1" class="subject_text">Private Tutor</label>
                            </li>
        
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_2" value="Online Tutor"
                                type="radio" />
                            <label for="locpref_2" class="subject_text">Online Tutor</label>
                            </li>
        
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_3" value="Tuition Center"
                                type="radio" />
                            <label for="locpref_3" class="subject_text">Tuition Center</label>
                            </li>
        
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_4" value="Local Class"
                                type="radio" />
                            <label for="locpref_4" class="subject_text">Local Class</label>
                            </li>
        
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_5" value="Activity Center"
                                type="radio" />
                            <label for="locpref_5" class="subject_text">Activity Center</label>
                            </li>
        
                            <li>
                            <input name="locpref" class="subject_radio locpref_chk" id="locpref_6" value="Training Institute"
                                type="radio" />
                            <label for="locpref_6" class="subject_text">Training Institute</label>
                            </li>
                        </ul>
                        </div>
                    </div>
        
                    <div class="new_button_holder">
                        <a href="#" class="backbtn">Back</a>
                        <a href="#" class="button_common nextbtn">Next</a>
                    </div>
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="requirement">
                    <div class="frmtitle">
                        Introduce yourself and tell what you want to learn
                        <span class="optional">(Optional)</span>
                    </div>
        
                    <div class="midsection_common">
                        <textarea placeholder="Enter your message " name="requirementdetails" id="requirementdetails"></textarea>
        
                        <p class="wordcount"></p>
                    </div>
        
                    <div class="new_button_holder">
                        <a href="#" class="backbtn">Back</a>
                        <a href="#" class="button_common nextbtn">Next</a>
                    </div>
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
                    <div class="formlebel_one animated zoomIn" data-step="signinup">
                    <div class="frmtitle">Sign Up</div>
        
                    <div class="midsection_common">
                        <div class="other_information signupscreen" style="display: block">
                        <div class="require pright">* Required fields</div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <input type="text" name="reg_name" id="reg_name" placeholder="* Name" />
                            </div>
                        </div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <input type="text" name="reg_email" id="reg_email" placeholder="* Email" />
                            </div>
                        </div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <input type="text" name="reg_mobile" id="reg_mobile" placeholder="* Mobile" maxlength="15" />
                            <a href="javascript:void(0)" class="edit_text send_code" style="display: none">Get Code</a>
                            <div class="otp_messagetext" id="otp_messagetext" style="display: none">
                                6 digiet OPT has been sent to your
                                "<strong>9874459466</strong>" number please enter below
                            </div>
                            </div>
        
                            <div class="opt_block otptypeholder" style="display: none">
                            <ul class="opt_block">
                                <li>
                                <input type="text" name="" placeholder="0" class="" />
                                <input type="text" name="" placeholder="0" class="" />
                                <input type="text" name="" placeholder="0" class="" />
                                <input type="text" name="" placeholder="0" class="" />
                                <input type="text" name="" placeholder="0" class="" />
                                <input type="text" name="" placeholder="0" class="" />
                                </li>
                                <li>
                                <a href="javascript:void(0)" class="edit_text resend_code" style="display: none">Resend Code</a>
                                <input type="hidden" id="otpvalue" name="otpvalue" value="" />
                                </li>
                            </ul>
                            </div>
                        </div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <div class="dropdownbox">
                                <select name="showcontact" id="showcontact" placeholder="Select Privacy">
                                <option value="">* Select Privacy</option>
                                <option value="showall">Show All Details</option>
                                <option value="showemail">Show Email Only</option>
                                <option value="showmobile">Show Mobile Only</option>
                                <option value="shownone">Show None</option>
                                </select>
                            </div>
                            </div>
                        </div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <div class="dropdownbox">
                                <select name="studyingatgrade" id="studyingatgrade" placeholder="Select Grade/Year">
                                <option>Select Grade / Year</option>
                                <option value="Year 1">Year 1</option>
                                <option value="Year 2">Year 2</option>
                                <option value="Year 3">Year 3</option>
                                <option value="Year 4">Year 4</option>
                                <option value="Year 5">Year 5</option>
                                <option value="Year 6">Year 6</option>
                                <option value="Year 7">Year 7</option>
                                <option value="Year 8">Year 8</option>
                                <option value="Year 9">Year 9</option>
                                <option value="Year 10">Year 10</option>
                                <option value="Year 11">Year 11</option>
                                <option value="Year 12">Year 12</option>
        
                                <option value="Adult Learner">Adult Learner</option>
                                <option value="Others">Others</option>
                                </select>
                            </div>
                            </div>
                        </div>
        
                        <div class="input_holder">
                            <div class="halfblock">
                            <ul class="subjectlist locpreflist scrollblock">
                                <li>
                                <input name="agreepref" class="subject_radio locpref_chk" id="agreepref" value="1"
                                    type="checkbox" />
                                <label for="agreepref" class="subject_text" style="font-size: 11px; color: #ff4f37">I verify
                                    that my tutor requirement is genuine and
                                    all the information provided here is correct.and
                                    authentic</label>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
        
                    <br /><br />
        
                    <div class="new_button_holder">
                        <a href="#" class="backbtn">Back</a>
                        <a href="#" class="button_common nextbtn">Next</a>
                    </div>
                    </div>
                    <!-- End One -->
        
                    <!-- One -->
        
                    <div class="success_message_holder animated zoomIn" style="display: none">
                    <div class="signtick_holder">
                        <img src="images/sucess_tick.png" alt="" />
                    </div>
                    <p></p>
        
                    <!--<a href="#" class="button_common finishbtn"></a>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4 justify-content-center" >
            </div>
            <div class="exist_login">
                <span>If you are facing any problem kindly
                  <a href="https://www.mydispute.ae/contact" class="login" target="_blank">Contact Us</a>
                  or write to
                  <a href="mailto:support@mydispute.ae" class="login" target="_blank"><span>support@mydispute.ae</span></a></span>
              </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms and Conditions</h1>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
            <p>1. My Dispute Resolution Partner is shortened to the abbreviation MyDRP.</p>
            <p>2. MyDRP does not promise that site or any of its contents, services and features are error free and/or
            uninterrupted.</p>
            <p>3. MyDRP does not promises that the usage of the site will result in desired, required and/or specific
            results.</p>
            <p>4. MyDRP website and its content are provided on an ‘as is’ and ‘as available’ basis.</p>
            <p>5. All information and services provided can change without notice.</p>
            <p>6. If maintenance of the site is required then MyDRP has no responsibility for any loss occurring due to
            shutdown of services.</p>
            <p>7. MyDRP disclaims any responsibility or loss if any unforeseen and unfortunate event or occurrence stops
            the
            services partially or fully.</p>
            <p>8. MyDRP can not ensure if any files or data downloaded by the members would be virus free or free from
            destructive features.</p>
            <p>9. The members assume total responsibility for the use of the site and any linked sites.s</p>
            <p>10. If any regional, international and/or national rules, laws and regulations makes the MyDRP services
            void;
            in this case MyDRP will not be held responsible and members assume full responsibility for carrying out
            required and desired due diligence and related jurisdictional approvals.</p>
            <p>11. The sole remedy upon dissatisfaction with the site or any of its contents is to stop using the site or
            any
            such content.</p>
            <p>12. MyDRP disclaims any responsibility for loss, harm, conflict and/or dispute arising between consultants
            and
            companies (providing and requiring dispute services respectively) due to any reasons.</p>
            <p>13. MyDRP provides new jobs for dispute consultants on an “as is” and “as available” basis and does not
            carry
            any responsibility in authenticating such jobs. It is the consultant’s own responsibility to verify and
            authenticate jobs requiring dispute resolution services.</p>
            <p>14. MyDRP provides dispute resolution services through registered members to registered members on an “as
            is”
            and “as available” basis and does not take any responsibility in authenticating dispute resolution service
            providers. It is the responsibility of the company requiring dispute resolution services to verify and
            authenticate experts and consultants providing the desired and required dispute resolution services.</p>
            <p> 15. MyDRP will not be held responsible for any losses occurring out of the use of the services provided
            through the platform: My Dispute Resolution provider website.</p>
            <p>16. MyDRP disclaims any or all liability for the acts, omissions and conduct of any third parties.</p>
            <p>17. Disputes are sensitive matters and MyDRP takes no responsibility that even when the Dispute Resolution
            requirements are posted anonymously that other information may not be hacked or leaked. MyDRP disclaims any
            loss or harm occurring out of hacking of its website or misconduct or mistake by the members.</p>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agreeCheckbox">
                <label class="form-check-label" for="agreeCheckbox">
                I Agree
                </label>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="understoodBtn" data-bs-dismiss="modal" disabled >Understood</button>
            <button type="button" class="close btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>


        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          var countrySelect = document.getElementById('country');
          var initiatorCountrySelect = document.getElementById('initiator_country');
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
                initiatorCountrySelect.appendChild(option);
              });
            })
            .catch(function (error) {
              console.error('Error fetching countries:', error);
            });
        });
    
        document.addEventListener('DOMContentLoaded', function () {
          var regionSelect = document.getElementById('region');
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
          // Your getLocation function logic here
        }
      </script>
    
      <script>
        var fetchsubjecturl = "standaloneform_landing/fetchsubjectsbysegment";
        var fetchboardurl = "standaloneform_landing/fetchboardsbysegment";
        var fetchareaurl = "standaloneform_landing/fetchareasbylocation";
        var triggercommurl = "standaloneform_landing/triggercommunicate";
    
        var triggercommurl = "standaloneform_landing/triggercommunicate";
    
        var segsubfeedurl = "standaloneform_landing/fetchsegmentandsubjectajax";
    
        var classid = "";
        var memberid = "";
        var membertype = "";
        var enqtype = "postajob";
        var loggedin = "";
        var maxlenmobile = "9";
    
        var sendotpurl = "standaloneform_landing/sendotpurl";
    </script>
</section>
@endsection