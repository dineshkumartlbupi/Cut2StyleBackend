<!DOCTYPE html>
<html>
<head>
    <title>Multi-Vendor E-commerce</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
