@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper" style="min-height: 917px;">
        <style>
            .card-body.bottom-border{
                border-bottom: 2px dashed #dedadaee;
            }
        </style>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <h1>Job Details</h1>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <span class="segoe-ui-italic"><a style="color:black;text-decoration:none;"href="{{ route('consultant.availjobs') }}">Available
                                    Jobs</a> > Job Details</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bottom-border">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Company Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->companyName }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Company Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->companyType }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Industry</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->industry }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Dispute Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->disputeType }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Industry Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->industryType }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Country Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->countryName }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Industry Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span> {{ $data->industryType }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="text">Posted</label>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="mr-3">:</span>
                                        <span>{{ $data->created_at->diffForHumans().' ('. $data->created_at->format('y/m/d').')' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 text-muted " style="display: inline-block;">
                                        <span class="view" style="display: inline-block;"><i class="fa fa-envelope mr-2" aria-hidden="true"></i>{{ $data->email }}</span>
                                        <span class="ml-3"><i class="fas fa-phone-alt mr-2" aria-hidden="true"></i> {{ $data->phone }}</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 text-end">
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
