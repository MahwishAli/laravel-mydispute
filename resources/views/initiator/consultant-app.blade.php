@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content application">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Consultant Application</h1>
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
                                        <p>Paid and Fulfilled </p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Expert Determination Request No.:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>1</p>
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
                                        <button type="submit" class="btn btn-primary ms-2" id="guidance">Request further guidance</button>
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

                <div class="col-md-12 ml-auto col-xl-12">
                    <!-- Nav tabs -->
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row"> 
                                    <p><u>Arbitration (1): </u></p>
                                    <div class="col-md-4">
                                        <label>Request Type:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Free of Charge and Fulfilled</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Arbitration Request No.: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Your Requirements was viewed by: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>46 consultants</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <label>Your Contacts Details were viewed by: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>50 consultants</p>
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
                                        <label>Request Submitted on:  </label>
                                    </div>
                                    <div class="col-md-8">
                                        <p>24/12/2020</p>
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
                                    <div class="col-md-12 my-3 text-center">
                                        <button type="submit" class="btn btn-primary me-2" id="details">View Requirement Details</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="feedback">Give Feedback to MyDRP</button>
                                        <button type="submit" class="btn btn-primary ms-2" id="review">Write a review for the consultant(s)</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ml-auto col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-12 col-sm-12 col-lg-12 d-flex align-items-start border-bottom pb-4 mb-4">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Consultant Company</th>
                                                <th>Date</th>
                                                <th>Ratings</th>
                                                <th>View Applications</th>
                                                <th>Shortlist</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>WXY Consultant Co.</td>
                                                <td>12/12/2023</td>
                                                <td>Excellent (5)</td>
                                                <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                                <td><input class="form-check-input text-center" type="checkbox" name="option1" value="something"></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>AAA Consultant Co.</td>
                                                <td>12/12/2023</td>
                                                <td>Good (12)</td>
                                                <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                                <td><input class="form-check-input" type="checkbox" name="option1" value="something"></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Seven Consulting</td>
                                                <td>12/12/2023</td>
                                                <td>Extraordinary (2)</td>
                                                <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                                <td><input class="form-check-input" type="checkbox" name="option1" value="something"></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <style>
        .application .form-check-input[type=checkbox] {
            border-color: grey;
        }
    </style>
</div>
@endsection