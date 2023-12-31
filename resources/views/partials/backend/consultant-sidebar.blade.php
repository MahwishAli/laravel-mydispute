<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="my-3">
        <a href="#" class="brand-link pb-4">
            <img src="{{ asset('assets/image/FinalLogo.jpg') }}" alt=" Logo" class="brand-image img-circle elevation-3">
            @if(session()->has('loginId'))
                <span class="brand-text fs-6 font-weight-light ">{{ session('companyName') }}</span><br>
            @endif
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu for consultant-->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('consultant.home') }}" class="nav-link {{request()->routeIs('consultant.home')  ? "active" : "" }}">
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
                    <a href="{{ route('consultant.availjobs') }}" class="nav-link  {{request()->routeIs('consultant.availjobs')  ? "active" : "" }}">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p> Available Jobs</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.jobsApp') }}" class="nav-link {{request()->routeIs('consultant.jobsApp')  ? "active" : "" }}">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p> Jobs Applied </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.jobsShortlisted') }}" class="nav-link {{request()->routeIs('consultant.jobsShortlisted')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p> Shortlisted Jobs</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('consultant.messages') }}" class="nav-link {{request()->routeIs('consultant.messages')  ? "active" : "" }}">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p> Messages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('consultant.reviews') }}" class="nav-link {{request()->routeIs('consultant.reviews')  ? "active" : "" }}">
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
    </div>
</aside>
