<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My App')</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
        @include('partials.nav') <!-- Navbar partial -->

        <main class="flex-1 h-full">
            @yield('content')
        </main>

        @include('partials.footer') <!-- Footer partial -->
</body>
</html>
