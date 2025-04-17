<nav class="navbar navbar-expand-lg navbar-light  shadow-sm py-3">

    <div class="container-fluid">
        <!-- Logo Above the Navbar -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/logo.png') }}" alt="Cut2Style Logo" class="img-fluid" style="max-height: 50px;">
        </div>

        <!-- Brand Name -->
        <a class="navbar-brand fw-bold fs-4 text-warning text-center" href="{{ route('admin.dashboard') }}">
            {{-- Cut2Style --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->routeIs('admin.dashboard') ? 'active fw-semibold' : '' }}"
                       href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>

                    <a class="nav-link text-danger"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
