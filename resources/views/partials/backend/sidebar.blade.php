<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="my-3">
        <a href="#" class="brand-link pb-4">
            <img src="{{ asset('assets/image/FinalLogo.jpg') }}" alt=" Logo" class="brand-image img-circle elevation-3">
            @if(@$initiator->role->name == "initiator")
                <span class="brand-text font-weight-light fs-6">Dispute Resolution Initiator</span><br>
            @else
            <span class="brand-text font-weight-light ">Consultant</span><br>
            @endif
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="text-transform: capitalize;">{{ @$initiator->role->name }}</a>
            </div>
        </div> --}}
    @if(@$initiator->role->name == "initiator")
        <!-- Sidebar Menu for initiator-->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('initiator.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.profile') }}" class="nav-link ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p> Profile Settings</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.freeServices') }}" class="nav-link ">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p> Free Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.paidServices') }}" class="nav-link ">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p> Paid Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.draftServices') }}" class="nav-link ">
                        <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
                        <p> Draft Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.requirements') }}" class="nav-link ">
                        <i class="nav-icon fas fa-check"></i>
                        <p> Fulfilled Requirements</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.shortlistedCon') }}" class="nav-link ">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p> Shortlisted Consultants</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.consultantApp') }}" class="nav-link ">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p> Consultant Applications</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('initiator.reviews') }}" class="nav-link ">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p> Consultant Reviews</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon 	fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    @elseif(@$consultant->role->name == "consultant")
        <!-- Sidebar Menu for consultant-->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('consultant.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.profile') }}" class="nav-link ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p> Profile Settings</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.jobs') }}" class="nav-link ">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p> Available Jobs</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.jobsApp') }}" class="nav-link ">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p> Jobs Applied </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.jobsShortlisted') }}" class="nav-link ">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p> Shortlisted Jobs</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.messages') }}" class="nav-link ">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p> Messages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('consultant.reviews') }}" class="nav-link ">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p> Client Reviews</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon 	fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    @endif
    </div>
    <!-- /.sidebar -->
</aside>
