@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1 class="my-3">Consultant Review</h1>
                <div class="col-md-12  col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-12 col-sm-12 col-lg-12 d-flex align-items-start border-bottom pb-4 mb-4">
                                    <img class="img-fluid rounded rounded-circle mb-4" width="50" src="{{ asset('/assets/image/testimonial-img-1.jpg') }}" alt="">
                                    <div class="ms-3">
                                       <h5 class="mb-1 fw-bold">
                                            AAA Consultant Co.
                                          <span class="ms-1 fs-6 text-muted">2 Days ago</span>
                                          <span class="ms-1 fs-6 text-muted">15/12/2024</span>
                                        </h5>
                                        <h5 class="">
                                          <span class="ms-1 fs-6 ">Ratings:</span>
                                          <span class="ms-1 fs-6 text-muted">Good</span>
                                        </h5>
                                       <div class="fs-6 mb-2">
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                       </div>
                                       <p>It was pleasure working with XYZ Construction Company where we felt the companies were very alike and share common values. Our team had a great experience working in this win-win Arbitration. (See More)</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-12 d-flex align-items-start border-bottom pb-4 mb-4">
                                    <img class="img-fluid rounded rounded-circle mb-4" width="50" src="{{ asset('/assets/image/testimonial-img-2.jpg') }}" alt="">
                                    <div class="ms-3">
                                       <h5 class="mb-1 fw-bold">
                                            Samson Consulting         
                                          <span class="ms-1 fs-6 text-muted">2 Days ago</span>
                                          <span class="ms-1 fs-6 text-muted">16/02/2023</span>
                                        </h5>
                                        <h5 class="">
                                            <span class="ms-1 fs-6 ">Ratings:</span>
                                            <span class="ms-1 fs-6 text-muted">Excellent</span>
                                          </h5>
                                       <div class="fs-6 mb-2">
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                          <i class="fa fa-star rating-color text-warning"></i>
                                       </div>
                                       <p>It was pleasure working with XYZ Construction Company where we felt the companies were very alike and share common values. Our team had a great experience working in this win-win Arbitration. (See More)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection