<!-- resources/views/auth/register.blade.php -->
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

            @if($errors->any())
                <ul style="color:red;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

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
                        <form name="loginFrm" class="needs-validation" method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="row g-3">
                                <!-- col -->
                                <div class="col-12">
                                    <!-- input -->
                                    <input type="text" name="name" class="form-control" id="formSignupName" value="{{ old('name') }}"
                                        placeholder="Name" required />
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <input type="email" name="email" class="form-control" id="formSignupEmail" value="{{ old('email') }}"
                                        placeholder="Email" required />
                                </div>
                                <div class="col-12">
                                    <select name="gender" class="form-select" required >
                                        <option value="" selected disabled>Select Gender</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select name="role" class="form-select" id="formSignuprole"
                                        placeholder="role" required >
                                        <option value="" selected disabled>Select Role</option>
                                        <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="Vendor" {{ old('role') == 'Vendor' ? 'selected' : '' }}>Vendor</option>
                                        <option value="Customer" {{ old('role') == 'Customer' ? 'selected' : '' }}>Customer</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" required />
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <textarea name="address" class="form-control" placeholder="Address">{{ old('address') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <div class="password-field position-relative">
                                            <input type="password" name="password" class="form-control fakePassword"
                                            id="formSignupPassword" placeholder="Password" required />
                                            <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <div class="password-field position-relative">
                                            <input type="password" name="password_confirmation" class="form-control fakePassword"
                                                placeholder="Confirm Password" required />
                                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Already have an account? <a style="color: #e00505;" href="{{ route('login') }}">Login</a></p>
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