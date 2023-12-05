<nav class="navbar d-none d-md-block ">
    <div class="container-fluid navigation" style="--bs-gutter-x: 5rem">
        <div class="logo-div col-lg-3 col-md-3 me-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/image/FinalLogo.jpg') }}" class="nav-logo" >
            </a>
        </div>

        <div class="menu-div col-lg-4 col-md-4 navbar-expand d-none d-lg-block d-md-block mx-auto ms-lg-5" id="">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('work') }}">How it works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('work') }}">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="btn-div col-lg-4 col-md-5 nav-btns ms-lg-auto text-end">
            <a href="{{ route('request.resolution') }}" type="button" class="btn"
                style="color: white; background-color: #006DA7">Request Dispute Resolution Consultancy</a>
            <a href="{{ route('login') }}" type="button" class="btn" style="color: white; background-color: #DAB57F; margin: 0px 5px;">Login</a>
            <a href="{{ route('member_signup') }}" class="btn" style="color: white; background-color: #C02026">Signup</a>
        </div>
    </div>
</nav>

<!-- Mobile -->
<nav class="navbar d-block d-md-none">
    <div class="container">
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar1" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="">
            <img src="{{ asset('assets/image/FinalLogo.jpg') }}" style="width: 200px;">
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar1"
            aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <div class="row d-inline-block">
                    <div class="col-sm-12 mb-3">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-sm-12 nav-btns">
                        <button type="button" class="btn col-12 mb-2" style="color: white; background-color: #006DA7">Request
                            Dispute Resolution Consultancy</button>
                        <button type="button" class="btn col-12 mb-2" style="color: white; background-color: #DAB57F">Login</button>
                        <button type="button" class="btn col-12"
                            style="color: white; background-color: #C02026">Signup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
