@extends('layouts.web')
@section('content')
<style>

</style>
<section class="sign_up_member pt-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center mb-4">
                <h1 class="center">Let Us get started!</h1>
                <div class="seperator member-signup"></div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-4 text-center block px-4 py-5 me-5">
                <div class="icon_image mt-3 mb-5">
                    <img src="https://www.myprivatetutor.ae/images/2020/icon/ttnormal.png" alt=""
                        class="picture1">
                    <img src="https://www.myprivatetutor.ae/images/2020/icon/tt_active.png" alt=""
                        class="picture2">
                </div>
                <div class="icon_text">
                    <h4 class="mb-3">Dispute Resolution Initiator</h4>
                    <p class="mb-3">Companies Seeking Dispute Resolution Services</p>
                </div>
                <div class="icon_button mb-4">
                    <a href="/become-a-tutor" class="learnmore">Learn More</a>
                </div>
                <div class="icon_signup d-grid gap-3 col-10 mx-auto">
                    <a href="{{ route('initiator_signup') }}" class="btn btn-outline-primary">Sign Up</a>
                </div>
            </div>
            <div class="col-lg-4 text-center block px-4 py-5">
                <div class="icon_image mt-3 mb-5">
                    <img src="https://www.myprivatetutor.ae/images/2020/icon/center_normal.png" alt=""
                        class="picture1">
                    <img src="https://www.myprivatetutor.ae/images/2020/icon/center_active.png" alt=""
                        class="picture2">
                </div>
                <div class="icon_text">
                    <h4 class="mb-3">Consultant</h4>
                    <p class="mb-3">Companies Providing Dispute Resolution Services</p>
                </div>
                <div class="icon_button mb-4">
                    <a href="/center_signup.php" class="learnmore">Learn More</a>
                </div>
                <div class="icon_signup d-grid gap-3 col-10 mx-auto">
                    <a href="{{ route('consultant_signup') }}" class="btn btn-outline-primary">Sign Up</a>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-4">
                <span class="">Already have an account?</span>
                <a href="{{ route('login') }}" class="signin-link">Sign In</a>
            </div>
        </div>
    </div>
</section>
@endsection
