@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <h1 class="my-3">Available Jobs <span class="text-muted">({{ $data->count() }})</span></h1>
                    @if($data && $data->count())
                        @foreach($data as $key => $jobs)
                        <div class="card">
                            <div class="alert alert-success message-{{$jobs->id}} mt-3" ></div>
                            <div class="alert alert-danger error-{{$jobs->id}} mt-3" ></div>
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <h5><label>Need a consultant for {{ $jobs->disputeType }}</label></h5>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-end">
                                        <a class="text-muted saveJobs" data-job-id="{{ $jobs->id }}"><i class="far fa-bookmark mr-2"></i>Shortlist</a>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-md-4 text-muted " style="display: inline-block;">
                                        <span class="view" style="display: inline-block;"><i class="fa fa-map-marker-alt mr-2" aria-hidden="true"></i>{{ $jobs->countryName }}</span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 text-end">
                                        <span class=" ">{{ $jobs->created_at->diffForHumans().' ('. $jobs->created_at->format('y/m/d').')' }}</span>
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
                                            <p> {{ $jobs->companyName }}</p>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <label>Company Type</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p> {{ $jobs->companyType }}</p>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <label>Industry</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p> {{ $jobs->industry }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 text-muted " style="display: inline-block;">
                                        </div>
                                        <div class="col-lg-8 col-md-8 text-end">
                                            <a type="submit" class="btn btn-link me-1 mb-2" href="{{ route('consultant.viewDetails', $jobs->id) }}"><u>View Details</u></a>
                                            <a type="submit" class="btn btn-primary ms-1 mb-2 applyJobs" data-jobs-id="{{ $jobs->id }}" >Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="card d-flex align-items-center justify-content-center">
                        <label class=" my-3"> No Jobss Found </label>
                    </div>
                    @endif
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
</div>
<script>
$(document).ready(function(){

    // save jobs
    $(".saveJobs").on('click', function(e){
        e.preventDefault();

        var jobId = $(this).data('job-id');
        var $saveLink = $(this);

        $.ajax({
            type: "GET",
            url: '{{ route("consultant.saveJobs", "") }}/' + jobId,
            success: function(response) {
                if(response.success){
                    $('.message-'+ jobId).show();
                    $('.message-' + jobId).text(response.success);
                    // Hide the success message after 3 seconds
                    setTimeout(function() {
                        $('.message-' + jobId).hide();
                    }, 3000);
                }
                else {
                    $('.error-' + jobId).show();
                    $('.error-' + jobId).text(response.error);
                    setTimeout(function() {
                        $('.error-' + jobId).hide();
                    }, 3000);
                }                
            }
        });
    });

    // Apply jobs
    $(".applyJobs").on('click', function(e){
        e.preventDefault();
        var Id = $(this).data('jobs-id');

        $.ajax({
            type: "GET",
            url: '{{ route("consultant.applyJobs", "") }}/' + Id,
            success: function(response) {
                if(response.success){
                    $('.message-' + Id).show();
                    $('.message-' + Id).text(response.success);

                    setTimeout(function() {
                        $('.message-' + Id).hide();
                    }, 3000);
                }
                else {
                    $('.error-' + Id).show();
                    $('.error-' + Id).text(response.error);
                    setTimeout(function() {
                        $('.error-' + Id).hide();
                    }, 3000);
                }
            }
        });
    });

    // delete jobs
    $(".deleteJobs").on('click', function(e){
        e.preventDefault();
        var Id = $(this).data('jobs-id');

        $.ajax({
            type: "GET",
            url: '{{ route("consultant.deleteJob", "") }}/' + Id,
            success: function(response) {
                if(response.success){
                    $('.message-' + Id).show();
                    $('.message-' + Id).text(response.success);

                    setTimeout(function() {
                        $('.message-' + Id).hide();
                    }, 3000);
                }
                else {
                    $('.error-' + Id).show();
                    $('.error-' + Id).text(response.error);
                    setTimeout(function() {
                        $('.error-' + Id).hide();
                    }, 3000);
                }
            }
        });
    });
});

</script>
@endsection