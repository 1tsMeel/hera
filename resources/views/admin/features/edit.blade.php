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
        'name' => $feature->description,
    ],
]">

    <div class="card">

        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.features.update', $feature) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-label>
                    Descripción
                </x-label>

                <x-input class="w-full mt-2" placeholder="Ingresa la descripción de la característica" name="description"
                    value="{{ old('description', $feature->description) }}" />
            </div>

            <div class="flex justify-end">
                <x-danger-button onclick="confirmDelete()">
                    Eliminar
                </x-danger-button>

                <x-button class="ml-2">
                    Actualizar
                </x-button>
            </div>
        </form>
    </div>

    <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" id="delete-form">
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
                        /* Swal.fire({
                            title: "¡Eliminado!",
                            text: "Ha sido eliminado correctamente",
                            icon: "success"
                        }); */
                        document.getElementById('delete-form').submit();
                    }
                });
            }
        </script>
    @endpush

</x-admin-layout>
