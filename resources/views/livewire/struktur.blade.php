@section('title', 'Struktur')

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
                    <h1 class="text-3xl font-bold text-gray-800 text-left">Struktur HMTIF</h1>
                    <nav class="text-gray-600 text-left">
                        <a href="/" class="hover:text-[#248232] transition-colors">Home</a> 
                        <span class="mx-2">›</span> 
                        <span>Struktur HMTIF</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="w-full">
            <h3 class="text-3xl font-bold text-gray-900 mb-6">Struktur Organisasi HMTIF</h3>
    
            <!-- Struktur Organisasi (Besar & Menyatu) -->
            <div class="flex justify-center">
                <img src="{{ asset('images/struktur.png') }}" class="w-full md:max-w-7xl h-auto object-cover border shadow-lg" alt="Struktur Organisasi">
            </div>
        </div>

        <!-- Teks di Bawah Gambar -->
        <div class="text-center pt-16 ">
            <h2 class="text-lg md:text-xl font-semibold text-green-700">KABINET HARMONI</h2>
            <h1 class="text-2xl md:text-4xl font-bold text-gray-900">BPH HMTIF UNPAS PERIODE 2024/2025</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5">
            @forelse($bphs as $bph)
                <!-- Card -->
                <div class="border border-gray-200 rounded p-4 bg-white flex">
                    <div class="w-1/3">
                        <img src="{{ Storage::url($bph->foto_profil) }}" alt="{{ $bph->nama }}" class="w-full aspect-square object-cover bg-gray-50">
                    </div>
                    <div class="w-2/3 pl-4 flex flex-col justify-between">
                        <div>
                            <div class="flex items-start justify-between">
                                <h3 class="font-bold text-2xl text-gray-800">{{ $bph->nama }}</h3>
                            </div>
                            <div class="mt-4 border-l-4 border-[#248232] pl-2 text-lg text-gray-600">
                                {{ $bph->jabatan }}
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('detail-struktur', $bph->id) }}" class="inline-block border border-[#248232] text-[#248232] px-4 py-1 text-sm hover:bg-[#248232]/10 transition duration-200">Profil Lengkap</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center py-10">
                    <p class="text-gray-500">Belum ada data anggota BPH yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>