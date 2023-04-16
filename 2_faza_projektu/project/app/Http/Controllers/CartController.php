<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Finder;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function cartAdd(Request $request, $product_id) {
        $product = Product::find($product_id);
        $oldcart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldcart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('homepage');
    }

    
    public function cartDelete(Request $request, $product_id) {
        $product = Product::find($product_id);
        $oldcart = Session::get('cart');
        $oldcart->delete($product, $product->id);
        $picture_finder = new Finder();

        $request->session()->put('cart', $oldcart);

        return redirect()->route('getCart');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $picture_finder = new Finder();
        return view('cart', ['products' => $cart->items, 'picture_finder' => $picture_finder]);
    }
}