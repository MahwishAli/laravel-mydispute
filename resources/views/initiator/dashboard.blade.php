@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Dashboard</h1>
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100 rounded-3">
                        <div class="card-body bg-primary rounded-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-6">
                                    <h4 class="fw-normal text-white fs-1">0</h4>
                                    <h5 class="subtitle text-sm text-white mb-0">Closed Requirements</h5>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-speed"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-red-light">
                            <div class="row align-items-center ">
                                <a href="{{ route('initiator.requirements') }}" class="d-inline-flex p-0 text-primary">
                                    <div class="col-10">
                                    <p class="mb-0">View</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100 rounded-3">
                        <div class="card-body bg-info rounded-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-white fs-1">0</h4>
                                    <p class="subtitle text-sm text-white mb-0">Current Live</p>
                                </div>
                                {{-- <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-blue">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#news-1"> </use>
                                    </svg>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-blue-light">
                            <div class="row align-items-center">
                                <a href="" class="d-inline-flex p-0 text-info">
                                    <div class="col-10">
                                    <p class="mb-0">View</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100 rounded-3">
                        <div class="card-body bg-success rounded-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-white fs-1">0</h4>
                                    <p class="subtitle text-sm text-white mb-0">Draft</p>
                                </div>
                                {{-- <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-primary">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#bookmark-1"> </use>
                                    </svg>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-primary-light">
                            <div class="row align-items-center ">
                                <a href="" class="d-inline-flex p-0 text-success">
                                    <div class="col-10">
                                        <p class="mb-0">View</p>
                                    </div>
                                    <div class="col-2 text-end"><i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widget Type 1-->
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto col-xl-12">
                    <!-- Nav tabs -->
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row"> 
                                    <div class="col-md-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary me-2" id="resolution">Request Dispute Resolution Services</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="review">Write a Consultant Review</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="feedback" data-toggle="modal" data-target="#feedbackModal">Give Feeback to MyDRP</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="help">Ask MyDRP for Help </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ml-auto col-xl-12">
                    <!-- Nav tabs -->
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row"> 
                                    <p><u>Negotiation (1):</u></p>
                                    <div class="col-md-4">
                                        <label>Request Type:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Free of Charge</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Negotiation Request No.:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Your Requirements was viewed by: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>46 consultants</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Your Contacts Details were viewed by: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>50 consultants</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Consultants applied for your requirements:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>45</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Request Submitted on:  </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>12/12/2020</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Dispute Amount: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>USD 10 million</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary me-2" id="details">View Requirement Details</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="amend">Amend Requirement Details</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="close">Close the Requirement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ml-auto col-xl-12">
                    <!-- Nav tabs -->
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row"> 
                                    <p><u>Expert Determination (1):</u></p>
                                    <div class="col-md-4">
                                        <label>Request Type:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Paid</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Expert Determination Request No.:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>2</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Request Submitted on:  </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>12/12/2020</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Dispute Amount: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>USD 10 million</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-12 my-2 text-center">
                                        <button type="submit" class="btn btn-primary ms-2" id="consultants-list">View MyDRP provided list of consultants</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="guidance" data-toggle="modal" data-target="#exampleModal">Request further guidance</button>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary me-2" id="details">View Requirement Details</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="amend">Amend Requirement Details</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="close">Close the Requirement</button>
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
</div>
@endsection