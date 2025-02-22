<div>

        <section class="relative h-screen">
            <!-- Hero Background -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/Kominfo1.jpg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            
            <!-- Content -->
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4">
                <div class="bg-red-600 text-white px-4 py-1 rounded-full text-sm mb-4">
                    Program Studi S1
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-center mb-2">
                    HMTIF - Universitas Pasundan
                </h1>
                <p class="text-xl text-center text-gray-200">
                    Excellent in Computing Systems
                </p>
            </div>
        </section>



        <!-- About Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Logo Container -->
                    <div class="relative flex justify-center items-center">
                        <!-- Logo -->
                        <div class="relative w-3/4 mx-auto">
                            <img src="{{ asset('images/logo-hmtif.png') }}" alt="Logo HMTIF" 
                                class="w-full h-auto object-contain">
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="space-y-6">
                        <!-- Section Header -->
                        <div class="mb-6">
                            <h2 class="text-[#248232] font-medium mb-2">HMTIF</h2>
                            <h3 class="text-3xl font-bold text-gray-900">Tentang Kami</h3>
                        </div>
                        
                        <p class="text-gray-600 leading-relaxed">
                            Lembaga Eksekutif KMPS TIF FT-UNPAS berada ditingkat Program Studi bernama
                            Himpunan Mahasiswa Teknik Informatika (HMTIF - UNPAS).
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            Dengan adanya keselarasan ini, diharapkan terjalin ikatan yang erat bagaikan keluarga, dimana setiap anggota saling bahu-membahu untuk mencapai visi bersama. Visi tersebut adalah menjadi Lembaga yang berkualitas dan memberikan kontribusi nyata bagi mahasiswa khususnya, serta masyarakat pada umumnya. Kabinet “Harmoni” akan mengedepankan kolaborasi dan sinergitas agar setiap program dan kegiatan yang dijalankan dapat memberikan manfaat maksimal bagi mahasiswa.
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6">
                            <a href="#" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                                <span class="font-medium">Berita Terbaru</span>
                            </a>
                            
                            <a href="#" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="font-medium">Kegiatan</span>
                            </a>

                            <a href="#" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                                <span class="font-medium">Divisi</span>
                            </a>
                            
                            <a href="#" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <span class="font-medium">Struktur</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About HARMONI Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="space-y-6">
                        <!-- Section Header -->
                        <div class="mb-6">
                            <h2 class="text-[#248232] font-medium mb-2">HARMONI</h2>
                            <h3 class="text-3xl font-bold text-gray-900">Tentang Kabinet Harmoni</h3>
                        </div>
                        
                        <p class="text-gray-600 leading-relaxed">
                            Kabinet “Harmoni” dalam kepengurusan HMTIF-UNPAS Periode 2024/2025 melambangkan pernyataan rasa, aksi, gagasan, minat, keselarasan, dan keserasian di antara para pengurus. Seperti dalam seni musik, harmoni menggambarkan keselarasan paduan nada yang dimainkan bersama untuk menghasilkan bunyi yang indah. Begitu pula, 
                            dalam kepengurusan ini, diharapkan tercipta keselarasan di antara berbagai karakter dan pemikiran pengurus serta elemen KMPS TIF FT-UNPAS.
                        </p>
                    </div>

                    <!-- Logo Container -->
                    <div class="relative flex justify-center items-center">
                        <!-- Logo -->
                        <div class="relative w-3/4 mx-auto">
                            <img src="{{ asset('images/logo-harmoni.png') }}" alt="Logo HMTIF" 
                                class="w-full h-auto object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Sambutan Ketua Umum HMTIF Periode 2024-2025 -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="border border-[#248232] rounded-lg p-6 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <!-- Foto Ketua -->
                        <div class="flex justify-center">
                            <img src="{{ asset('images/BPH-Kahim.png') }}" alt="Ketua Program Studi" 
                                class="w-3/4 h-auto object-cover rounded-lg shadow-lg">
                        </div>

                        <!-- Teks Sambutan -->
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-gray-900">Sambutan Ketua <br> Umum HMTIF</h2>
                            <p class="text-gray-700">Assalamu’alaikum Warahmatullahi Wabarakatuh</p>
                            <p class="text-gray-700">Salam hormat, <br>
                                Selamat Datang di Program Studi S1 Sistem Informasi, Universitas Telkom Surabaya.
                            </p>
                            <p class="text-gray-700">
                                Di era digital seperti saat ini hampir semua perusahaan membutuhkan sistem informasi, 
                                sehingga perusahaan atau organisasi sangat membutuhkan sumber daya manusia yang ahli di bidang sistem informasi. 
                                Sistem Informasi mengintegrasikan teknologi, manusia, proses bisnis dan tata kelola perencanaan 
                                untuk memberikan solusi IT pada perusahaan.
                            </p>
                            <p class="text-gray-700 font-semibold">
                                Nama KAHIM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Section Kegiatan --}}
        <section class="py-12 px-4 md:px-8 max-w-7xl mx-auto">
            <!-- Heading -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Berita Terbaru</h2>
                    <p class="text-gray-600 text-sm mt-4">Temukan berita terbaru seputar pengajaran, penelitian, pengabdian masyarakat dan sistem informasi</p>
                </div>
                <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium flex items-center gap-1">
                    Lihat Selengkapnya 
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        
            <hr class="border-gray-300 mb-8">
        
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Featured News -->
                <div class="lg:col-span-7">
                    <div class="relative overflow-hidden rounded-sm shadow-md">
                        <img 
                            src="{{ asset('images/Kominfo1.jpg') }}" 
                            alt="Featured News" 
                            class="h-[300px] w-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <div class="absolute bottom-0 p-4 text-white">
                            <div class="flex items-center text-sm mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                November 25, 2024
                            </div>
                            <h3 class="text-xl font-semibold leading-tight">
                                Meningkatkan Pembelajaran SMK Dengan Virtual Reality: Inovasi Dari Telkom University
                            </h3>
                        </div>
                    </div>
                </div>
        
                <!-- News List -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="flex items-center bg-white shadow-md rounded-sm overflow-hidden">
                        <img 
                            src="{{ asset('images/Kominfo1.jpg') }}" 
                            alt="News Thumbnail" 
                            class="h-24 w-32 object-cover"
                        >
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-600 mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                August 9, 2024
                            </div>
                            <h3 class="text-sm font-medium text-gray-900">
                                Kolaborasi Sistem Informasi TUS Dalam 100 Kelurahan
                            </h3>
                        </div>
                    </div>
        
                    <div class="flex items-center bg-white shadow-md rounded-sm overflow-hidden">
                        <img 
                            src="{{ asset('images/Kominfo1.jpg') }}" 
                            alt="News Thumbnail" 
                            class="h-24 w-32 object-cover"
                        >
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-600 mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                August 9, 2024
                            </div>
                            <h3 class="text-sm font-medium text-gray-900">
                                Kolaborasi Sistem Informasi TUS Dalam 100 Kelurahan
                            </h3>
                        </div>
                    </div>
        
                    <div class="flex items-center bg-white shadow-md rounded-sm overflow-hidden">
                        <img 
                            src="{{ asset('images/Kominfo1.jpg') }}" 
                            alt="News Thumbnail" 
                            class="h-24 w-32 object-cover"
                        >
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-600 mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                July 5, 2024
                            </div>
                            <h3 class="text-sm font-medium text-gray-900">
                                Kaderisasi P2SI Anagata Amerta: Inovasi Dan Keseruan
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

</div>