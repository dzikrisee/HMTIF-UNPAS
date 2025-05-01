<nav class="bg-white border-b border-gray-100 fixed w-full top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Logo & Nama -->
            <div class="flex items-center gap-2 pr-3">
                <img src="{{ asset('images/logo-hmtif.png') }}" alt="Logo HMTIF" class="h-9 w-9 md:h-12 md:w-12">
                <img src="{{ asset('images/logo-harmoni.png') }}" alt="Logo Harmoni" class="h-9 w-9 md:h-12 md:w-12">
                <div class="flex flex-col leading-tight">
                    <span class="text-base md:text-xl font-bold text-[#248232]">HMTIF</span>
                    <span class="text-xs md:text-sm text-gray-600">Himpunan Mahasiswa Teknik Informatika</span>
                </div>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('index') }}" class="text-[#248232] font-bold hover:text-[#2D3319] transition">Beranda</a>
                <a href="/struktur" class="text-[#248232] font-bold hover:text-[#2D3319] transition">Struktur</a>
                <a href="/divisi" class="text-[#248232] font-bold hover:text-[#2D3319] transition">Divisi</a>

                <!-- Dropdown -->
                <div x-data="{ dropdown: false }" class="relative font-bold">
                    <button @click="dropdown = !dropdown" class="flex items-center gap-1 text-[#248232] hover:text-[#2D3319] transition">
                        Kegiatan
                        <svg :class="{'rotate-180': dropdown}" class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div x-show="dropdown" @click.away="dropdown = false" x-transition
                        class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-md z-10">
                        <a href="{{ route('proker') }}" class="block px-4 py-2 text-[#248232] hover:bg-gray-100">Program Kerja</a>
                        <a href="{{ route('agenda') }}" class="block px-4 py-2 text-[#248232] hover:bg-gray-100">Agenda</a>
                    </div>
                </div>

                <a href="{{ route('pengumuman') }}" class="text-[#248232] font-bold hover:text-[#2D3319] transition">Pengumuman</a>
            </div>

            <!-- Hamburger Menu -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden bg-white px-4 pt-4 pb-6 space-y-2 shadow-lg"
        x-cloak>

        <a href="{{ route('index') }}" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">Beranda</a>
        <a href="/struktur" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">Struktur</a>
        <a href="/divisi" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">Divisi</a>

        <!-- Kegiatan (Dropdown Only) -->
        <div x-data="{ show: false }">
        <button @click="show = !show" class="w-full flex justify-between items-center text-[#248232] font-semibold px-3 py-2 hover:bg-gray-50">
            Kegiatan
            <span x-text="show ? '−' : '+'" class="text-lg"></span>
        </button>
        <div x-show="show" x-transition class="pl-6 text-sm text-gray-700 space-y-1">
            <a href="{{ route('proker') }}" class="block py-1 font-bold hover:text-[#248232]">Program Kerja</a>
            <a href="{{ route('agenda') }}" class="block py-1 font-bold hover:text-[#248232]">Agenda</a>
        </div>
        </div>

        <a href="{{ route('pengumuman') }}" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">Pengumuman</a>
    </div>


</nav>
