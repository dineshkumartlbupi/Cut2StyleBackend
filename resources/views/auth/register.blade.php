<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up - Cut2Style</title>
    <link href="{{asset('assets/css/login/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/login/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/login/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login/theme.min.css')}}">

    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/cropped-fevicon-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon/cropped-fevicon-270x270.png')}}" />
</head>
<body>
    <main>
        <!-- section -->
        <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <a href="/">
                            <span class="display-block py-5 pb-5"
                                style="display: block;">
                                <img src="{{asset('assets/images/logo.png')}}" width="196"
                                    alt="cut2style" class="d-inline-block align-text-top"
                                    style="padding: 4px 6px;border-radius: 5px;margin: 0 auto;">
                            </span>
                        </a>
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Sign Up</h1>
                        </div>
                        <!-- form -->
                        <form name="loginFrm" class="needs-validation" method="post" action="{{ route('registerUser') }}">
                            @csrf
                            <div class="row g-3">
                                <!-- col -->
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formSignupName" class="form-label visually-hidden">Name</label>
                                    <input type="text" name="name" class="form-control" id="formSignupName"
                                        placeholder="Name" required />
                                    <div class="invalid-feedback">Please enter name.</div>
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formSignupEmail" class="form-label visually-hidden">Email
                                        address</label>
                                    <input type="email" name="email" class="form-control" id="formSignupEmail"
                                        placeholder="Email" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formSignuprole" class="form-label visually-hidden">role
                                        address</label>
                                    <select type="email" name="role" class="form-control" id="formSignuprole"
                                        placeholder="role" required >
                                        <option value="" selected disabled>Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Vendor">Vendor</option>
                                        <option value="User">User</option>
                                    </select>
                                    <div class="invalid-feedback">Please select role.</div>
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <label for="formSignupPassword"
                                            class="form-label visually-hidden">Password</label>
                                        <div class="password-field position-relative">
                                            <input type="password" name="password" class="form-control fakePassword"
                                                id="formSignupPassword" placeholder="*****" required />
                                            <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                            <div class="invalid-feedback">Please enter password.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- btn -->
                                <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
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