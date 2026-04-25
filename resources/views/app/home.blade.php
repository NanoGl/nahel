<x-store-layout>
    <div class="flex justify-center">
        <figure class="relative">
            <div class="absolute bottom-20 left-1/2 -translate-x-1/2">
                <label
                    class="flex items-center bg-[var(--variable-primary)] text-white text-xl font-bold py-4 px-36 rounded-full">
                    Ver más
                </label>
            </div>
            {{-- aspect-[16/9] object-cover object-center w-full --}}
            <img class="w-full" src="{{ asset('images/store/prototype/banner.png') }}?v={{ time() }}"
                alt="">
        </figure>
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
