<x-store-layout>
    <div class="my-8 mx-14">
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold">
                Quiénes Somos
            </h1>
            <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
        </div>
        <div class="mt-10 block lg:flex">
            <figure class="lg:w-[50%] w-[33%] mb-3 lg:mb-auto pr-7 flex justify-center items-center">
                <img class="w-full" src="{{ asset('images/we-are/logo.png') }}?v={{ time() }}" alt="">
            </figure>
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-bold">
                    Empresa orgullosamente Duranguense
                </h2>
                <p class="text-justify text-lg">
                    Nuestra historia se remonta a 1986, cuando fuimos fundados bajo el nombre de
                    Bicicletas Don Nabor. El 13 de marzo de 1990, adoptamos nuestro actual nombre,
                    Grupo Empresarial NAHEL, S.A. de C.V., reflejando nuestro crecimiento y evolución.
                    Nos especializamos en la fabricación y comercialización de bicicletas y refacciones,
                    ofreciendo productos de alta calidad a nuestros clientes en todo México.
                </p>
            </div>
        </div>
    </div>

    <div class="my-8 mx-14 mt-20">
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold">
                Nuestra historia
            </h1>
            <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
        </div>
        <div class="mt-6 flex flex-col lg:flex-row">
            <div class="flex flex-col justify-center order-2 lg:order-1">
                <p class="text-justify text-lg">
                    La historia de NAHEL comienza con Don Nabor Herrera Lugo, quien trabajaba
                    en la tienda de bicicletas "La Nacional". Tras su jubilación, Don Nabor instaló
                    un puesto de revistas y refrescos. Con su espíritu emprendedor, comenzó a
                    vender llantas, cadenas para bicicletas y otras refacciones. Así nació nuestro
                    negocio familiar, que ha crecido a lo largo de los años hasta convertirse en lo
                    que somos hoy: una red de sucursales y concesionarios que abarca diversos estados
                    de la República Mexicana.
                </p>
            </div>
            <figure
                class="lg:w-[52rem] w-[50%] mb-3 lg:mb-auto pl-7 flex justify-center items-center order-1 lg:order-2">
                <img class="w-full" src="{{ asset('images/we-are/bicis-bn.png') }}?v={{ time() }}"
                    alt="">
            </figure>
        </div>
    </div>

    <div class="mb-20">
        <figure class="px-7 flex justify-center items-center">
            <img class="w-full" src="{{ asset('images/we-are/plazuela.png') }}?v={{ time() }}" alt="">
        </figure>
    </div>
</x-store-layout>
