@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Dashboard</h1>
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