<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;


class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        //dd($products);
        return view('shop')->with(['products' => $products]);
    }

    public function cart()
    {
        $cartCollection = Cart::getContent();
        //dd($cartCollection);
        return view('app.cotizacion.index', compact('cartCollection'));
    }
    public function remove(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item Eliminado de su Carrito!');
    }

    public function add(Request $request)
    {
        Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a su Carrito!');
    }

    public function update(Request $request)
    {
        Cart::update(
            $request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            )
        );
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear()
    {
        Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
