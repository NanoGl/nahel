<x-store-layout>
    <div class="flex flex-col gap-2 m-8 mx-14">
        <h1 class="text-3xl font-bold">
            Contáctanos
        </h1>
        <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
    </div>
    <div class="my-8 mx-4 md:mx-14 flex justify-center">
        <section class="bg-[var(--variable-secondary)] text-white rounded-2xl">
            <div class="py-8 px-8 mx-auto max-w-screen-md">
                <h2 class="my-2 text-2xl lg:text-4xl tracking-tight font-extrabold text-center mb-4">
                    Formulario de Contacto
                </h2>
                <p class="mb-8 font-light text-center sm:text-md">
                    ¿Quisieras cotizar o preguntar por alguno de nuestros productos? ¡Contáctanos!
                </p>
                <form action="{{ route('app.contact-us-send') }}" class="space-y-8" method="POST" id="contactForm">
                    @csrf
                    <div class="block lg:grid lg:grid-cols-2 gap-5">
                        <div class="my-4 lg:my-auto">
                            <label for="name" class="block mb-2 text-sm font-medium">Nombre</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="Nombre(s)">
                            @error('name')
                                <p class="text-red-600"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="my-4 lg:my-auto">
                            <label for="last_name" class="block mb-2 text-sm font-medium">Apellidos</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="Apellidos">
                            @error('last_name')
                                <p class="text-red-600"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="my-4 lg:my-auto">
                            <label for="email" class="block mb-2 text-sm font-medium">Tu correo electrónico</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="nombre@dominio.com">
                            @error('email')
                                <p class="text-red-600"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="my-4 lg:my-auto">
                            <label for="phone" class="block mb-2 text-sm font-medium">Número de teléfono</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500 shadow-sm-light"
                                placeholder="+52 123 456 7890">
                            @error('phone')
                                <p class="text-red-600"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 text-sm font-medium ">Tu mensaje:</label>
                            <textarea id="message" rows="6"
                                class="block p-2.5 w-full text-sm rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:ring-primary-500 text-black focus:border-primary-500"
                                placeholder="Deja un comentario..." name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                    </div>
                    <button onclick="confirmSubmission()" type="button"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-800 sm:w-fit hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-primary-300 focus:ring-primary-800">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </section>
    </div>

    @push('js')
        <script>
            function confirmSubmission() {
                const form = document.querySelector('#contactForm');

                if (form.checkValidity()) {
                    Swal.fire({
                        title: "¿Quisieras mandar tu mensaje?",
                        text: "",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí!",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("contactForm").submit();
                        };
                    });
                } else {
                    form.reportValidity();
                }
            }
        </script>
    @endpush
</x-store-layout>
