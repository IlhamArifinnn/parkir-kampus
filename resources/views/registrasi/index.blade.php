<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/dashboard/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Register Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ route('index') }}" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="floatingName" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="floatingName">Your Name</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="floatingEmail" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label for="floatingEmail">Email address</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="floatingPassword" placeholder="Password" name="password" required autocomplete="new-password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPasswordConfirm"
                                placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            <label for="floatingPasswordConfirm">Confirm Password</label>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    </form>

                    <p class="text-center mb-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/dashboard/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
</body>

</html>
