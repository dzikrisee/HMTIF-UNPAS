<div>
    <section class="py-16">
        <div class="relative w-full h-64 bg-gray-100">
            <img src="{{ asset('images/Kominfo1.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 flex flex-col justify-center items-start">
                <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Pengumuman HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <a href="{{ route('pengumuman') }}" class="hover:text-gray-800">Pengumuman HMTIF</a> 
                        <span class="mx-2">›</span> 
                        <span> Detail Pengumuman HMTIF</span>
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
                    <img src="{{ asset('images/header.png') }}" alt="Announcement Header" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end">
                        <div class="p-6 text-white">
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-600 rounded-full">
                                    Akademik
                                </span>
                                <span class="text-sm">{{ date('d F Y') }}</span>
                            </div>
                            <h1 class="text-3xl font-bold">Pendaftaran Wisuda Gelombang II 2024-2025</h1>
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
                                <p class="font-medium">Admin HMTIF</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Content -->
                    <div class="prose max-w-none">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Judul</h3>
                            <p class="text-gray-700">Pendaftaran Wisuda Gelombang II 2024-2025</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Pengumuman</h3>
                            <div class="text-gray-700 space-y-4">
                                <p>Salam Teknik</p>
                                <p>Kepada seluruh Mahasiswa Fakultas Teknik Unpas yg akan melakukan pendaftaran Wisuda Gelombang II TA 2024/2025 silahkan untuk mengunduh tata cara pendaftaran yang terlampir.</p>
                                <p>Pendaftaran dapat dilakukan dengan catatan :</p>
                                
                                <ol class="list-decimal pl-5 space-y-2">
                                    <li>Mahasiswa sudah dinyatakan <span class="font-semibold">LULUS</span></li>
                                    <li>Mahasiswa sudah memiliki No Ijazah Nasional (NINA)</li>
                                    <li>Mahasiswa sudah tidak memiliki kewajiban pembayaran. (DPP, TA, dll)</li>
                                    <li>Sudah melengkapi data diri</li>
                                    <li>Gabung ke WAG Wisuda FT, saat sudah masuk grup isikan format seperti berikut :
                                        <ul class="list-none pl-5 space-y-1 mt-2">
                                            <li>Nama : xxxx</li>
                                            <li>NRP : 20xxxx</li>
                                            <li>Prodi : Teknik xxxx</li>
                                        </ul>
                                    </li>
                                </ol>
                                
                                <p class="font-medium">*Serta lampirkan juga Screen Shoot laman wisuda yg belum terjadwalkan</p>
                                <p>Link WAG Wisuda FT Gelombang II</p>
                                <a href="https://chat.whatsapp.com/L603EistgGiFKnF2mPo2h" class="text-blue-600 hover:underline">https://chat.whatsapp.com/L603EistgGiFKnF2mPo2h</a>
                                
                                <p class="mt-6">Terimakasih</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">File</h3>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                Pendaftaran Wisuda.pdf
                            </a>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row justify-between">
                            <div class="mb-4 sm:mb-0">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    Kembali ke Pengumuman
                                </a>
                            </div>
                            <div class="flex space-x-2">
                                <button class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                    Bagikan
                                </button>
                                <button class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                                    </svg>
                                    Cetak
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Related Announcements -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengumuman Terkait</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full mb-3">
                                {{ ['Akademik', 'Kegiatan', 'Lomba'][$i-1] }}
                            </span>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Pengumuman: {{ ['Jadwal UTS', 'Seminar Nasional', 'Info Beasiswa'][$i-1] }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in aliquet urna. Pellentesque maximus lacinia.</p>
                            
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ date('d F Y', strtotime('-' . $i . ' days')) }}</span>
                            </div>
                            
                            <a href="#" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                                Baca selengkapnya
                                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
</div>
