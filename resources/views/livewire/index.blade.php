<div>

    <div class="py-16 mt-4">
        <section class="relative h-screen">
            <!-- Hero Background -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/home-background.png') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 "></div>
            </div>
            
            <!-- Content -->
            {{-- <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold text-center mb-2">
                    HMTIF - Universitas Pasundan
                </h1>
                <p class="text-xl text-center text-gray-200">
                    Excellent in Computing Systems
                </p>
            </div> --}}
        </section>
    </div>
        



        <!-- About HMTIF Section -->
        <section class="py-16" id="about">
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
                            <h2 class="text-[#248232] font-bold mb-2">HMTIF</h2>
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
                            <a href="/pengumuman" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                                <span class="font-medium">Pengumuman</span>
                            </a>
                            
                            <a href="/proker" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="font-medium">Kegiatan</span>
                            </a>

                            <a href="/divisi" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
                                <svg class="w-6 h-6 text-[#248232] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                                <span class="font-medium">Divisi</span>
                            </a>
                            
                            <a href="/struktur" class="flex items-center gap-3 p-4 border border-[#248232] rounded-lg hover:bg-[#248232]/5 transition-colors group">
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
        <section class="py-16 bg-[#F6F6F6]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="space-y-6">
                        <!-- Section Header -->
                        <div class="mb-6">
                            <h2 class="text-[#248232] font-bold mb-2">Harmoni</h2>
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



        <!-- Statistik Section -->
        <section class="py-16 mt-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Akreditasi -->
                    <div class="pr-4 border-r border-gray-300">
                        <h3 class="text-4xl font-bold text-[#248232] mb-2">0</h3>
                        <p class="text-gray-600">
                            Agenda HMTIF <br> Periode Kabinet Harmoni
                        </p>
                    </div>

                    <!-- Jumlah Mahasiswa -->
                    <div class="px-4 border-r border-gray-300">
                        <h3 class="text-4xl font-bold text-[#248232] mb-2">0</h3>
                        <p class="text-gray-600">
                            Program Kerja HMTIF<br> Periode Kabinet Harmoni
                        </p>
                    </div>

                    <!-- Publikasi -->
                    <div class="pl-4">
                        <h3 class="text-4xl font-bold text-[#248232] mb-2">0</h3>
                        <p class="text-gray-600">
                            Anggota HMTIF <br> Periode Kabinet Harmoni
                        </p>
                    </div>
                </div>
            </div>
        </section>





        <!-- Sambutan Ketua Umum HMTIF Periode 2024-2025 -->
        <section class="py-16 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="border border-[#248232]  p-6 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <!-- Foto Ketua -->
                        <div class="flex justify-center">
                            <img src="{{ asset('images/BPH-Kahim.png') }}" alt="Ketua Program Studi" 
                                class="w-3/4 h-auto object-cover shadow-lg">
                        </div>

                        <!-- Teks Sambutan -->
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-gray-900">Sambutan Ketua <br> Umum HMTIF</h2>
                            <p class="text-gray-700">Assalamu’alaikum Warahmatullahi Wabarakatuh</p>
                            <p class="text-gray-700">Salam hormat, <br>
                                Selamat Datang di Program Studi S1 Teknik Informatika, Universitas Pasundan .
                            </p>
                            <p class="text-gray-700">
                                Di era digital seperti saat ini hampir semua perusahaan membutuhkan Teknik Informatika, 
                                sehingga perusahaan atau organisasi sangat membutuhkan sumber daya manusia yang ahli di bidang Teknik Informatika. 
                                Teknik Informatika mengintegrasikan teknologi, manusia, proses bisnis dan tata kelola perencanaan 
                                untuk memberikan solusi IT pada perusahaan.
                            </p>
                            <p class="text-gray-700 font-semibold">
                                Moch. Nizar Al Fattan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        


        <!-- Section Kegiatan -->
        <section class="py-10 bg-[#F6F6F6]">
            <div class="py-12 px-4 md:px-8 max-w-7xl mx-auto font-sora ">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900">Kegiatan <span class="text-[#248232]">HMTIF</span></h2>
                    </div>
                    <a href="{{ route('proker') }}" class="text-[#248232] hover:text-grey-900 flex items-center">
                        Lihat Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
    
                <div class="h-px w-full bg-gray-200 mb-10"></div>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @forelse($prokers as $proker)
                        <!-- News Card UI Component - With Image Spacing -->
                        <div class="bg-white rounded shadow overflow-hidden flex">
                            <!-- Left side image container with padding -->
                            <div class="w-1/3 p-3 pt-3 pl-3 pb-3">
                                <div class="h-full w-full overflow-hidden">
                                    <img src="{{ $proker->gambar_kegiatan ? asset('storage/'.$proker->gambar_kegiatan) : asset('images/BPH-Kahim.png') }}" alt="{{ $proker->judul_kegiatan }}" class="h-full w-full object-cover">
                                </div>
                            </div>
                            
                            <!-- Right side content -->
                            <div class="w-2/3 p-5">
                                <!-- Date and author info -->
                                <div class="flex items-center text-sm text-gray-600 mb-3">
                                    <div class="flex items-center mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($proker->tanggal_kegiatan)->format('F d, Y') }}</span>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span class="text-[#248232] font-medium">{{ $proker->divisi->nama_divisi ?? 'Divisi' }}</span>
                                    </div>
                                </div>
                                
                                <!-- Title -->
                                <h3 class="font-bold text-gray-900 text-xl mb-4 leading-tight">
                                    {{ Str::limit($proker->judul_kegiatan, 80) }}
                                </h3>
                                
                                <!-- Read More link -->
                                <div class="mt-2">
                                    <a href="{{ route('detail-proker', ['id' => $proker->id]) }}" class="text-[#248232] text-sm font-medium flex items-center hover:underline">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 p-5 bg-white rounded shadow">
                            <p class="text-center text-gray-600">Belum ada data program kerja.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>





        <!-- Testimoni Section -->
        <section class="py-16 bg-[#1A472A]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Bagian Kiri: Teks dan Navigasi -->
                    <div class="text-white space-y-4">
                        <h2 class="text-4xl font-bold">Apa Kata<br>Mereka?</h2>
                        <p>Dengarkan opini mahasiswa dan alumni mengenai pengalaman mereka</p>
                        
                        <!-- Navigasi -->
                        <div class="flex space-x-4 mt-8">
                            <button id="prev-btn" class="w-10 h-10 flex items-center justify-center border border-white rounded-full text-white hover:bg-white hover:text-[#1A472A] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button id="next-btn" class="w-10 h-10 flex items-center justify-center border border-white rounded-full text-white hover:bg-white hover:text-[#1A472A] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Indikator -->
                        <div class="flex space-x-2 mt-4">
                            <span id="current-slide" class="text-white">1</span>
                            <span class="text-white">/</span>
                            <span id="total-slides" class="text-white">3</span>
                        </div>
                    </div>

                    <!-- Bagian Kanan: Kartu Testimoni -->
                    <div id="testimonial-container" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Testimoni akan diisi melalui JavaScript -->
                    </div>
                </div>
            </div>
        </section>






        <!-- Section Pengumuman -->
        <section class="w-full bg-[#F6F6F6]">
            <!-- Konten di Tengah -->
            <div class="py-12 px-4 md:px-8 max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-4xl font-bold text-gray-900">Pengumuman <span class="text-[#248232]">HMTIF</span></h2>
                    <a href="{{ route('pengumuman') }}" class="text-[#248232] hover:text-gray-600 flex items-center">
                        Lihat Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <hr class="border-gray-300 mb-8">

                <!-- Featured Announcement (Highlighted) -->
                @php
                    $pengumumans = App\Models\Pengumuman::with('divisi')
                        ->orderBy('tanggal_pengumuman', 'desc')
                        ->take(4)
                        ->get();
                    
                    $pengumumanUtama = $pengumumans->first();
                    $pengumumanLainnya = $pengumumans->slice(1, 3);
                @endphp

                @if($pengumumanUtama)
                <div class="mb-8 bg-white rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="p-6 border-l-4 border-[#248232]">
                        <div class="flex items-center text-gray-500 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#248232]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ \Carbon\Carbon::parse($pengumumanUtama->tanggal_pengumuman)->format('d F Y') }}</span>
                            <span class="mx-2">•</span>
                            <span class="bg-[#248232] text-white text-xs px-2 py-1 rounded">{{ $pengumumanUtama->kategori }}</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-[#248232] transition">
                            <a href="{{ route('detail-pengumuman', $pengumumanUtama->id) }}">{{ $pengumumanUtama->judul }}</a>
                        </h3>
                        <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($pengumumanUtama->isi_pengumuman), 200) }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $pengumumanUtama->divisi ? $pengumumanUtama->divisi->nama_divisi : 'Umum' }}</span>
                            </div>
                            <a href="{{ route('detail-pengumuman', $pengumumanUtama->id) }}" class="text-[#248232] hover:underline font-medium">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Announcement Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($pengumumanLainnya as $pengumuman)
                    <!-- Announcement Item -->
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition p-5">
                        <div class="flex items-center text-gray-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ \Carbon\Carbon::parse($pengumuman->tanggal_pengumuman)->format('d F Y') }}</span>
                            <span class="mx-2">•</span>
                            <span class="bg-[#248232] text-white text-xs px-2 py-1 rounded ">{{ $pengumuman->kategori }}</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 hover:text-[#248232] transition mb-3">
                            <a href="{{ route('detail-pengumuman', $pengumuman->id) }}">{{ $pengumuman->judul }}</a>
                        </h4>
                        <p class="text-gray-600 text-sm mb-3">{{ \Illuminate\Support\Str::limit(strip_tags($pengumuman->isi_pengumuman), 100) }}</p>
                        <a href="{{ route('detail-pengumuman', $pengumuman->id) }}" class="text-[#248232] text-sm hover:underline flex items-center">
                            Detail Pengumuman
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Data testimoni
        const testimonials = [
            [
                {
                    
                    text: "Di HMTIF Unpas, saya menemukan keluarga kedua yang mendukung pengembangan diri saya. Kegiatan-kegiatan yang diadakan selalu membuka wawasan baru.",
                    name: "Dzikri Setiawan",
                    role: "Mahasiswa",
                    position: "Kominfo HMTIF-2024",
                    location: "Angkatan 2022"
                },
                {
                    
                    text: "HMTIF bukan hanya sekedar himpunan, tapi tempat dimana petualangan bermula. Saya bisa bertemu teman baru dan mengembangkan soft skill.",
                    name: "Rhevindra",
                    role: "Alumni",
                    position: "Beasiswa S2 UTM",
                    location: "Malaysia"
                }
            ],
            [
                {
                    
                    text: "Bergabung dengan HMTIF adalah keputusan terbaik selama kuliah. Saya belajar leadership, manajemen proyek, dan keterampilan berkomunikasi.",
                    name: "Fitri Handayani",
                    role: "Mahasiswa",
                    position: "Sekretaris HMTIF",
                    location: "Angkatan 2023"
                },
                {
                    
                    text: "Pengalaman dalam kepanitiaan IT Competition yang diselenggarakan HMTIF memberikan saya pengalaman berharga dalam mengelola acara berskala nasional.",
                    name: "Dimas Prayoga",
                    role: "Alumni",
                    position: "Frontend Developer",
                    location: "Tokopedia"
                }
            ],
            [
                {
                    
                    text: "HMTIF memberikan platform bagi saya untuk mengembangkan minat di bidang cyber security melalui workshop dan kompetisi rutin yang diadakan.",
                    name: "Muhammad Fauzan",
                    role: "Mahasiswa",
                    position: "Koordinator Divisi KOMINFO-2024",
                    location: "Angkatan 2021"
                },
                {
                    
                    text: "Program mentoring yang diselenggarakan HMTIF sangat membantu saya menghadapi tantangan perkuliahan. Senior-senior selalu siap membantu.",
                    name: "Annisa Putri",
                    role: "Mahasiswa",
                    position: "Anggota HMTIF",
                    location: "Angkatan 2024"
                }
            ]
        ];

        const container = document.getElementById('testimonial-container');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const currentSlideEl = document.getElementById('current-slide');
        const totalSlidesEl = document.getElementById('total-slides');

        let currentSlide = 0;
        totalSlidesEl.textContent = testimonials.length;

        // Fungsi untuk menampilkan testimoni
        function showTestimonials(index) {
            container.innerHTML = '';
            currentSlideEl.textContent = index + 1;
            
            testimonials[index].forEach(testimonial => {
                const card = document.createElement('div');
                card.className = 'bg-white p-6 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-lg h-80 flex flex-col justify-between';
                
                // Rating stars
                let stars = '';
                for (let i = 0; i < testimonial.rating; i++) {
                    stars += '<span class="text-yellow-500">★</span>';
                }
                
                // Konten utama (akan di-scroll jika terlalu panjang)
                const mainContent = document.createElement('div');
                mainContent.className = 'flex flex-col h-full';
                
                // Rating stars
                const ratingDiv = document.createElement('div');
                ratingDiv.className = 'flex space-x-1 mb-4';
                ratingDiv.innerHTML = stars;
                mainContent.appendChild(ratingDiv);
                
                // Teks testimoni dengan container yang bisa di-scroll
                const textDiv = document.createElement('div');
                textDiv.className = 'flex-grow overflow-y-auto mb-4 pr-2 text-gray-600';
                textDiv.style.maxHeight = '120px'; // Tinggi maksimum untuk teks
                textDiv.innerHTML = testimonial.text;
                mainContent.appendChild(textDiv);
                
                // Profile info
                const profileDiv = document.createElement('div');
                profileDiv.className = 'flex items-center space-x-4 mt-auto';
                
                // Ikon profil yang sesuai tema
                profileDiv.innerHTML = `
                    <div class="w-12 h-12 bg-[#1A472A] rounded-full flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">${testimonial.name} - ${testimonial.role}</h4>
                        <p class="text-sm text-gray-500">${testimonial.position}<br>${testimonial.location}</p>
                    </div>
                `;
                
                mainContent.appendChild(profileDiv);
                card.appendChild(mainContent);
                container.appendChild(card);
            });
            
            // Tambahkan custom scrollbar style
            const style = document.createElement('style');
            style.textContent = `
                #testimonial-container .overflow-y-auto::-webkit-scrollbar {
                    width: 4px;
                }
                #testimonial-container .overflow-y-auto::-webkit-scrollbar-track {
                    background: #f1f1f1;
                    border-radius: 10px;
                }
                #testimonial-container .overflow-y-auto::-webkit-scrollbar-thumb {
                    background: #1A472A;
                    border-radius: 10px;
                }
            `;
            document.head.appendChild(style);
        }

        // Event listener untuk tombol navigasi
        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + testimonials.length) % testimonials.length;
            showTestimonials(currentSlide);
        });

        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % testimonials.length;
            showTestimonials(currentSlide);
        });

        // Tampilkan testimoni pertama saat halaman dimuat
        showTestimonials(currentSlide);
        
        // Auto-sliding setiap 10 detik
        setInterval(function() {
            currentSlide = (currentSlide + 1) % testimonials.length;
            showTestimonials(currentSlide);
        }, 10000);
    });
</script>