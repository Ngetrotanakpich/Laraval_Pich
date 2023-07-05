<!DOCTYPE html>
<html>

<head>
    @include("master.header")
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">Tour With</span>Me</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/index" class="nav-item nav-link">Home</a>
                        <a href="/booking" class="nav-item nav-link">Booking</a>
                        
                        <a href="/package" class="nav-item nav-link">Tour Packages</a>
                       
                        <a href="/sign_in" class="nav-item nav-link">Sign In</a>
                        <a href="/signup" class="nav-item nav-link">Sign Up</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->

    @yield('dynblock')

    <!-- end info_section -->
    @include("master.footer")
</body>

</html>