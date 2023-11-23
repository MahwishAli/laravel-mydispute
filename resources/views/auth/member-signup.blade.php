@extends('layouts.login')

@section('content')
    <div class="inner_structure">
        <div class="main_wrapper">
            <div class="main_heading_block">
                <h1 class="center">Let Us get started!</h1>
            </div>

            <!-- SignUp-->
            <div class="signup_holder_block">
                <!-- <div class="block">
                        <div class="icon_holder">
                            <img src="https://www.myprivatetutor.ae/images/2020/icon/student_parent_normal.png" alt="" class="normal">
                            <img src="https://www.myprivatetutor.ae/images/2020/icon/student_parent_active.png" alt="" class="active">
                        </div>
                        <h4>Students & Parents</h4>
                        <p>Discover amazing teachers, post tuition jobs, take enriching courses</p>
                        <a href="/post-job" class="btn">
                            Find a Great Teacher
                        </a>

                    </div> -->
                <div class="block">
                    <div class="icon_holder">
                        <img src="https://www.myprivatetutor.ae/images/2020/icon/ttnormal.png" alt=""
                            class="normal">
                        <img src="https://www.myprivatetutor.ae/images/2020/icon/tt_active.png" alt=""
                            class="active">
                    </div>
                    <h4>Dispute Resolution Initiator</h4>
                    <p>Companies Seeking Dispute Resolution Services</p>
                    <a href="/become-a-tutor" class="learnmore">Learn More</a>
                    <a href="{{ route('initiator_signup') }}" class="btn">Sign Up</a>

                </div>
                <div class="block">
                    <div class="icon_holder">
                        <img src="https://www.myprivatetutor.ae/images/2020/icon/center_normal.png" alt=""
                            class="normal">
                        <img src="https://www.myprivatetutor.ae/images/2020/icon/center_active.png" alt=""
                            class="active">
                    </div>
                    <h4>Consultant</h4>
                    <p>Companies Providing Dispute Resolution Services</p>
                    <a href="/center_signup.php" class="learnmore">Learn More</a>
                    <a href="{{ route('register') }}" class="btn">Sign Up</a>

                </div>
            </div>
            <!-- End Sign Up-->
            <a href="{{ route('login') }}" class="login_hyp">Already have an account?<span>Sign
                    In</span></a>
        </div>
    </div>
@endsection
