@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <h1>Shortlisted Jobs</h1>
                    @foreach($shortlisted as $key => $jobs)
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h5><label>Need a consultant for {{ $jobs->request->disputeType }}</label></h5>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-4 col-md-4 text-muted " style="display: inline-block;">
                                    <span class="view" style="display: inline-block;"><i class="fa fa-map-marker-alt mr-2" aria-hidden="true"></i>{{ $jobs->request->countryName }}</span>
                                </div>
                                <div class="col-lg-8 col-md-8 text-end">
                                    <span class=" ">{{ $jobs->request->created_at->diffForHumans().' ('. $jobs->request->created_at->format('y/m/d').')' }}</span>
                                </div>                  
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Company Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p> {{ $jobs->request->companyName }}</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Company Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p> {{ $jobs->request->companyType }}</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Industry</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p> {{ $jobs->request->industry }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 text-muted " style="display: inline-block;">
                                    </div>
                                    <div class="col-lg-8 col-md-8 text-end">
                                        <a type="submit" class="btn btn-link me-1 mb-2" href="{{ route('consultant.viewDetails', $jobs->id) }}"><u>View Details</u></a>
                                        <button type="submit" class="btn btn-primary ms-1 mb-2" id="amend">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
</div>
@endsection