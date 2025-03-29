<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Classification;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::with(['brand', 'type'])
            ->where('is_featured', 1)
            ->orderBy('name', 'asc')
            ->get();
        $classifications = Classification::orderBy('name', 'asc')
            ->get();
        $brands = Brand::orderBy('name', 'asc')
            ->get();
        return view('app.index', compact([
            'products',
            'classifications',
            'brands',
        ]));

        /* $products = Product::where('brand_id', 10)->get();
        return view('app.index', compact('products')); */
    }
}
