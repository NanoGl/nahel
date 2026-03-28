<x-store-layout>
    <div class="flex justify-center">
        <figure class="relative">
            <div class="absolute bottom-20 left-1/2 -translate-x-1/2">
                <label class="flex items-center bg-[var(--variable-primary)] text-white text-xl font-bold py-4 px-36 rounded-full">
                    Ver más
                </label>
            </div>
            {{-- aspect-[16/9] object-cover object-center w-full --}}
            <img class="w-full" src="{{ asset('images/store/prototype/banner.png') }}" alt="">
        </figure>
    </div>

    @include('layouts.partials.app.primary-bar')

    <div class="m-10">
        <div class="px-32 py-10">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold">
                    Explora nuestras categorías más vistas:
                </h1>
                <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
            </div>
            <div class="flex justify-between gap-7 mt-10">
                <div class="card items-center flex flex-col">
                    <figure>
                        <img src="{{ asset('images/store/prototype/prueba.png') }}" alt="">
                    </figure>
                    <span class="uppercase">
                        Bicicletas
                    </span>
                </div>
                <div class="card items-center flex flex-col">
                    <figure>
                        <img src="{{ asset('images/store/prototype/prueba.png') }}" alt="">
                    </figure>
                    <span class="uppercase">
                        Bujías
                    </span>
                </div>
                <div class="card items-center flex flex-col">
                    <figure>
                        <img src="{{ asset('images/store/prototype/prueba.png') }}" alt="">
                    </figure>
                    <span class="uppercase">
                        Aceites
                    </span>
                </div>
                <div class="card items-center flex flex-col">
                    <figure>
                        <img src="{{ asset('images/store/prototype/prueba.png') }}" alt="">
                    </figure>
                    <span class="uppercase">
                        Llantas
                    </span>
                </div>
                <div class="card items-center flex flex-col">
                    <figure>
                        <img src="{{ asset('images/store/prototype/prueba.png') }}" alt="">
                    </figure>
                    <span class="uppercase">
                        Acumuladores
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>