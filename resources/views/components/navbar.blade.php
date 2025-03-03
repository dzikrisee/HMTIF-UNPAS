{{-- resources/views/components/navbar.blade.php --}}
<nav class="bg-white border-b border-gray-100 fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo dan Nama Organisasi -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo-hmtif.png') }}" alt="Logo HMTIF" class="h-12 w-12">
                <img src="{{ asset('images/logo-harmoni.png') }}" alt="Logo HMTIF" class="h-12 w-12">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-[#248232]">HMTIF</span>
                    <span class="text-sm text-gray-600">Himpunan Mahasiswa Teknik Informatika</span>
                </div>
            </div>

            <!-- Menu Navigasi -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('index') }}" class="text-[#248232] hover:text-[#2D3319] transition-colors">
                    Beranda
                </a>
                <a href="" class="text-[#248232] hover:text-[#2D3319] transition-colors">
                    Struktur
                </a>
                <a href="" class="text-[#248232] hover:text-[#2D3319] transition-colors">
                    Divisi
                </a>
                <!-- Dropdown Kegiatan -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="text-[#248232] hover:text-[#2D3319] transition-colors flex items-center gap-1">
                        Kegiatan
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown -->
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-0 mt-2 w-52 bg-white border border-gray-300 shadow-lg rounded-lg z-10">
                        <a href="{{ route('kegiatan') }}" class="block px-4 py-3 text-[#248232] hover:bg-gray-100">
                            Program Kerja
                        </a>
                        <a href="{{ route('agenda') }}" class="block px-4 py-3 text-[#248232] hover:bg-gray-100">
                            Agenda
                        </a>
                    </div>
                </div>

            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-500 hover:text-gray-600" x-data="{}" @click="$dispatch('toggle-mobile-menu')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden" x-show="mobileMenuOpen" x-cloak>
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">BERANDA</a>
            <a href="" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">STRUKTUR</a>
            <a href="" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">DIVISI</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">DEPARTEMEN & BIRO</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">LAB & KOMUNITAS</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-[#248232] hover:bg-gray-50">BPM</a>
            <a href="#" class="block px-3 py-2 text-base font-medium bg-[#248232] text-white rounded-md">Produk kami</a>
        </div>
    </div>
</nav>