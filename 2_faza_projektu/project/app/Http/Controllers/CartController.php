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

        $size = $request->input('size');
        $cart->add($product, $product->id, $size);

        $request->session()->put('cart', $cart);

        return redirect()->back();
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