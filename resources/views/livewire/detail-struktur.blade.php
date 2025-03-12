<div>
    <section class="py-16">
        <div class="relative w-full h-64 bg-gray-100">
            <img src="{{ asset('images/Kominfo1.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 flex flex-col justify-center items-start">
                <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Profil Badan Pengurus Harian HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <a href="{{ route('struktur') }}" class="hover:text-gray-800">Struktur HMTIF</a> 
                        <span class="mx-2">›</span> 
                        <span>Profil Badan Pengurus Harian HMTIF</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="bg-white p-6 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:gap-16"> <!-- Increased gap between photo and content -->
            <!-- Profile Image Section - Square format -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <div class="p-2">
                    <div class="aspect-square overflow-hidden"> <!-- Force square aspect ratio -->
                        <img src="{{ asset('images/BPH-Sekum.png') }}" alt="Profile Image" class="w-full h-full object-cover object-center">
                    </div>
                </div>
            </div>
            
            <!-- Profile Details Section -->
            <div class="w-full md:w-3/5">
                <div class="mb-6"> <!-- Increased bottom margin -->
                    <p class=" text-sm mb-2"></p>
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Nabila Putri Aisyah Insirawati</h1>
                    <p class="text-[#248232] font-bold">Seketaris Umum</p>
                </div>
                
                <!-- Profile Info Items -->
                <div class="space-y-5"> <!-- Increased spacing between items -->
                    <!-- NPM -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Nomor Pokok Mahasiswa (NPM)</p>
                            <p class="text-gray-600">213040144</p>
                        </div>
                    </div>
                    
                    
                    <!-- Jabatan -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Jabatan</p>
                            <p class="text-gray-600">Sekretaris Umum</p>
                        </div>
                    </div>


                    <!-- Periode -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Periode</p>
                            <p class="text-gray-600">KABINET HARMONI - 2024/2025</p>
                        </div>
                    </div>
                    
                    <!-- Email Address -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Email Address</p>
                            <p class="text-gray-600">nabila.213040144@mail.unpas.ac.id</p>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Location</p>
                            <p class="text-gray-600">Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-5xl mx-auto px-6 py-12">
        <!-- Kegiatan Section -->
        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tugas & Fungsi</h2>
            
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-white">
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">No.</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Tugas dan Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">1</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Membuat naskah, surat, dan hal-hal yang berhubungan 
                                dengan kegiatan HMTIF-UNPAS.</td>
                        </tr>
                        
                        <!-- Row 2 -->
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">2</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Mengadakan kearsipan surat-surat.</td>
                        </tr>


                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">3</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Menyiapkan agenda rapat dan tempat rapat bersama
                                sama dengan Sekretaris Jenderal. </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
