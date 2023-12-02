@extends('layouts.web')
@section('content')
<section class="contact_us_page pt-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center mb-4">
                <h2 class="fs-1">Contact Us</h2>
                <div class="seperator contact"></div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-lg-10 col-md-12 contact-form form-all bg-white mb-5">
                <div class="wrapper form-section">
                    <div class="row no-gutters">
                        <div class="col-md-7 d-flex align-items-stretch" >
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch</h3>
                                {{-- <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div> --}}
                                <form method="POST" id="contactForm" name="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-5 text-center">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="imga">
                            <img src="{{ asset('assets/image/envelope.png') }}" />
                        </div> --}}
                        <div class="col-md-5 d-flex align-items-stretch p-0">
                            <div class="info-wrap w-100 p-lg-5 p-4 text-white contact-links">
                                <h3 class="">Contact us</h3>
                                <div class=" border-white border-bottom"></div>
                                <div class="dbox w-100 d-flex align-items-start mb-2 mt-5">
                                    <div class="col-1 icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="col-4 text ps-3">
                                        <span class="">Address:</span>
                                    </div>
                                    <div class="col-7 ">
                                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start mb-2">
                                    <div class="col-1 icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="col-4 text ps-3">
                                        <span class="">Phone:</span>
                                    </div>
                                    <div class="col-7">
                                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start mb-2">
                                    <div class="col-1 icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="col-4 text ps-3">
                                        <span class="">Email:</span>
                                    </div>
                                    <div class="col-7">
                                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start mb-2">
                                    <div class="col-1 icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="col-4 text ps-3">
                                        <span class="">Website:</span>
                                    </div>
                                    <div class="col-7">
                                        <p><a href="#">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

    /* .form-all:before, .form-all:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    margin-top: -120px;
    margin-left: -40px;
    border: 0 solid transparent;
    border-width: 120px 315px;
}

    .form-all:before {
    border-bottom-color: #006DA7;
    margin-top: 122px;
    z-index: -2;

}
    .form-all:after {
    border-right-color: #3890bf;
    border-left-color: #006DA7;
    border-bottom-color: #006DA7;
    border-radius: 0 0 5px 5px;
    transform: rotate(360deg);
    box-shadow: 0 1px 1px rgba(0,0,0,0.25);
    z-index: 99999;
}
.form-all > .form-section:after {
    content: '';
    position: absolute;
    height: 68px;
    width: 46%;
    margin-top: -120px;
    margin-left: -40px;
    background: #006DA7;
    z-index: -1;
}

 */

    </style>
</section>
@endsection