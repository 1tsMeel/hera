<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Classification;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function importGet()
    {
        return view('app.products.import');
    }

    public function importPost(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            $datos = Excel::toArray([], $path);

            if (!empty($datos) && count($datos) > 0) {
                $datosImportar = [];

                foreach ($datos[0] as $index => $dato) {
                    $created_at = Carbon::createFromTimestamp(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp(floatval($dato[12]))) ?? null;
                    $updated_at = Carbon::createFromTimestamp(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp(floatval($dato[13]))) ?? null;
                    if ($index == 0)
                        continue;
                    $datosImportar[] = [
                        'id' => $dato[0],
                        'brand_id' => $dato[1],
                        'type_id' => $dato[2],
                        'name' => $dato[3],
                        'unit' => $dato[4],
                        'image_path' => $dato[5],
                        'price' => $dato[6],
                        'sku' => $dato[7],
                        'description' => $dato[8],
                        'is_featured' => $dato[9],
                        'is_new_from_stock' => $dato[10],
                        'is_best_seller' => $dato[11],
                        //'created_at' => $created_at,
                        //'updated_at' => $updated_at,
                    ];
                }

                Product::insert($datosImportar);

                return back();
            }
        }
        return back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::with(['brand', 'type'])
            ->orderBy('name', 'asc')
            ->get();
        $classifications = Classification::orderBy('name', 'asc')
            ->get();
        $brands = Brand::orderBy('name', 'asc')
            ->get();
        return view('app.products.index', compact([
            'products',
            'classifications',
            'brands',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Hola";
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
        return view('app.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
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
        //
    }
}
