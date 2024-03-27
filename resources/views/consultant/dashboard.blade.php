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
                                    <h4 class="fw-normal text-white fs-1">{{ $available }}</h4>
                                    <h5 class="subtitle text-sm text-white mb-0">Available Jobs</h5>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-speed"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-red-light">
                            <div class="row align-items-center ">
                                <a href="{{ route('consultant.availjobs') }}" class="d-inline-flex p-0 text-primary">
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
                                    <h4 class="fw-normal text-white fs-1">{{ $applied }}</h4>
                                    <p class="subtitle text-sm text-white mb-0">Applied Jobs</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-blue-light">
                            <div class="row align-items-center">
                                <a href="{{ route('consultant.jobsApp') }}" class="d-inline-flex p-0 text-info">
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
                                    <h4 class="fw-normal text-white fs-1">{{ $shortlisted }}</h4>
                                    <p class="subtitle text-sm text-white mb-0">Shortlisted Jobs</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-primary-light">
                            <div class="row align-items-center ">
                                <a href="{{ route('consultant.jobsShortlisted') }}" class="d-inline-flex p-0 text-success">
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
                                    <p><b></b></p>
                                    <div class="col-md-3">
                                        <label>Membership Status</label>
                                    </div>
                                    <div class="col-md-9">
                                        <p>Active/Free</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-3">
                                        <label>Membership expiry:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <p>12/03/2024</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-3">
                                        <label>Membership Type: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <p>1 month, 3-month, 6-month, 1 year, 2 years, 3 years.</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary me-2" id="upgrade">Upgrade Membership</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="extend">Extend Membership</button>
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