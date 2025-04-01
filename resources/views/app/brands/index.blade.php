<x-home-layout>
    <div class="container mx-auto px-4 py-8 flex flex-col">
        <div>
            <h1 class="text-5xl mb-4">Nuestras marcas</h1>
            <h2 class="text-2xl">¡En HERA Herrajes y Cerraduras manejamos una extensa variedad de marcas para siempre ofrecerte calidad!</h2>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-10">
            @foreach ($brands as $brand)
                <div class="api-card">
                    {{ $brand->name }}
                </div>
            @endforeach
        </div>
    </div>

</x-home-layout>
