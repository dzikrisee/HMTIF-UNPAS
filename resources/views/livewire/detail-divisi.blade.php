<div>
    <!-- Header section remains the same -->
    <section class="py-16">
        <div class="relative w-full h-64 bg-gray-100">
            <img src="{{ asset('images/Kominfo1.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 flex flex-col justify-center items-start">
                <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Profil Divisi HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <a href="{{ route('divisi') }}" class="hover:text-gray-800">Divisi HMTIF</a> 
                        <span class="mx-2">›</span> 
                        <span>Profil Divisi HMTIF</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile section remains the same -->
    <div class="bg-white p-6 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:gap-16">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <div class="p-2">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ asset('images/Logo-Sospol.png') }}" alt="Profile Image" class="w-full h-full object-cover object-center">
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-3/5">
                <div class="mb-6">
                    <p class="text-sm mb-2"></p>
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Divisi Sosial dan Politik</h1>
                    <p class="text-[#248232] font-bold">Kabinet Harmoni</p>
                </div>
                
                <div class="space-y-5">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 p-2 border border-gray-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-700">Koordinator Divisi</p>
                            <p class="text-gray-600">Nama Koordinator</p>
                        </div>
                    </div>

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
                </div>
            </div>
        </div>
    </div>

    <!-- Tugas & Fungsi section remains the same -->
    <div class="max-w-5xl mx-auto px-6 py-12">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tugas & Fungsi</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-white">
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">No.</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Tugas dan Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">1</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Melaksanakan kegiatan rangkaian kaderisasi.</td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">2</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Mengumpulkan aspirasi dan informasi mengenai hal 
                                akademik.</td>
                        </tr>

                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">3</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Membantu serta mendampingi mahasiswa yang 
                                memiliki permasalahan di bidang akademik.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Toggle buttons and content section -->
    <div class="max-w-5xl mx-auto px-6 pb-12">
        <!-- Toggle Buttons -->
        <div class="flex mb-6 border-b border-gray-200">
            <button id="btn-program" class="py-3 px-6 font-medium text-gray-800 border-b-2 border-[#248232] active-tab" onclick="toggleTab('program')">
                Program Kerja
            </button>
            <button id="btn-agenda" class="py-3 px-6 font-medium text-gray-500 hover:text-gray-800" onclick="toggleTab('agenda')">
                Agenda
            </button>
        </div>
        
        <!-- Program Kerja Table (default visible) -->
        <div id="program-content" class="tab-content">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Program Kerja</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-white">
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">No.</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Nama Program</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Deskripsi</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Waktu Pelaksanaan</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">1</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Bakti Sosial</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Kegiatan amal dan sosial untuk membantu masyarakat sekitar kampus yang membutuhkan, termasuk pengumpulan donasi dan pemberian bantuan langsung.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">April 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">2</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Dialog Mahasiswa</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Forum diskusi terbuka antar mahasiswa untuk membahas isu-isu sosial dan politik terkini yang relevan dengan mahasiswa TIF.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Setiap 3 bulan</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">3</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Seminar Politik Digital</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Seminar dengan mengundang pakar politik dan teknologi untuk membahas peran IT dalam perkembangan demokrasi dan politik di era digital.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">September 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">4</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Pelatihan Advokasi</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Workshop untuk meningkatkan kemampuan mahasiswa dalam beradvokasi dan menyuarakan aspirasi secara efektif di lingkungan kampus.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Juni 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>                            
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">5</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Kolaborasi Antar Kampus</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Menjalin kerjasama dengan organisasi mahasiswa dari kampus lain untuk proyek sosial bersama dan pertukaran pengetahuan.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">November 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Agenda Table (initially hidden) -->
        <div id="agenda-content" class="tab-content hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Agenda</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-white">
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">No.</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Nama Agenda</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Deskripsi</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Tanggal</th>
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">1</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Persiapan Bakti Sosial</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Rapat koordinasi dan persiapan untuk kegiatan bakti sosial di sekitar kampus.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">15 Maret 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">2</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Dialog Mahasiswa - Semester 1</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Dialog pertama untuk periode 2025 membahas topik Politik di Era Digital.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">20 April 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">3</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Workshop Advokasi #1</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Sesi pelatihan pertama bagi anggota divisi untuk meningkatkan kemampuan advokasi.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">5 Mei 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">4</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Pertemuan Kampus Mitra</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Rapat pertama dengan perwakilan organisasi mahasiswa dari kampus mitra untuk membahas kolaborasi.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">12 Juni 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>                            
                            </td>
                        </tr>
                        
                        <tr class="bg-white">
                            <td class="border border-gray-200 p-4 text-gray-700">5</td>
                            <td class="border border-gray-200 p-4 text-gray-700 font-medium">Persiapan Seminar Politik Digital</td>
                            <td class="border border-gray-200 p-4 text-gray-700">Rapat koordinasi persiapan awal untuk Seminar Politik Digital termasuk pemilihan narasumber.</td>
                            <td class="border border-gray-200 p-4 text-gray-700">8 Juli 2025</td>
                            <td class="border border-gray-200 p-4 text-gray-700">
                                <a href="" class="inline-flex items-center px-3 py-1 bg-[#248232] text-white text-xs font-medium rounded hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 transition">
                                    Detail
                                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i> 
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Functionality -->
    <script>
        function toggleTab(tabName) {
            // Hide all tab content
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected tab content
            const selectedContent = document.getElementById(tabName + '-content');
            if (selectedContent) {
                selectedContent.classList.remove('hidden');
            }
            
            // Update tab button styles
            const allTabButtons = document.querySelectorAll('#btn-program, #btn-agenda');
            allTabButtons.forEach(button => {
                button.classList.remove('border-b-2', 'border-[#248232]', 'text-gray-800', 'active-tab');
                button.classList.add('text-gray-500');
            });
            
            // Add active style to selected tab button
            const activeButton = document.getElementById('btn-' + tabName);
            if (activeButton) {
                activeButton.classList.remove('text-gray-500');
                activeButton.classList.add('border-b-2', 'border-[#248232]', 'text-gray-800', 'active-tab');
            }
        }
    </script>
</div>