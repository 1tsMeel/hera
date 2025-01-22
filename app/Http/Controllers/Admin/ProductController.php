<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public $confirmButtonColor = "purple";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('type.classification', 'brand')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('admin.products.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image_path);
        $product->delete();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Eliminado!',
            'text' => 'Producto eliminado correctamente.',
            'confirmButtonColor' => $this->confirmButtonColor,
        ]);

        return redirect()->route('admin.products.index');
    }
}
