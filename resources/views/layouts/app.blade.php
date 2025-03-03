<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTIF UNPAS - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/logo-hmtif.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="min-h-screen font-sora">
    
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


    <!-- Back to top button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="scrollToTop()" class="flex items-center justify-center w-12 h-12 bg-[#1A472A] text-white rounded-full shadow-lg hover:bg-[#165223] transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>


    <script src="https://kit.fontawesome.com/06244ba418.js" crossorigin="anonymous"></script>
</body>
</html>