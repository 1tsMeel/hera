<div class="card">
    <x-validation-errors class="mb-4" />
    <form wire:submit="save">

        <div class="mb-4">
            <x-label class="mb-2">
                Imagen (toca para actualizar)
            </x-label>
            <figure class="m-2">
                <label class="relative">
                    <img id="preview" src="{{ $image ? $image->temporaryUrl() : Storage::url($productEdit['image_path']) }}" alt="" class="object-scale-down h-48">
                    <x-input type="file" class="w-full mb-4 hidden" 
                        wire:model.live="image"
                        accept="image/*"
                        id="picture" />
                </label>
            </figure>

            @error('image_path')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="mb-4">
            <x-label>
                Marca
            </x-label>

            <x-select class="w-full mt-2" wire:model.live="brand_id">

                <option value="" disabled selected>Selecciona la marca</option>

                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">
                        {{ $brand->name }}
                    </option>
                @endforeach

            </x-select>
        </div>

        <div class="mb-4 flex justify-center gap-2">
            <div class="w-1/2">
                <x-label>
                    Clasificación
                </x-label>
    
                <x-select class="w-full mt-2" wire:model.live="classification_id">
    
                    <option value="" disabled selected>Selecciona la clasificación</option>
    
                    @foreach ($classifications as $classification)
                        <option value="{{ $classification->id }}">
                            {{ $classification->name }}
                        </option>
                    @endforeach
    
                </x-select>
            </div>
            
            <div class="w-1/2">
                <x-label>
                    Tipos
                </x-label>
    
                <x-select class="w-full mt-2" wire:model.live="type_id">
    
                    <option value="" disabled selected>Selecciona el tipo</option>
    
                    @foreach ($this->types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->name }}
                        </option>
                    @endforeach
    
                </x-select>
            </div>
        </div>

        <div class="mb-4 flex justify-center gap-2">
            <div class="w-1/2">
                <x-label>
                    Nombre
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="productEdit.name"
                        placeholder="Ingrese el nombre del producto" />
            </div>

            <div class="w-1/2">
                <x-label>
                    Código SKU
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="productEdit.sku"
                        placeholder="Ingrese el SKU del producto" />
            </div>
        </div>

        <div class="mb-4 flex justify-center gap-2">
            <div class="w-1/2">
                <x-label>
                    Precio
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="productEdit.price"
                        placeholder="Ingrese el precio del producto" />
            </div>

            <div class="w-1/2">
                <x-label>
                    Unidad
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="productEdit.unit"
                        placeholder="Ingrese la unidad del producto" />
            </div>
        </div>

        <div class="mb-4 grid grid-cols-3 justify-items-center">
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="productEdit.is_featured" @checked($this->productEdit['is_featured']) />
                <x-label>
                    Es destacado
                </x-label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="productEdit.is_new_from_stock" @checked($this->productEdit['is_new_from_stock']) />
                <x-label>
                    Es nuevo de stock
                </x-label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="productEdit.is_best_seller" @checked($this->productEdit['is_best_seller']) />
                <x-label>
                    Es más vendido
                </x-label>
            </div>
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Descripción del producto
            </x-label>
            
            <x-textarea class="w-full mt-2"
                        rows="4"
                        wire:model.live="productEdit.description"
                        placeholder="Ingrese la descripción del producto" />
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

    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" id="delete-form">
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

    {{-- @dump($productEdit) --}}
</div>
