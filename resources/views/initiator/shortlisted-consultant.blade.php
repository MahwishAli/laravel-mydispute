@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <h1>Shortlisted Consultant</h1>
                <div class="col-md-12 ml-auto col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-12 col-sm-12 col-lg-12 d-flex align-items-start border-bottom pb-4 mb-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Consultant Company</th>
                                                <th>Date</th>
                                                <th>Ratings</th>
                                                <th>Selected For</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>AAA Consultant Co.</td>
                                                <td>15/12/2024</td>
                                                <td>Good (12)</td>
                                                <td>Arbitration No.1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Samson Consulting</td>
                                                <td>16/02/2023</td>
                                                <td>Excellent (12)</td>
                                                <td>Expert Mediation No. 2</td>
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
</div>
@endsection