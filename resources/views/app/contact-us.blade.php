<x-store-layout>
    <div class="flex flex-col gap-2 m-8 mx-14">
        <h1 class="text-3xl font-bold">
            Contáctanos
        </h1>
        <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
    </div>
    <div class="my-8 mx-14 flex justify-center">
        <section class="bg-[var(--variable-secondary)] text-white rounded-2xl">
            <div class="py-8 px-8 mx-auto max-w-screen-md">
                <h2 class="my-2 text-4xl tracking-tight font-extrabold text-center mb-4">
                    Formulario de Contacto
                </h2>
                <p class="mb-8 font-light text-center sm:text-xl">
                    ¿Quisieras cotizar o preguntar por alguno de nuestros productos? ¡Contáctanos!
                </p>
                <form action="#" class="space-y-8">
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium">Nombre</label>
                            <input type="text" id="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="Nombre(s)" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium">Apellidos</label>
                            <input type="text" id="last_name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="Apellidos" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">Tu correo electrónico</label>
                            <input type="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="nombre@dominio.com" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">Número de teléfono</label>
                            <input type="text" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="+52 123 456 7890" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block mb-2 text-sm font-medium ">Tu mensaje:</label>
                            <textarea id="message" rows="6"
                                class="block p-2.5 w-full text-sm rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:ring-primary-500 text-black focus:border-primary-500"
                                placeholder="Deja un comentario..."></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-800 sm:w-fit hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-primary-300 focus:ring-primary-800">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </section>
    </div>
</x-store-layout>
