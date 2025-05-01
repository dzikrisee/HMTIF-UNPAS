@section('title', 'Detail Pengumuman')

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
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Detail Pengumuman HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <a href="{{ route('pengumuman') }}" class="hover:text-gray-800">Pengumuman HMTIF</a> 
                        <span class="mx-2">›</span> 
                        <span>{{ $pengumuman->judul }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Announcement Detail Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border shadow-md overflow-hidden">
                <!-- Announcement Header -->
                <div class="relative">
                    <img src="{{ asset('images/header-info.png') }}" alt="Announcement Header" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-6 text-white">
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-600 rounded-full">
                                    {{ $pengumuman->kategori }}
                                </span>
                                <span class="text-sm">{{ date('d F Y', strtotime($pengumuman->tanggal_pengumuman)) }}</span>
                            </div>
                            <h1 class="text-3xl font-bold">{{ $pengumuman->judul }}</h1>
                        </div>
                    </div>
                </div>
                
                <!-- Announcement Content -->
                <div class="p-6 md:p-8">
                    <!-- Meta Information -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 pb-6 border-b border-gray-200">
                        <div class="flex items-center mb-3 sm:mb-0">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Diposting oleh</p>
                                <p class="font-medium">{{ $pengumuman->diposting_oleh }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Content -->
                    <div class="prose max-w-none">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Judul</h3>
                            <p class="text-gray-700">{{ $pengumuman->judul }}</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Pengumuman</h3>
                            <div class="text-gray-700 space-y-4">
                                {!! $pengumuman->isi_pengumuman !!}
                            </div>
                        </div>
                        
                        @if($pengumuman->file)
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">File</h3>
                            <a href="{{ asset('storage/' . $pengumuman->file) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" target="_blank">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                {{ basename($pengumuman->file) }}
                            </a>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row justify-between">
                            <div class="mb-4 sm:mb-0">
                                <a href="{{ route('pengumuman') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    Kembali ke Pengumuman
                                </a>
                            </div>
                            <div class="flex space-x-2">
                                <button id="btnBagikan" class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                    Bagikan
                                </button>
                                <button id="btnCetak" class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                                    </svg>
                                    Cetak
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Share Popup -->
                    <div id="sharePopup" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <div class="absolute inset-0 bg-black opacity-50" id="popupOverlay"></div>
                        <div class="bg-white rounded-lg p-6 shadow-xl z-10 w-80">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-medium">Bagikan Pengumuman</h3>
                                <button id="closeSharePopup" class="text-gray-500 hover:text-gray-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <button id="btnCopyLink" class="w-full flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                    Salin Link
                                </button>
                                <a id="btnWhatsApp" class="w-full flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-green-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                    </svg>
                                    Bagikan via WhatsApp
                                </a>
                                <a id="btnTelegram" class="w-full flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-blue-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                                    </svg>
                                    Bagikan via Telegram
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Notification for Copy Link -->
                    <div id="copyNotification" class="fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-md shadow-lg transform transition-transform duration-300 translate-y-20">
                        Link berhasil disalin!
                    </div>

                    <script>
                    // Variabel untuk menyimpan URL halaman
                    const currentPageUrl = window.location.href;

                    // Fungsi untuk tombol Cetak
                    document.getElementById('btnCetak').addEventListener('click', function() {
                        window.print();
                    });

                    // Fungsi untuk menampilkan popup share
                    document.getElementById('btnBagikan').addEventListener('click', function() {
                        document.getElementById('sharePopup').classList.remove('hidden');
                    });

                    // Fungsi untuk menutup popup share
                    document.getElementById('closeSharePopup').addEventListener('click', function() {
                        document.getElementById('sharePopup').classList.add('hidden');
                    });

                    document.getElementById('popupOverlay').addEventListener('click', function() {
                        document.getElementById('sharePopup').classList.add('hidden');
                    });

                    // Fungsi untuk menyalin link
                    document.getElementById('btnCopyLink').addEventListener('click', function() {
                        // Salin URL ke clipboard
                        navigator.clipboard.writeText(currentPageUrl).then(function() {
                            // Tampilkan notifikasi
                            const notification = document.getElementById('copyNotification');
                            notification.classList.remove('translate-y-20');
                            notification.classList.add('translate-y-0');
                            
                            // Sembunyikan notifikasi setelah 3 detik
                            setTimeout(function() {
                                notification.classList.remove('translate-y-0');
                                notification.classList.add('translate-y-20');
                            }, 3000);
                        });
                    });

                    // Fungsi untuk bagikan via WhatsApp
                    document.getElementById('btnWhatsApp').addEventListener('click', function(e) {
                        e.preventDefault();
                        const whatsappUrl = `https://wa.me/?text=${encodeURIComponent('Lihat pengumuman ini: ' + currentPageUrl)}`;
                        window.open(whatsappUrl, '_blank');
                    });

                    // Fungsi untuk bagikan via Telegram
                    document.getElementById('btnTelegram').addEventListener('click', function(e) {
                        e.preventDefault();
                        const telegramUrl = `https://t.me/share/url?url=${encodeURIComponent(currentPageUrl)}&text=${encodeURIComponent('Lihat pengumuman ini')}`;
                        window.open(telegramUrl, '_blank');
                    });
                    </script>
                </div>
            </div>
            
            <!-- Related Announcements -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengumuman Terkait</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($relatedPengumumans as $relatedPengumuman)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full mb-3">
                                {{ $relatedPengumuman->kategori }}
                            </span>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $relatedPengumuman->judul }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit(strip_tags($relatedPengumuman->isi_pengumuman), 100) }}</p>
                            
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ date('d F Y', strtotime($relatedPengumuman->tanggal_pengumuman)) }}</span>
                            </div>
                            
                            <a href="{{ route('detail-pengumuman', $relatedPengumuman->id) }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                                Baca selengkapnya
                                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center py-6">
                        <p class="text-gray-600">Tidak ada pengumuman terkait.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
