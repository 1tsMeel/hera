<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Características',
        'route' => route('admin.features.index'),
    ],
    [
        'name' => 'Nueva',
    ],
]">

    <div class="card">
        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.features.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <x-label>
                    Descripción
                </x-label>

                <x-input class="w-full mt-2" placeholder="Ingresa la descripción de la característica" name="description"
                    value="{{ old('description') }}" />
            </div>

            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>
        </form>
    </div>

</x-admin-layout>
