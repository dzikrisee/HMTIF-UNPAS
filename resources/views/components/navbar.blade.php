<header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full text-sm py-3 bg-white">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between bg-white">
        <div class="flex items-center justify-between">
            <a class="flex items-center gap-2 text-xl font-semibold text-gray-800 focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img src="{{ asset('images/logo-hmtif.png') }}" alt="Logo 1" class="w-12 h-auto">
                <img src="{{ asset('images/logo-harmoni.png') }}" alt="Logo 2" class="w-12 h-auto">
            </a>
            
            <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50" id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"/>
                        <line x1="3" x2="21" y1="12" y2="12"/>
                        <line x1="3" x2="21" y1="18" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="hs-navbar-example" class="hidden hs-collapse transition-all duration-300 basis-full grow sm:block" aria-labelledby="hs-navbar-example-collapse">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                <a class="font-medium text-gray-800 hover:text-gray-600" href="#" aria-current="page">Struktur</a>
                <a class="font-medium text-gray-800 hover:text-gray-600" href="#">Divisi</a>
                <a class="font-medium text-gray-800 hover:text-gray-600" href="#">Kegiatan</a>
            </div>
        </div>
    </nav>
</header>
