<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In - Cut2Style</title>
    <link href="{{asset('assets/css/login/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/login/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/login/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login/theme.min.css')}}">
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/cropped-fevicon-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon/cropped-fevicon-270x270.png')}}" />
    <style>
        .sec2{
            border-left: 1px solid #f00;
        }
        @media only screen and (max-width: 600px) {
            .sec2{
                border-left: 0;
            }
        }
    </style>
</head>
<body class="bg-light">
    <main class="vh-100">

        @if(session('success'))
            <div class="position-relative d-flex justify-content-center">
                <div class="toast align-items-center text-bg-success border-0 show w-lg-75 mt-1 position-absolute" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>  
            </div>
        @endif

        @if($errors->any())
            <!-- <ul style="color:red;"> -->
                @foreach($errors->all() as $error)
                <div class="position-relative d-flex justify-content-center">
                    <div class="toast align-items-center text-bg-danger border-0 show w-lg-75 mt-1 position-absolute" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ $error }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>  
                </div>
                @endforeach
            <!-- </ul> -->
        @endif

        <!-- section -->
        <section class="py-lg-14 py-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row justify-content-evenly align-items-center bg-white pt-10 pb-12 shadow-lg w-lg-75 mx-auto">
                    <!-- col -->
                    <div class="col-12 text-center">
                        <div class="d-lg-flex">
                            <div class="w-lg-50 px-10 mb-5 mb-lg-0 d-lg-flex align-items-center justify-content-center">
                                <img src="{{asset('assets/images/login-bg.svg')}}" alt=""
                                    class="d-inline-block align-text-top w-100"
                                    style="padding: 4px 6px;border-radius: 5px;margin: 0 auto;">
                            </div>
                            <div class="w-lg-50 px-lg-10 sec2">
                                <a href="/">
                                    <span class="display-block pb-5" style="display: block;">
                                        <img src="{{asset('assets/images/logo.png')}}" width="196" alt=""
                                            class="d-inline-block align-text-top"
                                            style="padding: 4px 6px;border-radius: 5px;margin: 0 auto;">
                                    </span>
                                </a>
                                <div class="mb-lg-9 mb-5">
                                    <h1 class="mb-1 h2 fw-bold">Sign In</h1>
                                </div>
                                <form name="loginFrm" class="needs-validation" method="post" action="{{ route('login') }}">
                                    @csrf {{-- ✅ This line is required for CSRF protection --}}

                                    <div class="row g-3">
                                        <!-- Your email and password fields remain unchanged -->
                                        <div class="col-12">
                                            <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                                            <input type="email" name="email" class="form-control" id="formSignupEmail"
                                                placeholder="Email" required value="{{ old('email') }}"/>
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="password-field position-relative">
                                                <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                                <div class="password-field position-relative">
                                                    <input type="password" name="password" class="form-control fakePassword"
                                                        id="formSignupPassword" placeholder="*****" required />
                                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                                    <div class="invalid-feedback">Please enter password.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <p>Don't have an account? <a style="color: #e00505;" href="{{ route('register') }}">Register</a></p>
                                        </div>

                                        <div class="col-12 d-grid">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{asset('assets/js/libs/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/password.js')}}"></script>
    <script src="{{asset('assets/js/vendors/validation.js')}}"></script>
</body>
</html>
