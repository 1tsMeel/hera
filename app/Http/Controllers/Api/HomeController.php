<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products = Product::where('brand_id', 4)->get(); // Brand_id = 4 es la marca llamada "Corporis."
        return view('app.index', compact('products'));
    }
}
