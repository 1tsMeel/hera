<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Marcas',
        'route' => route('admin.brands.index'),
    ],
    [
        'name' => 'Nueva',
    ],
]">

    <div class="card">
        <x-validation-errors class="mb-4" />
        <form action="{{ route('admin.brands.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <x-label>
                    Nombre
                </x-label>

                <x-input class="w-full mt-2" placeholder="Ingresa el nombre de la Marca" name="name"
                    value="{{ old('name') }}" />
            </div>

            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>
        </form>
    </div>

</x-admin-layout>
