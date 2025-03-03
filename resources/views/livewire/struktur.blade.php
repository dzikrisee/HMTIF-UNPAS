<div> 

<div class="relative w-full min-h-screen flex flex-col items-center justify-start pt-16">
    <!-- Struktur Organisasi (Besar & Menyatu) -->
    <div class="flex items-center justify-center w-full">
        <img src="{{ asset('images/struktur.png') }}" class="w-full md:w-[90%] h-auto object-cover shadow-lg" alt="Struktur Organisasi">
    </div>

    <!-- Teks di Bawah Gambar -->
    <div class="text-center mt-6 ">
        <h2 class="text-lg md:text-xl font-semibold text-green-700">KABINET HARMONI</h2>
        <h1 class="text-2xl md:text-4xl font-bold text-gray-900">BPH HMTIF UNPAS PERIODE 2024/2025</h1>
    </div>

    <!-- Carousel Box -->
    <div class="relative w-full flex justify-center mt-6 px-4">
        <!-- Tombol Prev -->
        <button id="prev" class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-md opacity-50 hover:opacity-100 transition z-10">
            ❮
        </button>

        <div id="carousel" class="w-[1200px] max-w-full overflow-hidden flex space-x-6 px-10 scrollbar-hide snap-x snap-mandatory mb-16">
            <!-- Box 1 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/BPH-Kahim.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 1">
            <h3 class="text-2xl font-bold mt-3 text-center">Ketua Umum</h3>
            <p class="text-gray-600 text-center text-lg">Moch. Nizar Al Fattan</p>
        </div>
        <!-- Box 2 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/BPH-Bendum.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 2">
            <h3 class="text-2xl font-bold mt-3 text-center">Bendahara Umum</h3>
            <p class="text-gray-600 text-center text-lg">Dea Abeliya Casmita</p>
        </div>
        <!-- Box 3 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/BPH-Wabendum.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 3">
            <h3 class="text-2xl font-bold mt-3 text-center">Wakil Bendahara Umum</h3>
            <p class="text-gray-600 text-center text-lg">Dera Triyadi Fatimah</p>
        </div>
        <!-- Box 4 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/BPH-Sekum.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 4">
            <h3 class="text-2xl font-bold mt-3 text-center">Sekretaris Umum</h3>
            <p class="text-gray-600 text-center text-lg">Nabila Putri Aisyah Insirawati</p>
        </div>
        <!-- Box 5 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/BPH-Wasekum.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 5">
            <h3 class="text-2xl font-bold mt-3 text-center">Wakil Sekretaris Umum</h3>
            <p class="text-gray-600 text-center text-lg">Ilona Aqila Zahra</p>
        </div>
        <!-- Box 6 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/sekjend.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 6">
            <h3 class="text-2xl font-bold mt-3 text-center">Sekretaris Jendral</h3>
            <p class="text-gray-600 text-center text-lg">Moch Riyan Putra Suryadi</p>
        </div>
        <!-- Box 7 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/Sospol.jpg') }}" class="w-full h-64 object-cover rounded-md" alt="Image 7">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator Sospol</h3>
            <p class="text-gray-600 text-center text-lg">Agung Purnama Rahmat</p>
        </div>
        <!-- Box 8 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/Kominfo.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 8">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator Kominfo</h3>
            <p class="text-gray-600 text-center text-lg">Muhammad Fauzan A</p>
        </div>
        <!-- Box 9 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/RT.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 9">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator RT</h3>
            <p class="text-gray-600 text-center text-lg">Moch Priamitra Nur Alif</p>
        </div>
        <!-- Box 10 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/PSDM.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 10">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator PSDM</h3>
            <p class="text-gray-600 text-center text-lg">Ainan Bahrul Insan</p>
        </div>
        <!-- Box 11 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/MB.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 11">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator MB</h3>
            <p class="text-gray-600 text-center text-lg">Julio Faridh</p>
        </div>
        <!-- Box 12 -->
        <div class="w-[350px] bg-white shadow-lg rounded-lg p-6 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ asset('images/Ekraf.png') }}" class="w-full h-64 object-cover rounded-md" alt="Image 12">
            <h3 class="text-2xl font-bold mt-3 text-center">Koordinator Ekraf</h3>
            <p class="text-gray-600 text-center text-lg">Fadhila Fauzan</p>
        </div>

        <!-- Tombol Next -->
        <button id="next" class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-md opacity-50 hover:opacity-100 transition z-10">
            ❯
        </button>
    </div>
</div>

<script>
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    function updateButtons() {
        prevBtn.style.opacity = carousel.scrollLeft > 0 ? "1" : "0.5";
        nextBtn.style.opacity = (carousel.scrollLeft + carousel.clientWidth) < carousel.scrollWidth ? "1" : "0.5";
    }

    nextBtn.addEventListener('click', function () {
        carousel.scrollBy({ left: 320, behavior: 'smooth' });
        setTimeout(updateButtons, 300);
    });

    prevBtn.addEventListener('click', function () {
        carousel.scrollBy({ left: -320, behavior: 'smooth' });
        setTimeout(updateButtons, 300);
    });

    carousel.addEventListener('scroll', updateButtons);
    updateButtons();
</script>

</div> 
