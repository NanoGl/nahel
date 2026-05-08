<x-store-layout>
    <div class="flex flex-col gap-2 m-8 mx-14">
        <h1 class="text-3xl font-bold">
            Búsqueda: {{ $userSearch }}
        </h1>
        <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
    </div>
    @if (count($products) > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 grid-cols-1 mx-10">
            @foreach ($products as $product)
                <a href="{{ route('app.product', $product['CODIGO']) }}"
                    class="text-center card mx-10 my-4 flex flex-col justify-between hover:scale-105 transition-all duration-300 transform">
                    <div>
                        <img src="{{ $product['IMG'] }}" class="max-h-20 mx-auto" alt="">
                        <div class="text-sm">
                            {{ $product['CODIGO'] }}
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-center items-end">
                            <div class="max-w-[90%] font-bold text-sm">
                                {{ $product['DESCRIPCION'] }}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mt-4 mb-4 flex justify-center">
            {{ $products->links() }}
        </div>
    @else
        <div class="mx-10 mb-10 lg:mb-auto">
            <p>
                No se han encontrado productos con el siguiente texto: <strong>{{ $userSearch }}</strong>.
            </p>
            <p>
                Intenta con algo más.
            </p>
        </div>
    @endif

</x-store-layout>
