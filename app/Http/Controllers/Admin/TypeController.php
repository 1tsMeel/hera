<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::orderBy('id', 'desc')->paginate(10);
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classifications = Classification::all();
        return view('admin.types.create', compact('classifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'classification_id' => 'required|exists:classifications,id',
            'name' => 'max:255|required',
        ], [], [
            'classification_id' => 'clasificación',
            'name' => 'nombre'
        ]);

        Type::create($request->all());

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Tipo creado correctamente.'
        ]);

        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $classifications = Classification::all();
        return view('admin.types.edit', compact('type', 'classifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'classification_id' => 'required|exists:classifications,id',
            'name' => 'max:255|required',
        ], [], [
            'classification_id' => 'clasificación',
            'name' => 'nombre'
        ]);

        $type->update($request->all());

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Tipo actualizado correctamente.'
        ]);

        return redirect()->route('admin.types.edit', $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        if($type->products->count() > 0){
            session()->flash('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'No se puede eliminar el tipo porque tiene productos asociados.'
            ]);

            return redirect()->route('admin.types.edit', $type);
        }

        $type->delete();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Eliminado!',
            'text' => 'Tipo eliminado correctamente.'
        ]);

        return redirect()->route('admin.types.index');
    }
}
