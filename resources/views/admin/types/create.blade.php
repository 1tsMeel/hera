<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Tipos',
        'route' => route('admin.types.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">

    <div class="card">

        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <x-label>
                    Clasificación
                </x-label>

                <x-select class="w-full mt-2" name="classification_id">
                    <option value="" disabled selected>Selecciona la clasificación</option>
                    @foreach ($classifications as $classification)
                        <option value="{{ $classification->id }}" @selected(old('classification_id') == $classification->id)>{{ $classification->name }}</option>
                    @endforeach
                </x-select>
            </div>

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
