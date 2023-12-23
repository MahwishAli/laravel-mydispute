@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Consultant Review</h1>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<style>
        .review-list ul li .left span {
            width: 32px;
            height: 32px;
            display: inline-block;
        }
        .review-list ul li .left {
            flex: none;
            max-width: none;
            margin: 0 10px 0 0;
        }
        .review-list ul li .left span img {
            border-radius: 50%;
        }
        .review-list ul li .right h4 {
            font-size: 16px;
            margin: 0;
            display: flex;
        }
        .review-list ul li .right h4 .gig-rating {
            display: flex;
            align-items: center;
            margin-left: 10px;
            color: #ffbf00;
        }
        .review-list ul li .right h4 .gig-rating svg {
            margin: 0 4px 0 0px;
        }
        .country .country-flag {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
            margin: 0 7px 0 0px;
            border: 1px solid #fff;
            border-radius: 50px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        .country .country-name {
            color: #95979d;
            font-size: 13px;
            font-weight: 600;
        }
        .review-list ul li {
            border-bottom: 1px solid #dadbdd;
            padding: 0 0 30px;
            margin: 0 0 30px;
        }
        .review-list ul li .right {
            flex: auto;
        }
        .review-list ul li .review-description {
            margin: 20px 0 0;
        }
        .review-list ul li .review-description p {
            font-size: 14px;
            margin: 0;
        }
        .review-list ul li .publish {
            font-size: 13px;
            color: #95979d;
        }

        .review-section h4 {
            font-size: 20px;
            color: #222325;
            font-weight: 700;
        }
        .review-section .stars-counters tr .stars-filter.fit-button {
            padding: 6px;
            border: none;
            color: #4a73e8;
            text-align: left;
        }
        .review-section .fit-progressbar-bar .fit-progressbar-background {
            position: relative;
            height: 8px;
            background: #efeff0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            ;
            border-radius: 999px;
        }
        .review-section .stars-counters tr .star-progress-bar .progress-fill {
            background-color: #ffb33e;
        }
        .review-section .fit-progressbar-bar .progress-fill {
            background: #2cdd9b;
            background-color: rgb(29, 191, 115);
            height: 100%;
            position: absolute;
            left: 0;
            z-index: 1;
            border-radius: 999px;
        }
        .review-section .fit-progressbar-bar {
            display: flex;
            align-items: center;
        }
        .review-section .stars-counters td {
            white-space: nowrap;
        }
        .review-section .stars-counters tr .progress-bar-container {
            width: 100%;
            padding: 0 10px 0 6px;
            margin: auto;
        }
        .ranking h6 {
            font-weight: 600;
            padding-bottom: 16px;
        }
        .ranking li {
            display: flex;
            justify-content: space-between;
            color: #95979d;
            padding-bottom: 8px;
        }
        .review-section .stars-counters td.star-num {
            color: #4a73e8;
        }
        .ranking li>span {
            color: #62646a;
            white-space: nowrap;
            margin-left: 12px;
        }
        .review-section {
            border-bottom: 1px solid #dadbdd;
            padding-bottom: 24px;
            margin-bottom: 34px;
            padding-top: 64px;
        }
        .review-section select, .review-section .select2-container {
            width: 188px !important;
            border-radius: 3px;
        }
        ul, ul li {
            list-style: none;
            margin: 0px;
        }
        .helpful-thumbs, .helpful-thumb {
            display: flex;
            align-items: center;
            font-weight: 700;
        }
</style>
</div>
@endsection