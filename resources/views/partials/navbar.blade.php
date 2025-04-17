<!-- resources/views/partials/navbar.blade.php -->
<nav style="background-color: #f8f9fa; padding: 1rem;">
    <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
