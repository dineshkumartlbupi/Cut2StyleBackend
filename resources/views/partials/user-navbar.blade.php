<nav class="navbar navbar-expand-lg navbar-light shadow-sm py-3">
    <div class="container-fluid">
        <!-- Logo Above the Navbar -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="img-fluid" style="max-height: 50px;">
        </div>

        <!-- Brand Name -->
        <a class="navbar-brand fw-bold fs-4 text-warning text-center" href="{{ route('user.dashboard') }}">
            User Dashboard
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->routeIs('user.dashboard') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.dashboard') }}">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->routeIs('user.cart') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.cart') }}">
                        <i class="fas fa-shopping-cart me-1"></i> Cart
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->routeIs('user.orders') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.orders') }}">
                        <i class="fas fa-box me-1"></i> Orders
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->routeIs('user.account') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.account') }}">
                        <i class="fas fa-user me-1"></i> Account
                    </a>
                </li> --}}

                <!-- Logout Button -->
                <li class="nav-item">
                    <a class="nav-link text-danger"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
