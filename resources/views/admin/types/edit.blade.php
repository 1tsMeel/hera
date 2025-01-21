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
        'name' => $type->name,
    ],
]">

    <div class="card">

        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <x-label>
                    Clasificación
                </x-label>

                <x-select class="w-full mt-2" name="classification_id">
                    <option value="" disabled selected>Selecciona la clasificación</option>
                    @foreach ($classifications as $classification)
                        <option value="{{ $classification->id }}" @selected(old('classification_id', $type->classification_id) == $classification->id)>{{ $classification->name }}</option>
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
                    value="{{ old('name', $type->name) }}"/>
            </div>

            <div class="flex justify-end">
                <x-danger-button onclick="confirmDelete()">
                    Eliminar
                </x-danger-button>

                <x-button class="ml-4">
                    Actualizar
                </x-button>
            </div>
        </form>
    </div>

    <form action="{{ route('admin.types.destroy', $type) }}" method="POST" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

    @push('js')
        <script>
            function confirmDelete() {
                Swal.fire({
                    title: "¿Estás seguro/a?",
                    text: "No se podrán deshacer los cambios.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, elimínalo",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form').submit();
                    }
                });
            }
        </script>
    @endpush

</x-admin-layout>
