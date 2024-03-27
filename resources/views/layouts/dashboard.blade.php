<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dispute | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> --}}
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/initiator-style.css') }}">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('partials.backend.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar consultant -->
        @if(session()->has('role') && session('role') == 3)
            @include('partials.backend.consultant-sidebar')

         <!-- Main Sidebar initiator -->
        @elseif(session()->has('role') && session('role') == 2)
            @include('partials.backend.initiator-sidebar')
        @endif


        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2023</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- Modal for re guidance-->
    <div class="modal fade" id="reqGuidance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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

    {{-- Modal for feedback--}}
    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Give your Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success mx-3" id="req-feedback-submit" style="display: none">
                </div> 
                <form method="post" id="addfeedback">
                    @csrf
                    <div class="modal-body">
                        <div class="col-lg-12 col-md-12">
                            <h6>Enter Your Valuable Feedback</h6>
                            <textarea type="text" rows="8" class="form-control" id="" name="feedback" placeholder="Write your feedback...."></textarea>
                            <span class="text-danger" id="feedback-message"></span>
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
        // feedback form
        $(document).ready(function(){
            $("#addfeedback").on('submit', function(e){
                e.preventDefault();

                // Clear previous error messages
                $('#query').text('');
                
                $.ajax({
                    type: "POST",
                    url: '{{ route("initiator.feedback") }}',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#req-feedback-submit').show();
                        $('#req-feedback-submit').text(response.success);
                        // Hide the success message after 3 seconds
                        setTimeout(function() {
                            $('#req-feedback-submit').hide();
                        }, 4000);
                        $('#addfeedback')[0].reset();
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        if(xhr.status === 422){
                            $('#feedback-message').text(xhr.responseJSON.errors.feedback);
                        } else {
                            // Handle other errors
                            console.log("An error occurred:", error);
                        }
                    }
                });
            });
        });
    </script>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
