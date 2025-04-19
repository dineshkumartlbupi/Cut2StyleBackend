<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- FontAwesome & Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: var(--bs-body-bg);
            overflow-x: hidden;
            transition: background-color 0.3s ease;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            transition: all 0.3s ease;
            z-index: 1040;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #f1f1f1;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar.collapsed a span {
            display: none;
        }

        .topbar {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            height: 60px;
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1050;
        }

        .main-content {
            margin-left: 240px;
            padding: 80px 20px 20px;
            transition: all 0.3s ease;
        }

        .main-content.full {
            margin-left: 70px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                height: 100%;
                margin-left: -240px;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .topbar {
                padding: 0 10px;
            }
        }

        /* Dark mode styles */
        [data-theme="dark"] {
            --bs-body-bg: #212529;
            --bs-body-color: #f8f9fa;
        }

        [data-theme="dark"] body {
            background-color: var(--bs-body-bg);
            color: var(--bs-body-color);
        }

        [data-theme="dark"] .sidebar {
            background-color: #2b2f33;
            border-color: #444;
        }

        [data-theme="dark"] .sidebar a {
            color: #ccc;
        }

        [data-theme="dark"] .sidebar a:hover,
        [data-theme="dark"] .sidebar a.active {
            background-color: #3a3f44;
        }

        [data-theme="dark"] .topbar {
            background-color: #2b2f33;
            border-color: #444;
        }

        [data-theme="dark"] .dropdown-menu {
            background-color: #2b2f33;
            color: #fff;
        }

        [data-theme="dark"] .dropdown-item {
            color: #fff;
        }

        [data-theme="dark"] .dropdown-item:hover {
            background-color: #3a3f44;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-chart-line me-2"></i> <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="fas fa-users me-2"></i> <span>Users</span>
        </a>
        <a href="{{ route('admin.vendors.index') }}" class="{{ request()->routeIs('admin.vendors.*') ? 'active' : '' }}">
            <i class="fas fa-store me-2"></i> <span>Vendors</span>
        </a>
        <!-- after Products -->
<a href="{{ route('admin.product-categories.index') }}"
class="{{ request()->routeIs('admin.product-categories.*') ? 'active' : '' }}">
<i class="fas fa-list-alt me-2"></i>
<span>Product Categories</span>
</a>

        <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <i class="fas fa-box me-2"></i> <span>Products</span>
        </a>
        <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
            <i class="fas fa-concierge-bell me-2"></i> <span>Services</span>
        </a>
        <a href="{{ route('admin.service-categories.index') }}" class="{{ request()->routeIs('admin.service-categories.*') ? 'active' : '' }}">
            <i class="fas fa-tags me-2"></i> <span>Service Categories</span>
        </a>


        <a href="{{ route('admin.orders.index') }}" class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
            <i class="fas fa-shopping-cart me-2"></i> <span>Orders</span>
        </a>
        <a href="#">
            <i class="fas fa-cogs me-2"></i> <span>Settings</span>
        </a>
    </div>

    <!-- Topbar -->
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-outline-secondary d-md-none" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <button class="btn btn-outline-secondary d-none d-md-inline" id="collapseSidebarBtn">
                <i class="fas fa-angle-double-left"></i>
            </button>
            <h6 class="mb-0 d-none d-md-block">Admin Dashboard</h6>
        </div>
        <div class="d-flex align-items-center gap-3">
            <i class="fas fa-bell"></i>
            <i class="fas fa-envelope"></i>
            <button class="btn btn-sm btn-outline-secondary" id="darkModeToggle" title="Toggle dark mode">
                <i class="fas fa-moon"></i>
            </button>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle text-dark text-decoration-none" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle fa-lg me-1"></i> Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="GET" action="{{ route('admin.account.show') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-user-cog me-2"></i> Account
                            </button>
                        </form>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const collapseBtn = document.getElementById('collapseSidebarBtn');
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;

        // ---- Dark Mode: Load preference on load ----
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            html.setAttribute('data-theme', savedTheme);
        }

        // ---- Dark Mode Toggle ----
        darkModeToggle?.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });

        // ---- Sidebar Collapse Toggle ----
        collapseBtn?.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('full');
            updateTooltips();
        });

        // ---- Mobile Sidebar Toggle ----
        sidebarToggle?.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });

        // ---- Show tooltips when collapsed ----
        function updateTooltips() {
            const links = sidebar.querySelectorAll('a');
            const collapsed = sidebar.classList.contains('collapsed');

            links.forEach(link => {
                if (collapsed) {
                    const label = link.querySelector('span')?.textContent?.trim();
                    link.setAttribute('title', label || '');
                    link.setAttribute('data-bs-toggle', 'tooltip');
                    new bootstrap.Tooltip(link);
                } else {
                    link.removeAttribute('title');
                    link.removeAttribute('data-bs-toggle');
                    bootstrap.Tooltip.getInstance(link)?.dispose();
                }
            });
        }

        // Run tooltip logic on first load if sidebar is already collapsed
        updateTooltips();
    </script>



</body>
</html>
