<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Clasificaciones',
        'route' => route('admin.classifications.index'),
    ],
    [
        'name' => 'Nueva',
    ],
]">

    <div class="card">
        <form action="{{ route('admin.classifications.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <x-label>
                    Nombre
                </x-label>

                <x-input class="w-full mt-2"
                    placeholder="Ingresa el nombre de la clasificación"
                    name="name"
                    value="{{ old('name') }}"/>
            </div>

            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>
        </form>
    </div>

</x-admin-layout>
