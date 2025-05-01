@section('title', 'Detail Program Kerja')

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
                @forelse ($programKerja as $p)
                <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Detail Program Kerja</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="{{ route('index') }}" class="hover:text-gray-800">Home</a> 
                        <span class="mx-2">›</span> 
                        <a href="/proker" class="hover:text-gray-800">Kegiatan Program Kerja</a> 
                        <span class="mx-2">›</span> 
                        <span>{{ $p->judul_kegiatan }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Article Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">{{ $p->judul_kegiatan }}</h1>
            
            <div class="flex items-center text-sm text-gray-600 space-x-4 mb-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ $p->divisi->nama_divisi }}</span>
                </div>
                
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($p->tanggal_kegiatan)->format('d F Y') }}</span>
                </div>
                
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                    </svg>
                    <a href="#" class="text-[#248232] hover:underline">{{ $p->divisi->nama_divisi ?? 'Divisi' }}</a>
                </div>
            </div>
        </div>
        
        <!-- Main Content with Sidebar Layout -->
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            <!-- Main Content -->
            <div class="w-full lg:w-2/3">
                <!-- Featured Image -->
                <div class="mb-8 overflow-hidden">
                    @if($p->gambar_kegiatan)
                        <img src="{{ asset('storage/' . $p->gambar_kegiatan) }}" alt="{{ $p->judul_kegiatan }}" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-110">
                    @else
                        <div class="w-full h-80 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No image available</span>
                        </div>
                    @endif
                </div>
                
                <!-- Article Content -->
                <div class="prose max-w-none">
                    {!! nl2br(e($p->deskripsi_kegiatan)) !!}
    
                    <hr class="border-gray-300 mb-8 mt-8">
                    
                    <!-- Tags -->
                    <div class="mt-8">
                        <div class="text-sm text-gray-600 mb-2">Divisi:</div>
                        <div class="flex flex-wrap gap-2">
                            <a href="{{ route('detail-divisi', $p->id) }}" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">{{ $p->divisi->nama_divisi ?? 'Divisi' }}</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                
                <!-- Latest Articles -->
                <div class="bg-gray-50 p-6 mb-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Kegiatan Terbaru</h2>
                    <ul>
                        @foreach ($kegiatanTerbaru as $kegiatan)
                            <li class="mb-4">
                                <a href="{{ route('detail-proker', $kegiatan->id) }}" class="hover:text-[#248232]">
                                    {{ $kegiatan->judul_kegiatan }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    
                </div>
                
                <!-- Tags Cloud -->
                <div class="bg-gray-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Tags</h2>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">anti virus</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">bisnis</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">cybersecurity</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">dasar jaringan komputer</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">Design Thingking</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">firewall</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">game vr</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">informatika</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">inovasi game vr</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">ITTS</a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-800 text-sm hover:text-white hover:bg-[#248232]">jaringan komputer</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-2 text-center py-10">
            <p class="text-gray-500">Belum ada data program kerja yang tersedia.</p>
        </div>
        @endforelse
    </div>
</div>
