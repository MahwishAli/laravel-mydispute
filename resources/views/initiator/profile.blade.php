@extends('layouts.dashboard')
@section('content')
 
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
        <section class="content profile">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <h1>Profile Settings</h1>
                </div>
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12 ml-auto col-xl-12">
                        <!-- Nav tabs -->
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#details" role="tab">
                                        <i class="now-ui-icons objects_umbrella-13"></i> Company Details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#privacy" role="tab">
                                        <i class="now-ui-icons shopping_cart-simple"></i> Privacy
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#account" role="tab">
                                        <i class="now-ui-icons shopping_shop"></i> Delete Account 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="container tab-pane active mx-2" id="details" role="tabpanel">
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Company Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->companyName }}</p>
                                            </div>
                                        </div>                                        
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Company Type</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->companyType }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->address }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->phone }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Industry</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ @$initiator->industry }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3">
                                                <label>Region</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>Asia</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3 text-center">
                                            <button type="submit" class="btn btn-primary me-2" id="edit">Edit Company Details</button>
                                            <button type="submit" class="btn btn-primary ms-2" id="change-pass">Change Password</button>
                                        </div>
                                    </div>
                                    <div class="container tab-pane" id="privacy" role="tabpanel">
                                        <div class="row">
                                            <form action="#" method="post">
                                                <div class="col-lg-12 col-md-12">
                                                    <p class="form-label">Select which contact details to show</p>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="contactDetails" value="Show All Details">
                                                        <label class="form-check-label" for="allDetails">Show All Details</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="contactDetails" value="Show Email Only">
                                                        <label class="form-check-label" for="emailOnly">Show Email Only</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="contactDetails" value="Show Mobile Only">
                                                        <label class="form-check-label" for="mobileOnly">Show Mobile Only</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="contactDetails" value="Show None">
                                                        <label class="form-check-label" for="showNone">Show None</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    <p class="form-label">Unsubscribe</p>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="unsubscribe" value="Unsubscribe me from all Promotional Mails">
                                                        <label class="form-check-label" for="lumpSum">Unsubscribe me from all Promotional Mails
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    <p class="form-label">Set Busy Status</p>
                                                    <p class="ml-2">If you are currently not available to take further consultancy work, please update your status below:</p>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="busyStatus" value="Available for Consultancy Work">
                                                        <label class="form-check-label" for="busyStatus">Available for Consultancy Work
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="busyStatus" value="Not Available for Consultancy Work">
                                                        <label class="form-check-label" for="busyStatus">Not Available for Consultancy Work
                                                        </label>
                                                    </div>
                                                    <div class="mt-1 mx-3 text-danger" id="notAvailableMessage" style="display: none;">
                                                        <small>If you select Not Available then you will not be contacted by clients needing dispute resolution services also that you will not be put in the list of prospective consultants requested by clients indirectly to MyDRP.</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 my-3 text-center">
                                                    <button type="submit" class="btn btn-primary" id="update">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="container tab-pane" id="account" role="tabpanel">
                                        <form action="#" method="post">
                                            <div class="col-lg-12 col-md-12">
                                                <p>Please provide reason for deleting your account:</p>
                                                <textarea type="text" rows="8" class="form-control" id="reason" name="reason" placeholder=""></textarea>
                                            </div>
                                            <div class="col-md-12 my-3 text-center">
                                                <button type="submit" class="btn btn-primary" >Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="change-password" style="display: none">
                    <div class="col-md-12 ml-auto col-xl-12">
                        <!-- Nav tabs -->
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="col-10">
                                    <h3 class="box-title ml-auto">Change Password</h3>
                                </div>
                                <div class="col-2 text-right">
                                    <button type="button" class="btn-close mr-auto" id="cancel"></button>
                                </div>
                            </div>
                            <div class="card-body">              
                                <!-- form start -->
                                <form role="form" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  placeholder="Enter Password" name="password" >
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control"  placeholder="Renter Password" name="password_confirmation">
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        {{-- <button type="submit" href="#" class="btn btn-primary ms-2" id="cancel">Cancel</button> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
</div>
<style>
.profile .form-check-input[type=radio] {
    border-color: grey;
}
.profile .form-check.mb-2 {
    margin-left: 15px;
}

</style>
<script>
    $(document).ready(function() {
        // To show change password section
        $('#change-pass').on('click', function(){
            $('#change-password').show();
        });

        // To show change password section
        $('#cancel').on('click', function(){
            $('#change-password').hide();
        });

        // to show text-danger message 
        $('input[name="busyStatus"]').on('change', function() {
            if ($(this).val() === 'Not Available for Consultancy Work') {
                $('#notAvailableMessage').show();
            } else {
                $('#notAvailableMessage').hide();
            }
        });
    });
</script>
@endsection