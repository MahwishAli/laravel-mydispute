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
        <!-- Sidebar Menu for initiator-->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('initiator.home') }}" class="nav-link {{request()->routeIs('initiator.home')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.profile') }}" class="nav-link {{request()->routeIs('initiator.profile')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p> Profile Settings</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.freeServices') }}" class="nav-link {{request()->routeIs('initiator.freeServices')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p> Free Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.paidServices') }}" class="nav-link {{request()->routeIs('initiator.paidServices')  ? "active" : "" }}">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p> Paid Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.draftServices') }}" class="nav-link {{request()->routeIs('initiator.draftServices')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
                        <p> Draft Requested Services</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.requirements') }}" class="nav-link {{request()->routeIs('initiator.requirements')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-check"></i>
                        <p> Fulfilled Requirements</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.shortlistedCon') }}" class="nav-link {{request()->routeIs('initiator.shortlistedCon')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p> Shortlisted Consultants</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('initiator.consultantApp') }}" class="nav-link {{request()->routeIs('initiator.consultantApp')  ? "active" : "" }}">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p> Consultant Applications</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('initiator.reviews') }}" class="nav-link {{request()->routeIs('initiator.reviews')  ? "active" : "" }}">
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
    </div>
    <!-- /.sidebar -->
</aside>
