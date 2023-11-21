@extends('layouts.web')

@section('content')
    {{-- Welcome section --}}
    <section class="sec-1 py-5">
        <div class="container-fluid" style="--bs-gutter-x: 5rem">
            <div class="row justify-content-around ">
                <div class="col-lg-4 sec-1-col-1 p-0">
                    <img src="{{ asset('assets/image/Balance.png') }}" class="img-fluid weight" alt="">
                </div>

                <div class="col-lg-5 sec-1-col-2" style="padding-left: 0px; ">
                    <h1 class="mb-3">Welcome to the New Era of Dispute Resolution and Claim Management.</h1>
                    <p>
                        No matter what your dispute resolution and claim management concern be whether international trade, construction claim, financial disputes or digital forensics - you may now hire experts and claim consultants through MyDRP. You can opt for Fee Based, Fee and Percentage Sharing Based or only on an Award Percentage sharing basis. We highly encourage and promote the Ownership-Oriented Model (Investment Mindset) of working out especially claim disputes as with the Ownership-Oriented Mindset, Dispute Resolution and Claim Management will enter a New Era of Equitable Justice. 
                    </p>
                    <p>
                        Hire dispute resolution and claim management experts through our free service and solve your complex disputes by getting your requirements fulfilled through international institutions and experts around the globe.
                    </p>
                    <button type="button" class="btn"
                        style="color: white; background-color: #006DA7; margin-bottom: 1rem;">Request Dispute
                        Resolution Consultancy - It's Free</button>
                    <p>Receive proposals from experts and consultants fulfilling your desired requirements. </p>
                </div>

                <div class="col-lg-3 sec-1-col-3  mt-5">
                    <!-- Carousel wrapper -->
                    <div id="carouselExampleIndicators" class="carousel slide text-center carousel-dark"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <img class="rounded-circle shadow-1-strong"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                                    style="width: 50px;" />
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                </ul>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        </p>
                                        <h6 class="test-name">Maria</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <img class="rounded-circle shadow-1-strong"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                                    style="width: 50px;" />
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                </ul>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        </p>
                                        <h6 class="test-name">Mas</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <img class="rounded-circle shadow-1-strong"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                                    style="width: 50px;" />
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                    <li><i class="fas fa-star fa-2xs"></i></li>
                                </ul>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        </p>
                                        <h6 class="test-name">Mad</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel wrapper -->
                </div>
            </div>
        </div>
    </section>
    {{-- how it works section --}}
    <section class="sec-2 py-5">
        <div class="container works-sec">
            <div class="row justify-content-around align-items-center">
                <h2>How It Works</h2>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-around align-items-center mx-2">
                <img class="d-none d-md-block img-fluid" src="{{ asset('assets/image/Group 24.png') }}" alt="">
                <img class="d-block d-md-none img-fluid" src="{{ asset('assets/image/Group 28.png') }}" alt="">
            </div>
        </div>
    </section>
    {{-- About us section --}}
    <section class="sec-3 py-5">
        <div class="container about-sec">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-6 p-5">
                    <img class="img-fluid" src="assets/image/5.png" alt="">
                </div>

                <div class="col-md-6">
                    <h2 class="mb-4">About Us</h2>
                    <p class="about_us pe-5">
                        My Dispute Resolution Partner (MyDRP) believes in healthy competition for the evolving nature of justice. MyDRP provides a platform for the assistance of the claim initiators (plaintiffs) and
                        prospective contract-based jobs for the claim and forensic experts in the field of construction,
                        trade, financial and digital industries.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- vision section --}}
    <section class="sec-4 py-5">
        <div class="container vision-sec">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-8 px-5">
                    <h2 class="mb-4">Vision Statement</h2>
                    <p class="vision">
                        To be a market leader in connecting claim consultants and experts with the companies needing
                        fee-based and/or ownership-oriented mode of claim management for their disputes.<br>
                        By working through this platform, you and we will be investing in:</p>
                    <ul style="list-style-type:disc">
                        <li class="fw-bold">Access to Justice</li>
                        <li class="fw-bold">The Rule of Law</li>
                        <li class="fw-bold">Legal and Para-Legal Experts</li>
                        <li class="fw-bold">Integration of the Legal Industry</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('assets/image/Mask group2.png') }}" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
