@extends('layouts.web')
@section('content')
<link href="{{ asset('/auth/css/2020/common.css?v=1698817165') }}" media="all" rel="stylesheet" type="text/css" />

<div class="inner_structure login-top mt-5">
    <div class="main_wrapper my-5">
        <!--Login-->
        <div class="main_login_block mt-5">
            <!--Login Block-->
            <div class="block my-5">
                <h2>Existing Member Sign In</h2>
                <form method="post" name="frm1" id="frm1" action="/login.php">
                    <input type="hidden" name="act" id="act" value="sendlogindata" readonly>

                    <!-- For CTA -->

                    <div class="logininner_block">


                        <div class="input_holder">
                            <input type="email" name="email" id="email" value=""
                                placeholder="Enter Email">

                            <div class="error_txt"></div>

                        </div>
                        <div class="input_holder">
                            <input type="password" name="password" placeholder="Enter Password">

                            <div class="error_txt"></div>
                        </div>
                        <ul class="types_block p-0">
                            <li class="">
                                <input name="membertype" id="membertype_initiator" class="common_radio" type="radio"
                                    value="initiator" checked checked> <label class="label_text"
                                    for="membertype_initiator">Initiator</label>
                            </li>
                            <li class="">
                                <input name="membertype" id="membertype_consultant" class="common_radio" type="radio"
                                    value="consultant"><label class="label_text"
                                    for="membertype_consultant">Consultant</label>
                            </li>
                        </ul>
                        <div class="input_holder">
                            <input type="submit" name="" value="Sign In">
                        </div>
                        <div class="input_holder">
                            <a href="/signin/forgotlogin" class="forgot">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Login Block-->
            <!--SignUp Block-->
            <div class="block my-5">
                <h2>New Member Sign Up</h2>
                <ul class="regholder_block">
                    <li><a href="{{ route('initiator_signup') }}" target="_blank" class="tomato"><img
                                src="https://www.myprivatetutor.ae/images/2020/icon/tutor.png" alt="">Sign
                            Up As Initiator</a></li>
                    <li><a href="{{ route('consultant_signup') }}" target="_blank" class="shamrock"><img
                                src="https://www.myprivatetutor.ae/images/2020/icon/institute.png" alt="">Sign
                            Up As Consultant</a></li>
                </ul>
            </div>
            <!--End SignUp Block-->
        </div>
        <!--Webinar -->
        <!-- End Webinar -->


        <!-- Login Ads -->
        <!--End Login Ads -->
    </div>
</div>

@endsection