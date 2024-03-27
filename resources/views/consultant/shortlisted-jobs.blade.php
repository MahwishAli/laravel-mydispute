@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1 class="my-3">Shortlisted <span class="text-muted">({{ $shortlisted->count() }})</span></h1>
                @if($shortlisted && $shortlisted->count())
                    @foreach($shortlisted as $key => $jobs)
                    <div class="card">
                        <div class="alert alert-success message-{{$jobs->id}} mt-3" ></div>
                        <div class="alert alert-danger error-{{$jobs->id}} mt-3" ></div>
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
                                        <a type="submit" class="btn btn-link me-1 mb-2 deleteJobs" data-delete-id="{{ $jobs->id }}"><u>Remove</u></a>
                                        <a type="submit" class="btn btn-link me-1 mb-2" href="{{ route('consultant.viewDetails', $jobs->id) }}"><u>View Details</u></a>
                                        <button type="submit" class="btn btn-primary ms-1 mb-2 applyJobs" data-jobs-id="{{ $jobs->id }}">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="card d-flex align-items-center justify-content-center">
                    <label class=" my-3"> No items Found </label>
                </div>
                @endif
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>

$(document).ready(function(){

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
        var deleteId = $(this).data('delete-id');

        $.ajax({
            type: "GET",
            url: '{{ route("consultant.deleteJob", "") }}/' + deleteId,
            success: function(response) {
                $('.message-' + deleteId).show();
                $('.message-' + deleteId).text(response.success);

                setTimeout(function() {
                    $('.message-' + deleteId).hide();
                    location.reload();
                }, 3000);
            }
        });
    });
});
</script>
@endsection