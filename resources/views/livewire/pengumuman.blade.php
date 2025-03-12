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
                    <select class="px-4 py-2 border border-[#248232] rounded-lg focus:ring-2 focus:ring-[#248232] focus:border-[#248232]">
                        <option value="">Semua Kategori</option>
                        <option value="akademik">Akademik</option>
                        <option value="kegiatan">Kegiatan</option>
                        <option value="lomba">Lomba</option>
                        <option value="beasiswa">Beasiswa</option>
                    </select>
                    <select class="px-4 py-2 border border-[#248232] rounded-lg focus:ring-2 focus:ring-[#248232] focus:border-[#248232]">
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                        <option value="a-z">A-Z</option>
                        <option value="z-a">Z-A</option>
                    </select>
                </div>
            </div>

            <!-- Announcements List -->
            <div class="space-y-6">
                @for ($i = 1; $i <= 5; $i++)
                <div class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full mb-3">
                                    {{ ['Akademik', 'Kegiatan', 'Lomba', 'Beasiswa', 'Magang'][$i % 5] }}
                                </span>
                                <h2 class="text-xl font-bold text-gray-800 mb-2">Pengumuman: Jadwal Ujian Akhir Semester Genap 2024/2025</h2>
                                <p class="text-gray-600 mb-4">Diberitahukan kepada seluruh mahasiswa Teknik Informatika bahwa jadwal ujian akhir semester telah dirilis dan dapat diakses melalui portal akademik...</p>
                                
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>{{ date('d F Y', strtotime('-' . $i . ' days')) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ route('detail-pengumuman') }}" class="inline-flex items-center font-medium text-[#248232] hover:text-[#1b6828]">
                                Baca selengkapnya
                                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                <nav class="flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">5</span>
                                of
                                <span class="font-medium">20</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                    ...
                                </span>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    8
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    9
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    10
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>



</div>
