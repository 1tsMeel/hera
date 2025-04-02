<x-home-layout>
    <div class="container mx-auto px-4 py-8 flex flex-col">
        <div>
            <h1 class="text-5xl mb-4">Contacto</h1>
            <h2 class="text-2xl">¡Contáctanos y te contactamos!</h2>
        </div>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="api-card mt-3">
                <x-validation-errors class="mb-4" />
                <label for="name mb-3">
                    <strong>
                        Nombre completo
                    </strong>
                </label><br>
                <input type="text" placeholder="Escribe tu nombre completo" name="name" class="w-full" value="{{ old('name') }}" /><br><br>

                <label for="name mb-3">
                    <strong>
                        Correo
                    </strong>
                </label><br>
                <input type="email" placeholder="Escribe tu correo electrónico" name="email" class="w-full" value="{{ old('email') }}" /><br><br>

                <label for="name mb-3">
                    <strong>
                        Teléfono
                    </strong>
                </label><br>
                <input type="text" placeholder="Escribe tu número telefónico" name="phone" class="w-full" value="{{ old('phone') }}" /><br><br>

                <label for="name mb-3">
                    <strong>
                        Mensaje
                    </strong>
                </label><br>
                <textarea cols="30" rows="10" class="w-full" name="msg" placeholder="Escríbenos..." value="{{ old('msg') }}"></textarea><br><br>
                <div>
                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-700 focus:ring-blue-300">
                        Mandar
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-home-layout>
