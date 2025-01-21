<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required'
        ]);

        Brand::create($request->all());

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Marca creada correctamente.'
        ]);

        return redirect()->route('admin.brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'max:50|required'
        ]);

        $brand->update($request->all());

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Marca actualizada correctamente.'
        ]);

        return redirect()->route('admin.brands.edit', $brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand->products->count() > 0) {
            session()->flash('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'No se puede eliminar la marca porque tiene productos asociados.'
            ]);

            return redirect()->route('admin.brands.edit', $brand);
        }

        $brand->delete();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Eliminado!',
            'text' => 'Marca eliminada correctamente.'
        ]);

        return redirect()->route('admin.brands.index');
    }
}
