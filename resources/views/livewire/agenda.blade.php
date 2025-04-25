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
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Kegiatan Agenda</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <span>Kegiatan Agenda</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - News Cards -->
            <div class="w-full lg:w-2/3">
                
                <!-- News Card 1 -->
                @forelse($agenda as $a)
                <div class="bg-white border border-gray-300 shadow overflow-hidden flex mb-6 transition-shadow duration-300 hover:shadow-lg" style="height: 220px;">
                    <!-- Left side image container -->
                    <div class="w-1/3 p-2" style="width: 33%; max-width: 220px;">
                        <div class="h-full w-full overflow-hidden">
                            <img src="{{ Storage::url($a->gambar_kegiatan) }}" alt="{{ $a->judul_kegiatan }}" class="h-full w-full object-cover">
                        </div>
                    </div>
                
                    <!-- Right side content - make this a flex column with space between -->
                    <div class="w-2/3 p-5 flex flex-col justify-between" style="width: 67%;">
                        <div>
                            <!-- Date and author info -->
                            <div class="flex items-center text-sm text-gray-600 mb-3">
                                <div class="flex items-center mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ $a->tanggal_kegiatan }}</span>
                                </div>
                                
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="text-[#248232] font-medium">{{ $a->divisi->nama_divisi }}</span>
                                </div>
                            </div>
                            
                            <!-- Title with text truncation -->
                            <h3 class="font-bold text-gray-900 text-xl mb-2 leading-tight line-clamp-3 max-h-24 overflow-hidden">
                                {{ $a->judul_kegiatan }}
                            </h3>
                        </div>
                        
                        <!-- Read More link - now will always be at the bottom -->
                        <div>
                            <a href="{{ route('detail-agenda', $a->id) }}" class="text-[#248232] text-sm font-medium flex items-center hover:underline">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
                @empty
                    <div class="col-span-2 text-center py-10">
                        <p class="text-gray-500">Belum ada data anggota BPH yang tersedia.</p>
                    </div>
                @endforelse
                
            </div>

            <!-- Right Column - Categories and Banner -->
            <div class="w-full lg:w-1/3">
                <!-- Search -->
                <div class="bg-gray-50 p-6  mb-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Cari Kegiatan</h2>
                    <div class="flex">
                        <input type="text" placeholder="Searching..." class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:ring-1 focus:ring-[#248232]">
                        <button class="bg-[#248232] text-white px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.querySelector('input[placeholder="Searching..."]');
        const searchButton = searchInput.nextElementSibling;

        searchButton.addEventListener('click', performSearch);

        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });

        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();
            const activityCards = document.querySelectorAll('.lg\\:w-2\\/3 > div');

            activityCards.forEach(card => {
                const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
                const date = card.querySelector('svg[stroke="currentColor"] + span')?.textContent.toLowerCase() || '';
                const division = card.querySelector('.text-\\[\\#248232\\].font-medium')?.textContent.toLowerCase() || '';

                if (title.includes(searchTerm) || date.includes(searchTerm) || division.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });

            const visibleCards = Array.from(activityCards).filter(card => {
                return window.getComputedStyle(card).display !== 'none';
            });

            const noResultsMessage = document.getElementById('no-results-message');
            const cardsContainer = document.querySelector('.lg\\:w-2\\/3');

            if (visibleCards.length === 0) {
                if (!noResultsMessage) {
                    const message = document.createElement('div');
                    message.id = 'no-results-message';
                    message.className = 'text-center py-6 text-gray-500';
                    message.textContent = 'Tidak ditemukan kegiatan yang sesuai dengan pencarian.';
                    cardsContainer.appendChild(message);
                } else {
                    noResultsMessage.style.display = '';
                }
            } else if (noResultsMessage) {
                noResultsMessage.style.display = 'none';
            }
        }
    });
</script>