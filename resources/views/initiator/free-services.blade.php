@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1 class="my-3">Free Services <span class="text-muted">({{ $freeServices->count() }})</span></h1>
                <div class="col-md-12 ml-auto col-xl-12">
                    <!-- Nav tabs -->
                    @if($freeServices && $freeServices->count())
                        @foreach($freeServices as $key => $freeService)
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <label><u>Negotiation (1):</u></label>
                                    </div>
                                    <div class="col-lg-7 col-md-7 text-muted text-end" style="display: inline-block;">
                                        <span style="display: inline-block;">Submitted on (12/12/2020)</span>
                                        <span class="mx-2" style="display: inline-block;">|</span>
                                        <span class="view" style="display: inline-block;"><i class="fa fa-eye mr-1"></i> Viewed by 24 consultants</span>
                                        <span class="mx-2" style="display: inline-block;">|</span>
                                        <span class="draft" style="display: inline-block;">
                                            <a class="text-muted saveJobs" data-job-id=""><i class="fas fa-arrow-alt-circle-down mr-2"></i>Draft</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row"> 
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
                                            <label>Consultants applied for your requirements:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>45</p>
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
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 text-muted " style="display: inline-block;">
                                        <span class="view" style="display: inline-block;"><i class="fa fa-eye mr-1"></i> Contacts Details viewed by 50 consultants</span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 text-end">
                                        <button type="submit" class="btn btn-link me-1 mb-2" id="details"><u>View Requirement Details</u></button>
                                        <button type="submit" class="btn btn-primary ms-1 mb-2" id="amend">Amend Requirement Details</button>
                                        <button type="submit" class="btn btn-secondary ms-1 mb-2" id="close">Close the Requirement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="card d-flex align-items-center justify-content-center">
                            <label class=" my-3"> No free requested services available </label>
                        </div>
                    @endif
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection