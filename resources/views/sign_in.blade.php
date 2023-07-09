@extends('master.master')

@section('dynblock')

<body>
    <!-- Topbar Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">User Sign In</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">User Sign In</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <p> </p>

@if(session('message'))

<div class="alert alert-success">

{{session('message')}}
</div>

@endif

    <!-- Contact Start -->
    <div class="container-fluid py-6 ">
        <div class="d-flex align-items-center justify-content-center" style="min-height: 30vh; margin-top: 50px;">
            <div class="form-container">
                <h3 class="title">User Sign in</h3>
                <form class="form-horizontal" method="Post" action="/signin">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="input" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="password">
                    </div>
                   
                    
                    <input type="submit" class="btn btn-default" value="submit" >
                    
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
@stop