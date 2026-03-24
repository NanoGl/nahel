<header class="text-white">
    {{-- Barra naranja --}}
    <div class="bg-[#FF6700] h-8"></div>
    {{-- Header con logo --}}
    <div class="flex bg-[#00134B] p-7 justify-between">
        <div class="justify-center items-center ml-20">
            <img src="{{ asset('images/store/NAHEL_NUEVO.png') }}" alt="NAHEL LOGO" class="max-w-60">
        </div>
        <div class="flex justify-center items-center mr-20">
            <ol class="inline-flex flex-wrap">
                <li class="pl-3 pr-3">Quiénes Somos</li>
                <li class="pl-3 pr-3">Distribuidores</li>
                <li class="pl-3 pr-3">Contacto</li>
                <li class="pl-3 pr-3">Mi Cuenta</li>
            </ol>
        </div>
    </div>
    {{-- Barra gris con buscador --}}
    <div class="flex bg-[#727272] py-3 px-4 sm:px-10 min-h-[70px] tracking-wide relative z-50">
        <div class="flex flex-wrap items-center justify-between gap-4 w-full max-w-screen-xl mx-auto">
            <div id="collapseMenu"
                class="max-lg:hidden lg:!flex lg:items-center max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">

                <ul
                    class="lg:!flex lg:gap-x-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-[#151d20] max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:px-10 max-lg:py-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='javascript:void(0)' class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-bicycle"></i>
                            <span class="ml-1">
                                Bicicletas
                            </span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='javascript:void(0)' class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-repair"></i>
                            <span class="ml-1">
                                Todo para bicicletas
                            </span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='javascript:void(0)' class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-baseball-helmet"></i>
                            <span class="ml-1">
                                Todo para motocicletas
                            </span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='javascript:void(0)' class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-plus-sign-circle"></i>
                            <span class="ml-1">
                                Nuevos productos
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center w-72 bg-white border text-gray-500 border-gray-300 rounded-lg">
                <input type="text" placeholder="Busca en todo el catálogo aquí..." name="searchField"
                    class="bg-transparent border-none text-sm w-full px-4 h-10 outline-none focus:ring-0 max-sm:hidden" />
                <i class="fa-solid fa-magnifying-glass mr-2"></i>
            </div>
        </div>
    </div>
</header>
