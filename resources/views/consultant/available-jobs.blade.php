@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <style>
        .saveJobs:hover {
            cursor: pointer;
        }                                                                                                   
    </style>
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <h1>Available Jobs</h1>
                    @foreach($data as $key => $jobs)
                    <div class="card">
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
<script>
     // save jobs
$(document).ready(function(){
    $(".saveJobs").on('click', function(e){
        e.preventDefault();

        var jobId = $(this).data('job-id');

        $.ajax({
            type: "GET",
            url: '{{ route("consultant.saveJobs", "") }}/' + jobId,
            success: function(response) {
                $('#shortlisted-message').show();
                $('#shortlisted-message').text(response.success);
                // Hide the success message after 3 seconds
                setTimeout(function() {
                    $('#shortlisted-message').hide();
                }, 4000);
                $('#profileDelete')[0].reset();
            }
        });
    });
});

</script>
@endsection