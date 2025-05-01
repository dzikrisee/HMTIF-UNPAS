@section('title', 'Divisi')

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
                <h1 class="text-3xl font-bold text-gray-800 text-left">Divisi HMTIF</h1>
                <nav class="text-gray-600 text-left">
                    <a href="/" class="hover:text-gray-800">Home</a> 
                    <span class="mx-2">›</span> 
                    <span>Divisi HMTIF</span>
                </nav>
            </div>
        </div>
    </div>
</section>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-10">
        <h3 class="text-3xl font-bold text-gray-900 mb-6">Divisi Kabinet Harmoni HMTIF</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @forelse($divisi as $d)
            <!-- Kolom 1 -->
            <div class="border shadow-sm flex bg-white">
                <div class="w-1/3 flex items-center justify-center p-4">
                    <img src="{{ Storage::url($d->logo_divisi) }}" alt="{{ $d->nama_divisi }}">
                </div>
                <div class="w-2/3 p-4">
                    <h5 class="text-lg font-semibold text-gray-900 border-l-4 border-[#248232] pl-3 my-2">{{ $d->nama_divisi }}</h5>
                    <button wire:click="redirectToDetail({{ $d->id }})" class="mt-3 inline-block px-4 py-2 border border-[#248232] text-[#248232] font-semibold rounded-md transition duration-300 ease-in-out hover:bg-[#248232] hover:text-white">Profil Lengkap</button>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center py-10">
                <p class="text-gray-500">Belum ada data Divisi yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>

</div>
