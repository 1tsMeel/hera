<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Productos',
        'route' => route('admin.products.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">

    {{-- <div class="card">
        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.products.store') }}" method="POST">
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

            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>
        </form>
    </div> --}}

    @livewire('admin.products.product-create')

</x-admin-layout>
