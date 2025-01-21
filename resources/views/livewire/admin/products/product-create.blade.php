<div class="card">
    <x-validation-errors class="mb-4" />
    <form wire:submit="save">
        <div class="mb-4">
            <x-label>
                Marca
            </x-label>

            <x-select class="w-full mt-2" wire:model.live="product.brand_id">

                <option value="" disabled selected>Selecciona la marca</option>

                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" @selected(old('brand_id') == $brand->id)>
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
    
                <x-select class="w-full mt-2" wire:model.live="product.classification_id">
    
                    <option value="" disabled selected>Selecciona la clasificación</option>
    
                    @foreach ($classifications as $classification)
                        <option value="{{ $classification->id }}" @selected(old('classification_id') == $classification->id)>
                            {{ $classification->name }}
                        </option>
                    @endforeach
    
                </x-select>
            </div>
            
            <div class="w-1/2">
                <x-label>
                    Tipos
                </x-label>
    
                <x-select class="w-full mt-2" wire:model.live="product.type_id">
    
                    <option value="" disabled selected>Selecciona el tipo</option>
    
                    @foreach ($this->types as $type)
                        <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>
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
                        wire:model.live="product.name"
                        placeholder="Ingrese el nombre del producto" />
            </div>

            <div class="w-1/2">
                <x-label>
                    Código SKU
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="product.sku"
                        placeholder="Ingrese el SKU del producto" />
            </div>
        </div>

        <div class="mb-4 flex justify-center gap-2">
            <div class="w-1/2">
                <x-label>
                    Precio
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="product.price"
                        placeholder="Ingrese el precio del producto" />
            </div>

            <div class="w-1/2">
                <x-label>
                    Unidad
                </x-label>

                <x-input class="w-full mt-2"
                        wire:model.live="product.unit"
                        placeholder="Ingrese la unidad del producto" />
            </div>
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Imagen
            </x-label>
            <figure class="m-2">
                <img id="preview" src="{{ $image ? $image->temporaryUrl() : asset('img/no-image.png') }}" alt="" class="object-scale-down h-24">
            </figure>
            <x-input type="file" class="w-full mb-4" 
                wire:model.live="image"
                accept="image/*"
                id="picture" />

            @error('image_path')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4 grid grid-cols-3 justify-items-center">
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="product.is_featured" />
                <x-label>
                    Es destacado
                </x-label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="product.is_new_from_stock" />
                <x-label>
                    Es nuevo de stock
                </x-label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" wire:model.live="product.is_best_seller" />
                <x-label>
                    Es más vendido
                </x-label>
            </div>
        </div>

        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>
    </form>

    @dump($product)
</div>
