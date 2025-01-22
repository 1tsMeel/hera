<?php

namespace App\Livewire\Admin\Products;

use App\Models\Brand;
use App\Models\Classification;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;

    public $confirmButtonColor = "purple";

    public $product;
    public $productEdit;

    public $classifications, $brands;
    public $classification_id = '';
    public $type_id = '';
    public $brand_id = '';

    public $image;

    public function mount($product){
        $this->productEdit = $product->only(['name', 
                            'unit', 
                            'image_path', 
                            'price', 
                            'sku', 
                            'description',
                            'is_featured', 
                            'is_new_from_stock', 
                            'is_best_seller',
                            'brand_id',
                            'type_id',
        ]);

        $this->classifications = Classification::all();
        $this->brands = Brand::all();

        $this->classification_id = $product->type->classification_id;
        $this->brand_id = $product->brand_id;
        $this->type_id = $product->type_id;
    }

    public function boot(){
        $this->withValidator(function ($validator){
            if($validator->fails()){
                $this->dispatch('swal', [
                    'icon' => 'error',
                    'title' => '¡Error!',
                    'text' => 'El formulario contiene errores.',
                    'confirmButtonColor' => $this->confirmButtonColor,
                ]);
            }
        });
    }

    public function updatedClassificationId()
    {
        $this->productEdit['type_id'] = '';
    }

    #[Computed()]
    public function types()
    {
        return Type::where('classification_id', $this->classification_id)->get();
    }

    public function save()
    {
        $this->validate([
            'classification_id' => 'required|exists:classifications,id',
            'type_id' => 'required|exists:types,id',
            'brand_id' => 'required|exists:brands,id',
            'productEdit.name' => 'required|max:50',
            'productEdit.price' => 'required|numeric|min:0',
            'productEdit.unit' => 'required|max:20',
            'image' => 'nullable|image|max:5120',
            'productEdit.sku' => 'required|max:255|unique:products,sku,'.$this->product->id,
            'productEdit.description' => 'required',
            'productEdit.is_featured' => 'required',
            'productEdit.is_new_from_stock' => 'required',
            'productEdit.is_best_seller' => 'required'
        ], [], [
            'classification_id' => 'clasificación',
            'type_id' => 'tipo',
            'brand_id' => 'marca',
            'productEdit.name' => 'nombre',
            'productEdit.price' => 'precio',
            'productEdit.unit' => 'unidad',
            'image' => 'imagen',
            'productEdit.sku' => 'código/sku',
            'productEdit.description' => 'descripción',
            'productEdit.is_featured' => 'destacado',
            'productEdit.is_new_from_stock' => 'nuevo',
            'productEdit.is_best_seller' => 'más vendido'
        ]);

        if($this->image){
            Storage::delete($this->productEdit['image_path']);
            $this->productEdit['image_path'] = $this->image->store('products');
        }

        $this->product->update($this->productEdit);

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Producto actualizado correctamente.',
            'confirmButtonColor' => $this->confirmButtonColor,
        ]);

        return redirect()->route('admin.products.edit', $this->product);
    }
    
    public function render()
    {
        return view('livewire.admin.products.product-edit');
    }
}
