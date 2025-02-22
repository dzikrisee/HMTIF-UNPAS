<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTIF UNPAS - @yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navbar -->
    @include('components.navbar')
    
    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>
    
    <!-- Footer -->
    @include('components.footer')
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>