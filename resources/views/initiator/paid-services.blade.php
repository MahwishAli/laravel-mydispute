@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Paid Services</h1>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ask a Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success mx-3" id="req-guidance-submit" style="display: none">
            </div> 
            <form method="post" id="add">
                @csrf
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12">
                        <h6>Ask a question & get help from our Support Team</h6>
                        <textarea type="text" rows="8" class="form-control" id="query" name="query" placeholder="Write a question...."></textarea>
                        <span class="text-danger" id="query-message"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
// request guidance form
    $(document).ready(function(){
        $("#add").on('submit', function(e){
            e.preventDefault();

            // Clear previous error messages
            $('#query').text('');
            
            $.ajax({
                type: "POST",
                url: '{{ route("initiator.guidance") }}',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#req-guidance-submit').show();
                    $('#req-guidance-submit').text(response.success);
                    // Hide the success message after 3 seconds
                    setTimeout(function() {
                        $('#req-guidance-submit').hide();
                    }, 4000);
                    $('#add')[0].reset();
                    location.reload();
                },
                error: function(xhr, status, error) {
                    if(xhr.status === 422){
                        $('#query-message').text(xhr.responseJSON.errors.query);
                    } else {
                        // Handle other errors
                        console.log("An error occurred:", error);
                    }
                }
            });
        });
    });
</script>
@endsection