@extends('layouts.web')

@section('content')
    <section class="how_it_works pt-5">
        <div class="container my-5" >
            <div class="row text-center">
                <div class="d-flex flex-column align-items-center mb-4">    
                    <h2 class="fs-1">How It Works</h2>
                    <div class="seperator works"></div>
                </div>
                <div class="col-lg-1 col-md-1" >
                </div>
                <div class="col-lg-2 col-md-2 d-flex justify-content-center align-items-center image-left">
                    <img class="image-left-img" src="{{ asset('assets/image/works1.PNG') }}" />
                </div>
                <div class="col-lg-6 col-md-6" >
                    <img class="image-left-arrow" src="{{ asset('assets/image/works4.PNG') }}" />
                    <img class="image-right-arrow" src="{{ asset('assets/image/works3.PNG') }}" />
                </div>
                <div class="col-lg-2 col-md-2 d-flex justify-content-center align-items-center image-right"  >
                    <img class="image-right-img" src="{{ asset('assets/image/works2.PNG') }}" />
                </div>
                <div class="col-lg-1 col-md-1" >
                </div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-lg-12 mb-4" >
                    <p>How it Works – <b>Dispute Resolution Seeker</b> – Step by Step Guidelines:</p>
                    <ol class="decimal-list mt-4">
                        <li>
                            <p>You can either first Signup as a member or just Request Dispute Resolution Consultancy services which will sign up your company as a member and also post your dispute resolution requirements automatically.</p>
                        </li>
                        <li>
                            <p>You can fill all the information required in the Dispute Resolution Consultancy Services form. You can keep your company details visible or you can post the dispute resolution requirements anonymously to keep the sensitive details of the dispute only for the chosen consultancy firm.</p>
                        </li>
                        <li>
                            <p>Please remember to keep a valid and updated email address when you put your request for dispute resolution consultancy services when posting it anonymously.</p>
                        </li>
                        <li>
                            <p>Please write a concise summary and requirements of the dispute resolution. Please take care in mentioning details if posting as anonymous or would like to keep sensitive data, company names and other things as abstract.</p>
                        </li>
                        <li>
                            <p>Please select “specific specialist field application allowed” to enable different single experts or small consultant firms specialising in different types of dispute category e.g., delay, disruption and/or quantum in construction projects to enable them to apply solely for a specific role. Through this, you can assign different parts of the dispute to different consultants and make your own collective team of experts to achieve the desired dispute resolution results. You have to contract then accordingly.</p>
                        </li>
                        <li>
                            <p>Read, understand and tick the terms and conditions box of the form.</p>
                        </li>
                        <li>
                            <p>Submit the form.</p>
                        </li>
                        <li>
                            <p>Receive Official Proposals from consultant firms, single experts or small-consultant firms as required and enabled through form selections.</p>
                        </li>
                        <li>
                            <p>The responsibility of contracting and fulfilment of either the services or award percentage is the sole responsibility of the parties involved and MyDRP does not provide support in this regard.</p>
                        </li>
                        <li>
                            <p>We advise caution to firms before contracting. Please carry out your due diligence before contracting with single or multiple consultant firms.</p>
                        </li>
                        <li>
                            <p>Make your decision and contract with your desired consultant firm(s).</p>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-12 mb-4" >
                    <img class="d-none d-md-block img-fluid" src="{{ asset('assets/image/Group 24.png') }}" alt="">
                </div>
                <div class="col-lg-12 mt-5 mb-4" >
                    <p>How it works – <b>Consultant Firm </b>– Step by Step Guidelines:</p>
                    <ol class="decimal-list mt-4">
                        <li>
                            <p>You have to first Signup to become the member of the MyDRP platform.</p>
                        </li>
                        <li>
                            <p>Please fill in the required fields for signup.</p>
                        </li>
                        <li>
                            <p>Read, understand and tick the terms and conditions box.</p>
                        </li>
                        <li>
                            <p>Pay the required and selected fees of membership.</p>
                        </li>
                        <li>
                            <p>After becoming a member, you can see the dispute resolution requirements according to your desired selected industry and dispute type.</p>
                        </li>
                        <li>
                            <p>You can register as a full-fledged firm which has the capacity to take large and complex disputes, possibly finance disputes and enforce awards.</p>
                        </li>
                        <li>
                            <p>You can also register as a single expert or a small consultant firm looking for specialist jobs within the requirements of the dispute resolution services required.</p>
                        </li>
                        <li>
                            <p>Please remember that you may only apply for specialist jobs if only allowed in the query submitted for dispute resolution consultancy services by the plaintiff.</p>
                        </li>
                        <li>
                            <p>Read, analyse and evaluate dispute resolution requirements and decide whether to pursue or not.</p>
                        </li>
                        <li>
                            <p>If to pursue then submit your official proposal on the mentioned email/company email and wait to be contacted.</p>
                        </li>
                        <li>
                            <p>If approved for dispute resolution consultancy services then contract accordingly as applicable. The responsibility of contracting and fulfilment of either the fees or award percentage is the sole responsibility of the parties involved and MyDRP does not provide support in this regard.</p>
                        </li>
                        <li>
                            <p>We advise caution to consultant firms before contracting. Please carry out your due diligence before contracting.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Start the right and left animations after the arrow animations complete
            setTimeout(function() {
                document.querySelector('.image-left-img').style.display='block';
                document.querySelector('.image-right-img').style.display='block';
                document.querySelector('.image-left-img').style.animation = 'moveToLeft 2s ease-in-out forwards, returnToLeft 2s ease-in-out forwards';
                document.querySelector('.image-right-img').style.animation = 'moveToRight 2s ease-in forwards, returnToRight 2s ease-in-out forwards';
            }, 500); // 5s delay (3s for arrow animations + 2s break)
        });
    </script>
@endsection