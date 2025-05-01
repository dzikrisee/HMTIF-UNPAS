<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTIF UNPAS | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/logo-hmtif.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body> <!-- Added padding-top to make space for the alert -->
    
    <!-- Beta Alert Bubble (Bottom Left) -->
    <div class="fixed bottom-4 left-4 max-w-xs bg-yellow-50 text-yellow-800 border border-yellow-200 z-50 shadow-md rounded-md px-4 py-3 text-sm flex items-start space-x-2" x-data="{ showAlert: true }" x-show="showAlert" x-transition>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
        </svg>
        <div class="flex-1">
            <p class="font-medium">
                <span class="bg-yellow-200 text-yellow-800 px-1.5 py-0.5 rounded text-xs font-bold mr-1">BETA</span>
                Website ini masih dalam tahap pengembangan.
            </p>
        </div>
        {{-- <button @click="showAlert = false" class="text-yellow-600 hover:text-yellow-800 focus:outline-none mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button> --}}
    </div>

    
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
    <script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>