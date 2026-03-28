<x-store-layout>
    <div class="flex items-center">
        {{-- Panel izquierdo --}}
        <div class="w-[60%] p-auto flex justify-center">
            <div class="max-h-min max-w-2xl p-10">
                <div class="mx-auto rounded-xl max-w-max" x-data="{
                    active: 0,
                    images: [
                        '{{ asset('images/store/prototype/prueba.png') }}',
                        '{{ asset('images/store/prototype/banner.png') }}',
                        '{{ asset('images/store/prototype/prueba2.png') }}'
                    ],
                    next() { this.active = (this.active + 1) % this.images.length },
                    prev() { this.active = (this.active - 1 + this.images.length) % this.images.length }
                }">

                    <div
                        class="relative max-h-[70dvh] bg-white border border-gray-100 rounded-lg mb-8 overflow-hidden aspect-square flex items-center justify-center">
                        <img :src="images[active]"
                            class="max-h-full object-contain transition-all duration-500 transform hover:scale-105"
                            alt="Producto">
                    </div>

                    <div class="flex items-center justify-between gap-4">

                        <button @click="prev()"
                            class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18""" ) />>
                            </svg>
                        </button>

                        <div class="flex gap-2 overflow-hidden">
                            <template x-for="(img, index) in images" :key="index">
                                <button @click="active = index"
                                    :class="active === index ? 'border-blue-400 ring-2 ring-blue-100' :
                                        'border-gray-200 opacity-60 hover:opacity-100'"
                                    class="w-16 h-16 sm:w-20 sm:h-20 border-2 rounded-md overflow-hidden bg-white transition-all flex items-center justify-center p-1">
                                    <img :src="img" class="max-h-full object-contain">
                                </button>
                            </template>
                        </div>

                        <button @click="next()"
                            class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Panel derecho --}}
        <div class="w-[40%] py-20 mr-20">
            <div class="flex flex-col gap-4">
                <h1 class="text-xl font-bold">
                    ACEITE MINERAL PARA MOTOCICLETA NAHEL 4 TIEMPOS 20W-50 SJ
                </h1>
                <div class="flex justify-between">
                    <div>
                        <div>
                            <span class="font-bold text-gray-500">
                                CÓDIGO:
                            </span>
                            <span>
                                MACE000050000
                            </span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-500">
                                MARCA:
                            </span>
                            <span>
                                NAHEL
                            </span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span class="font-bold text-gray-500">
                                MODELO:
                            </span>
                            <span>
                                SJ
                            </span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-500">
                                SUBEMPAQUE:
                            </span>
                            <span>
                                1
                            </span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span class="font-bold text-gray-500">
                                ORIGEN:
                            </span>
                            <span>
                                CHINA
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="border-t border-black">
            </div>
            <div class="flex flex-col gap-4 mt-10">
                <div>
                    <h2 class="font-bold text-lg">
                        CARACTERÍSTICAS:
                    </h2>
                    <p>
                        NO CONTAMINE: EVITE TIRAR EL ACEITE POR EL DESAGÜE O ALCANTARILLADO, Y DISPONGA DE LOS ENVASES Y
                        ACEITES RESIDUOS EN SITIOS AUTORIZADOS.
                    </p>
                </div>
                <div>
                    <h2 class="font-bold text-lg">
                        RECOMENDACIONES:
                    </h2>
                    <p>
                        NO SE INGIERA: EN CASO DE SER INGERIDO, EVITE PROVOCAR VOMITO Y RECURRA A SU MÉDICO.
                    </p>
                </div>
                <div>
                    <h2 class="font-bold text-lg">
                        COMPATIBILIDAD:
                    </h2>
                    <p>
                        APLICACIÓN UNIVERSAL PARA MOTOS DE 4 TIEMPOS.
                    </p>
                </div>
            </div>
            <div class="flex justify-center gap-4 mt-10">
                <div>
                    <label
                        class="flex justify-center items-center bg-[var(--variable-primary)] text-white text-xl font-bold py-4 px-10 rounded-full">
                        Más información
                    </label>
                </div>
            </div>
            <div class="flex justify-between mt-10 text-gray-600">
                <div class="flex items-center gap-1">
                    <i class="hgi hgi-stroke hgi-arrow-reload-horizontal"></i>
                    Compara este producto
                </div>
                <div class="flex items-center gap-1">
                    Comparte este producto:
                    <i class="fa-regular fa-clone"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
