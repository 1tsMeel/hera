<?php

namespace App\Livewire\Admin\Products;

use App\Models\Brand;
use App\Models\Classification;
use App\Models\Product;
use App\Models\Type;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $confirmButtonColor = "purple";
    
    public $classifications, $brands;

    public $image;

    public $product = [
        'classification_id' => '',
        'type_id' => '',
        'brand_id' => '',
        'name' => '',
        'unit' => '',
        'image_path' => '',
        'price' => '',
        'sku' => '',
        'description' => '',
        'is_featured' => '',
        'is_new_from_stock' => '',
        'is_best_seller' => ''
    ];

    public function mount()
    {
        $this->classifications = Classification::all();
        $this->brands = Brand::all();

        $this->product['is_featured'] = false;
        $this->product['is_new_from_stock'] = false;
        $this->product['is_best_seller'] = false;
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

    public function updatedProductClassificationId()
    {
        $this->product['type_id'] = '';
    }

    #[Computed()]
    public function types()
    {
        return Type::where('classification_id', $this->product['classification_id'])->get();
    }

    public function save()
    {
        $this->validate([
            'product.classification_id' => 'required|exists:classifications,id',
            'product.type_id' => 'required|exists:types,id',
            'product.brand_id' => 'required|exists:brands,id',
            'product.name' => 'required|max:50',
            'product.price' => 'required|numeric|min:0',
            'product.unit' => 'required|max:20',
            'image' => 'required|image|max:5120',
            'product.sku' => 'required|max:255|unique:products,sku',
            'product.description' => 'required',
            'product.is_featured' => 'required',
            'product.is_new_from_stock' => 'required',
            'product.is_best_seller' => 'required'
        ], [], [
            'product.classification_id' => 'clasificación',
            'product.type_id' => 'tipo',
            'product.brand_id' => 'marca',
            'product.name' => 'nombre',
            'product.price' => 'precio',
            'product.unit' => 'unidad',
            'image' => 'imagen',
            'product.sku' => 'código/sku',
            'product.description' => 'descripción',
            'product.is_featured' => 'destacado',
            'product.is_new_from_stock' => 'nuevo',
            'product.is_best_seller' => 'más vendido'
        ]);

        $this->product['image_path'] = $this->image->store('products');

        Product::create($this->product);

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Producto creado correctamente.',
            'confirmButtonColor' => $this->confirmButtonColor,
        ]);

        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('livewire.admin.products.product-create');
    }
}
