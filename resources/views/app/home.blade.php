<x-store-layout>
    {{-- <div class="flex justify-center">
        <figure class="relative">
            <div class="absolute bottom-20 left-1/2 -translate-x-1/2">
                <label
                    class="flex items-center bg-[var(--variable-primary)] text-white text-xl font-bold py-4 px-36 rounded-full">
                    Ver más
                </label>
            </div>
            <!-- aspect-[16/9] object-cover object-center w-full -->
            <img class="w-full" src="{{ asset('images/store/prototype/banner.png') }}?v={{ time() }}"
                alt="">
        </figure>
    </div> --}}

    <div x-data="{
        active: 0,
        loop() { setInterval(() => { this.active = (this.active + 1) % {{ count($bannerSlides) }} }, 5000) }
    }" x-init="loop()"
        class="relative aspect-[16/9] object-cover object-center w-full overflow-hidden shadow-lg">

        <!-- Imágenes -->
        @foreach ($bannerSlides as $index => $slide)
            <div x-show="active === {{ $index }}" x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform scale-105"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0">
                <img src="{{ $slide['img'] }}?v={{ time() }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex flex-col items-center justify-end pb-16 bg-black/20">
                    <a href="{{ $slide['link'] }}"
                        class="px-6 py-3 bg-[var(--variable-primary)] text-white font-semibold rounded-lg shadow-xl transition-transform hover:scale-105">
                        Ver más
                    </a>
                </div>
            </div>
        @endforeach

        <!-- Botones de navegación (Opcional) -->
        <button @click="active = (active - 1 + {{ count($bannerSlides) }}) % {{ count($bannerSlides) }}"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
            &larr;
        </button>
        <button @click="active = (active + 1) % {{ count($bannerSlides) }}"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
            &rarr;
        </button>

        <!-- Indicadores -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
            @foreach ($bannerSlides as $index => $slide)
                <div @click="active = {{ $index }}"
                    :class="active === {{ $index }} ? 'bg-white w-6' : 'bg-white/50 w-2'"
                    class="h-2 rounded-full cursor-pointer transition-all duration-300">
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.partials.app.primary-bar')

    <div class="m-10 px-32 py-10 mb-12">
        @include('layouts.partials.app.categories')
    </div>

    {{-- <div class="grid grid-cols-3">
        @foreach ($products as $product)
            <div class="text-center card mx-10 my-4 flex flex-col gap-3">
                <div>
                    <img src="{{ $product['IMG'] }}" class="max-h-20 mx-auto" alt="">
                </div>
                <div>
                    <div class="text-sm">
                        {{ $product['CODIGO'] }}
                    </div>
                    <div class="flex justify-center items-end">
                        <div class="max-w-[90%]">
                            {{ $product['DESCRIPCION'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

    @push('js')
        <script>
            var toggleOpen = document.getElementById('toggleOpen');
            var toggleClose = document.getElementById('toggleClose');
            var collapseMenu = document.getElementById('collapseMenu');

            function handleClick() {
                if (collapseMenu.style.display === 'block') {
                    collapseMenu.style.display = 'none';
                } else {
                    collapseMenu.style.display = 'block';
                }
            }

            toggleOpen.addEventListener('click', handleClick);
            toggleClose.addEventListener('click', handleClick);
        </script>
    @endpush
</x-store-layout>
