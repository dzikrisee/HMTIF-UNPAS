@section('title', 'Pengumuman')

<div>
    <section class="py-16">
        <div class="relative w-full h-64 bg-gradient-to-r from-gray-50 to-gray-100">
            <!-- Elemen desain yang sesuai dengan tema website -->
            <div class="absolute inset-0 overflow-hidden">
                <!-- Pola geometris dengan warna tema hijau -->
                <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-[#248232]/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-gradient-to-t from-[#248232]/5 to-transparent"></div>
                
                
                <!-- Aksen sudut yang sesuai dengan tema -->
                <div class="absolute top-6 left-6 w-20 h-20 border-t-2 border-l-2 border-[#248232]/40"></div>
                <div class="absolute bottom-6 right-6 w-20 h-20 border-b-2 border-r-2 border-[#248232]/40"></div>
                
                <!-- Garis aksen horizontal -->
                <div class="absolute top-0 left-0 w-full h-1 bg-[#248232]/20"></div>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-[#248232]/20"></div>
                
                <!-- Elemen geometris tambahan -->
                <div class="absolute top-1/4 right-1/4 w-32 h-32 rounded-full bg-[#248232]/5"></div>
                <div class="absolute bottom-1/3 left-1/5 w-16 h-16 rounded-full bg-[#248232]/8"></div>
                
                <!-- Garis diagonal -->
                <div class="absolute top-0 right-1/3 w-64 h-64 border-r border-[#248232]/10 transform rotate-45"></div>
                <div class="absolute bottom-0 left-1/4 w-64 h-64 border-l border-[#248232]/10 transform -rotate-45"></div>
            </div>
            
            <div class="absolute inset-0 flex flex-col justify-center items-start">
                <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Pengumuman HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <span>Pengumuman HMTIF</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Announcement List Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter -->
            <div class="mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="w-full md:w-1/3">
                    <div class="relative">
                        <input type="text" placeholder="Cari pengumuman..." class="w-full px-4 py-2 border border-[#248232] rounded-lg focus:ring-2 focus:ring-[#248232] focus:border-[#248232]">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-[#248232]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <select id="category-filter" class="px-4 py-2 border border-[#248232] rounded-lg focus:ring-2 focus:ring-[#248232] focus:border-[#248232]">
                        <option value="">Semua Kategori</option>
                        <option value="akademik">Akademik</option>
                        <option value="kegiatan">Kegiatan</option>
                        <option value="lomba">Lomba</option>
                        <option value="beasiswa">Beasiswa</option>
                    </select>
                    
                    <select id="sort-filter" class="px-4 py-2 border border-[#248232] rounded-lg focus:ring-2 focus:ring-[#248232] focus:border-[#248232]">
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                        <option value="a-z">A-Z</option>
                        <option value="z-a">Z-A</option>
                    </select>
                </div>
            </div>

            <!-- Announcements List -->
            <div class="space-y-6 pengumuman-list">
                @forelse ($pengumumans as $pengumuman)
                <div class="pengumuman-item bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300" 
                    data-kategori="{{ strtolower($pengumuman->kategori) }}" 
                    data-tanggal="{{ $pengumuman->tanggal_pengumuman }}">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full mb-3">
                                    {{ $pengumuman->kategori }}
                                </span>
                                <h2 class="pengumuman-judul text-xl font-bold text-gray-800 mb-2">{{ $pengumuman->judul }}</h2>
                                
                                <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($pengumuman->isi_pengumuman), 150) }}</p>
                                
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>{{ date('d F Y', strtotime($pengumuman->tanggal_pengumuman)) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ route('detail-pengumuman', $pengumuman->id) }}" class="inline-flex items-center font-medium text-[#248232] hover:text-[#1b6828]">
                                Baca selengkapnya
                                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white border rounded-lg shadow-md overflow-hidden p-6 text-center">
                    <p class="text-gray-600">Belum ada pengumuman yang tersedia.</p>
                </div>
                @endforelse

                <!-- Pagination -->
                <div class="mt-10">
                    <nav class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            @if ($pengumumans->onFirstPage())
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100 cursor-not-allowed">
                                    Previous
                                </span>
                            @else
                                <button wire:click="previousPage" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Previous
                                </button>
                            @endif
                            
                            @if ($pengumumans->hasMorePages())
                                <button wire:click="nextPage" wire:loading.attr="disabled" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Next
                                </button>
                            @else
                                <span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100 cursor-not-allowed">
                                    Next
                                </span>
                            @endif
                        </div>
                        
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">{{ $pengumumans->firstItem() ?? 0 }}</span>
                                    to
                                    <span class="font-medium">{{ $pengumumans->lastItem() ?? 0 }}</span>
                                    of
                                    <span class="font-medium">{{ $pengumumans->total() }}</span>
                                    results
                                </p>
                            </div>
                            
                            @if ($pengumumans->hasPages())
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    {{-- Previous Page Link --}}
                                    @if ($pengumumans->onFirstPage())
                                        <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-300 cursor-not-allowed">
                                            <span class="sr-only">Previous</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    @else
                                        <button wire:click="previousPage" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Previous</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    @endif
                                    
                                    {{-- Pagination Elements --}}
                                    @foreach ($pengumumans->onEachSide(1)->links()->elements as $element)
                                        {{-- "Three Dots" Separator --}}
                                        @if (is_string($element))
                                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                                {{ $element }}
                                            </span>
                                        @endif
                                        
                                        {{-- Array of Links --}}
                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                @if ($page == $pengumumans->currentPage())
                                                    <span aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                        {{ $page }}
                                                    </span>
                                                @else
                                                    <button wire:click="gotoPage({{ $page }})" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                        {{ $page }}
                                                    </button>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    
                                    {{-- Next Page Link --}}
                                    @if ($pengumumans->hasMorePages())
                                        <button wire:click="nextPage" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Next</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    @else
                                        <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-300 cursor-not-allowed">
                                            <span class="sr-only">Next</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    @endif
                                </nav>
                            </div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Menunggu dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Elemen-elemen form
            const searchInput = document.querySelector('input[placeholder="Cari pengumuman..."]');
            const categoryFilter = document.querySelector('select option[value="akademik"]').parentElement;
            const sortFilter = document.querySelector('select option[value="terbaru"]').parentElement;
            
            // Elemen container pengumuman
            const pengumumanContainer = document.querySelector('.pengumuman-list');
            
            // Array untuk menyimpan data pengumuman asli
            let pengumumanItems = [];
            
            // Fungsi untuk inisialisasi data
            function initPengumumanData() {
                // Ambil semua item pengumuman dari container
                const items = pengumumanContainer.querySelectorAll('.pengumuman-item');
                
                // Simpan data asli untuk keperluan filter
                items.forEach(item => {
                    const judul = item.querySelector('.pengumuman-judul').textContent;
                    const kategori = item.getAttribute('data-kategori') || '';
                    const tanggal = item.getAttribute('data-tanggal') || '';
                    
                    pengumumanItems.push({
                        element: item,
                        judul: judul,
                        kategori: kategori,
                        tanggal: new Date(tanggal),
                        displayText: judul.toLowerCase()
                    });
                });
            }
            
            // Fungsi untuk melakukan pencarian
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const selectedCategory = categoryFilter.value;
                const sortOrder = sortFilter.value;
                
                // Filter berdasarkan pencarian dan kategori
                const filteredItems = pengumumanItems.filter(item => {
                    // Filter pencarian
                    const matchesSearch = item.displayText.includes(searchTerm);
                    
                    // Filter kategori
                    const matchesCategory = selectedCategory === '' || item.kategori === selectedCategory;
                    
                    return matchesSearch && matchesCategory;
                });
                
                // Urutkan hasil
                sortItems(filteredItems, sortOrder);
                
                // Tampilkan hasil
                displayResults(filteredItems);
            }
            
            // Fungsi untuk mengurutkan hasil
            function sortItems(items, sortOrder) {
                items.sort((a, b) => {
                    switch(sortOrder) {
                        case 'terbaru':
                            return b.tanggal - a.tanggal;
                        case 'terlama':
                            return a.tanggal - b.tanggal;
                        case 'a-z':
                            return a.judul.localeCompare(b.judul);
                        case 'z-a':
                            return b.judul.localeCompare(a.judul);
                        default:
                            return 0;
                    }
                });
            }
            
            // Fungsi untuk menampilkan hasil
            function displayResults(items) {
                // Sembunyikan semua item terlebih dahulu
                pengumumanItems.forEach(item => {
                    item.element.style.display = 'none';
                });
                
                // Tampilkan item yang sesuai filter
                items.forEach(item => {
                    item.element.style.display = '';
                });
                
                // Tampilkan pesan jika tidak ada hasil
                if (items.length === 0 && pengumumanItems.length > 0) {
                    // Cek apakah sudah ada pesan "tidak ditemukan"
                    let noResultMessage = pengumumanContainer.querySelector('.no-results-message');
                    
                    if (!noResultMessage) {
                        // Buat pesan jika belum ada
                        noResultMessage = document.createElement('div');
                        noResultMessage.className = 'no-results-message bg-white border rounded-lg shadow-md overflow-hidden p-6 text-center';
                        noResultMessage.textContent = 'Pengumuman tidak ditemukan';
                        pengumumanContainer.appendChild(noResultMessage);
                    } else {
                        // Tampilkan pesan yang sudah ada
                        noResultMessage.style.display = '';
                    }
        
                    // Sembunyikan paginasi jika tidak ada hasil
                    const pagination = document.querySelector('.mt-10');
                    if (pagination) {
                        pagination.style.display = 'none';
                    }
                } else {
                    // Sembunyikan pesan "tidak ditemukan" jika ada hasil
                    const noResultMessage = pengumumanContainer.querySelector('.no-results-message');
                    if (noResultMessage) {
                        noResultMessage.style.display = 'none';
                    }
        
                    // Tampilkan paginasi kembali jika ada hasil
                    const pagination = document.querySelector('.mt-10');
                    if (pagination && items.length > 0) {
                        pagination.style.display = '';
                    }
                }
            }
            
            // Tambahkan event listener untuk input dan select
            searchInput.addEventListener('input', performSearch);
            categoryFilter.addEventListener('change', performSearch);
            sortFilter.addEventListener('change', performSearch);
            
            // Inisialisasi data saat halaman dimuat
            if (pengumumanContainer) {
                initPengumumanData();
            }
        });
    </script>

</div>
