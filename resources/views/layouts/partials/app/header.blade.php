<header class="text-white" x-data="{ open: false }" x-cloak>
    {{-- Barra color primario --}}
    @include('layouts.partials.app.primary-bar')
    {{-- Header con logo --}}
    <div class="flex bg-[var(--variable-secondary)] px-7 py-4 justify-between w-full">
        <div class="flex justify-between items-center mx-10 lg:ml-20 w-full lg:w-auto">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/store/NAHEL_NUEVO.png') }}" alt="NAHEL LOGO"
                    class="max-w-60 hover:scale-105 transition-all duration-300 transform">
            </a>

            <button @click="open = true" class="lg:hidden ml-4 text-white focus:outline-none">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
        {{-- <div class="flex justify-center items-center mr-20">
            <ol class="inline-flex flex-wrap h-full items-center">
                <a href="{{ route('app.we-are') }}"
                    class="h-full flex items-center hover:bg-[var(--variable-secondary-hover)] transition-all duration-300 transform rounded-lg">
                    <li class="pl-3 pr-3">Quiénes Somos</li>
                </a>
                <li class="pl-3 pr-3">Distribuidores</li>
                <li class="pl-3 pr-3">Contacto</li>
                <li class="pl-3 pr-3">Mi Cuenta</li>
            </ol>
        </div> --}}
        <div class="hidden lg:flex justify-center items-center mr-20">
            <ol class="inline-flex flex-wrap h-full items-center gap-4">
                <a href="{{ route('app.we-are') }}"
                    class="hover:bg-[var(--variable-secondary-hover)] transition-all duration-300 rounded-lg px-3 py-1 {{ request()->routeIs('app.we-are') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">
                    <li>Quiénes Somos</li>
                </a>
                <a href="{{ route('app.distributors') }}"
                    class="hover:bg-[var(--variable-secondary-hover)] transition-all duration-300 rounded-lg px-3 py-1 {{ request()->routeIs('app.distributors') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">
                    <li>Distribuidores</li>
                </a>
                <a href="{{ route('app.contact-us') }}"
                    class="hover:bg-[var(--variable-secondary-hover)] transition-all duration-300 rounded-lg px-3 py-1 {{ request()->routeIs('app.contact-us') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">
                    <li>Contacto</li>
                </a>
                <li>Mi Cuenta</li>
            </ol>
        </div>
    </div>
    {{-- Barra gris con buscador --}}
    <div class="flex bg-[var(--variable-tertiary)] py-1 px-4 sm:px-10 min-h-[40px] tracking-wide relative z-50">
        <div class="flex flex-wrap items-center justify-between gap-4 w-full max-w-screen-xl mx-auto">
            <div id="collapseMenu" class="lg:flex lg:items-center" :class="open ? 'block' : 'max-lg:hidden'" x-cloak>
                {{-- class="max-lg:hidden lg:!flex lg:items-center max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50"> --}}

                {{-- Fondo oscuro (Overlay) --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" @click="open = false"
                    class="fixed inset-0 bg-black/60 z-50 lg:hidden">
                </div>
                
                {{-- <ul
                    class="lg:!flex lg:gap-x-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-[#151d20] max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:px-10 max-lg:py-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='{{ route('app.category', 'BICI') }}'
                            class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-bicycle"></i>
                            <span class="ml-1">
                                Bicicletas
                            </span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='{{ route('app.category', 'RBIC') }}'
                            class="text-white hover:text-gray-300 text-base flex items-center">
                            <i class="hgi hgi-stroke hgi-repair"></i>
                            <span class="ml-1">
                                Todo para bicicletas
                            </span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:py-3 px-3">
                        <a href='{{ route('app.category', 'MOTO') }}'
                            class="text-white hover:text-gray-300 text-base flex items-center">
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
                </ul> --}}

                <ul x-show="open || window.innerWidth >= 1024"
                    x-transition:enter="transition transform ease-out duration-300"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition transform ease-in duration-200"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    class="max-lg:fixed max-lg:top-0 max-lg:left-0 max-lg:w-2/3 max-lg:min-w-[280px] max-lg:h-full max-lg:bg-[var(--variable-secondary)] max-lg:shadow-2xl max-lg:px-6 max-lg:py-6 max-lg:overflow-auto z-[60] lg:flex lg:gap-x-4">

                    <li class="lg:hidden flex justify-end mb-6">
                        <button @click="open = false" class="text-white text-2xl">&times;</button>
                    </li>

                    <li class="max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.category', 'BICI') }}"
                            class="rounded-md p-1 text-white hover:text-gray-300 flex items-center {{ request()->routeIs('app.category') && request()->route('categoryName') == 'BICI' ? 'bg-[var(--variable-secondary-hover)] sm:bg-[var(--variable-tertiary-dark)]' : '' }}">
                            <i class="hgi hgi-stroke hgi-bicycle"></i>
                            <span class="ml-2">Bicicletas</span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.category', 'RBIC') }}"
                            class="rounded-md p-1 text-white hover:text-gray-300 flex items-center {{ request()->routeIs('app.category') && request()->route('categoryName') == 'RBIC' ? 'bg-[var(--variable-secondary-hover)] lg:bg-[var(--variable-tertiary-dark)]' : '' }}">
                            <i class="hgi hgi-stroke hgi-repair"></i>
                            <span class="ml-2">Todo para bicicletas</span>
                        </a>
                    </li>
                    <li class="max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.category', 'MOTO') }}"
                            class="rounded-md p-1 text-white hover:text-gray-300 flex items-center {{ request()->routeIs('app.category') && request()->route('categoryName') == 'MOTO' ? 'bg-[var(--variable-secondary-hover)] lg:bg-[var(--variable-tertiary-dark)]' : '' }}">
                            <i class="hgi hgi-stroke hgi-baseball-helmet"></i>
                            <span class="ml-2">Todo para motocicletas</span>
                        </a>
                    </li>

                    <li class="lg:hidden max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.we-are') }}" class="rounded-md p-1 flex text-white hover:text-gray-300 {{ request()->routeIs('app.we-are') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">Quiénes Somos</a>
                    </li>
                    <li class="lg:hidden max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.distributors') }}" class="rounded-md p-1 flex text-white hover:text-gray-300 {{ request()->routeIs('app.distributors') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">Distribuidores</a>
                    </li>
                    <li class="lg:hidden max-lg:border-b max-lg:border-gray-700 max-lg:py-3 px-3">
                        <a href="{{ route('app.contact-us') }}" class="rounded-md p-1 flex text-white hover:text-gray-300 {{ request()->routeIs('app.contact-us') ? 'bg-[var(--variable-secondary-hover)]' : '' }}">Contacto</a>
                    </li>
                </ul>
            </div>

            {{-- Buscador --}}
            {{-- <div class="flex items-center w-72 bg-white border text-gray-500 border-gray-300 rounded-lg">
                <input type="text" placeholder="Busca en todo el catálogo aquí..." name="searchField"
                    class="bg-transparent border-none text-sm w-full px-4 h-7 outline-none focus:ring-0 max-sm:hidden" />
                <i class="fa-solid fa-magnifying-glass mr-2"></i>
            </div> --}}
            <div
                class="flex items-center w-full max-w-72 bg-white border text-gray-500 border-gray-300 rounded-lg overflow-hidden">
                <input type="text" placeholder="Buscar..." name="searchField"
                    class="bg-transparent border-none text-sm w-full px-4 h-8 outline-none focus:ring-0" />
                <button class="px-3"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
</header>
