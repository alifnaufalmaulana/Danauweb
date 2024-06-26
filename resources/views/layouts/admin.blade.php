<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div id="app">
        @include('admin.partials.sidebar') <!-- Include your sidebar here -->
        <div id="main-content">
            @yield('content')
        </div>
    </div>
    <!-- Include your JS files here -->
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
