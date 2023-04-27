<?php

namespace App\Http\Controllers;

use App\Models\CartSession;
use App\Models\UserSession;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\Cart;
use App\Models\ProductPicture;
use App\Models\Finder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    public function createCartDB($id) {
        $cart = new Cart();
        $cart->customer_id = $userDB->id;
        $cart->price = 0;
        $cart->status = true;
        $cart->save();
    }

    public function createProductCartDB($cart_id, $product_id, $size, $quantity) {
        if (ProductCart::where('cart_id', $cart_id)->where('product_id', $product_id)->exists()) return;
        $productcart = new ProductCart();
        $productcart->cart_id = $cart_id;
        $productcart->product_id = $product_id;
        $productcart->size = $size;
        $productcart->quantity = $quantity;
        $productcart->save();
    }

    public function cartAddAuth(Request $request, $product_id) {
        $product = Product::find($product_id);
        $userSession = Session::has('user') ? Session::get('user'): null;
        if (!$userSession) return redirect('select-product/' . $product_id);

        $userDB = User::where("email", $userSession->email)->get()[0];
        $cart = Cart::where("customer_id", $userDB->id)->where("status", TRUE)->get();
        if (!$cart[0]) {
            $this->createCartDB($id);
            $cart = Cart::where("customer_id", $userDB->id)->where("status", TRUE)->get();
        }
        $size = $request->input('size');
        $number = $request->input('prod_num');
        $this->createProductCartDB($cart[0]->id, $product_id, $size, $number);

        $oldcart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new CartSession($oldcart);

        $finder = new Finder();
        $max_number = $finder->findOneSize($product_id, $size)[0]->quantity;
        $cart->add($product, $product->id, $size, $number, $max_number);

        $request->session()->put('cart', $cart);

        return redirect()->route('homepage');
    }

    public function cartDeleteAuth(Request $request, $product_id) {
        $product = Product::find($product_id);
        $user = Session::get('user');
        if (!$user) return redirect('cart');

        $cart = Cart::where("customer_id", $user->id)->where("status", TRUE)->get()[0];
        if (ProductCart::where("cart_id", $cart->id)->where("product_id", $product_id)->exists()) {
            ProductCart::where("cart_id", $cart->id)->where("product_id", $product_id)->delete();
        }

        $oldcart = Session::get('cart');
        $oldcart->delete($product, $product->id);
        $picture_finder = new Finder();

        $request->session()->put('cart', $oldcart);

        return redirect()->route('getCart');
    }

    public function listCartDB($cartDB, $cart) {
        $product_carts = DB::select("SELECT count(*), pc.product_id, pc.cart_id, pc.size, pc.quantity, pr.price,
                                    pr.title, pr.category, pr.description, pr.brand, pr.created_at, pr.onsale
                                    FROM product_carts AS pc
                                    JOIN products AS pr
                                    ON pr.id = pc.product_id
                                    JOIN size_products AS sp
                                    ON pc.product_id = sp.product_id
                                    WHERE pc.cart_id = ?
                                    GROUP BY pc.product_id, pc.cart_id, pc.size, pc.quantity, pr.price,
                                    pr.title, pr.category, pr.description, pr.brand, pr.created_at, pr.onsale;",
                                    [$cartDB->id]);

        $full_price = 0;
        foreach ($product_carts as $product) {
            $cart->restore($product, $product->product_id, count($product_carts));
            $full_price += $product->price;
        }
        $cartDB->price = $full_price;
        $cartDB->save();
    }

    public function getCartCount($userId) {
        return count(Cart::join('product_carts', 'product_carts.cart_id', '=', 'carts.id')
        ->where("customer_id", $userId)->where("status", TRUE)->get());
    }

    public function getCartAuth(Request $request) {
        $new_cart = new CartSession([]);

        $user = Session::get('user');
        if (!$user) return redirect('cart');

        if (!Session::has('cart')) {
            $cart = Cart::where("customer_id", $user->id)->where("status", TRUE)->get();
            if ($cart->isEmpty()) {
                $new_cart = Session::get('cart');
                return view('cart', ['products' => [], 'picture_finder' => null]);
            }
            else $cart = $cart[0];
            $this->listCartDB($cart, $new_cart);
        }
        else if (count(Session::get('cart')->items) != $this->getCartCount($user->id)) {
            $cart = Cart::where("customer_id", $user->id)->where("status", TRUE)->get();
            if (!$cart[0]) return view('cart', ['products' => [], 'picture_finder' => null]);
            else $cart = $cart[0];
            $this->listCartDB($cart, $new_cart);
        }
        else $new_cart = Session::get('cart'); 
        
        $request->session()->put('cart', $new_cart);
        $picture_finder = new Finder();
        return view('cart', ['products' => $new_cart->items, 'picture_finder' => $picture_finder]);
    }

    public function cartAdd(Request $request, $product_id) {
        $product = Product::find($product_id);
        $oldcart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new CartSession($oldcart);

        $size = $request->input('size');
        $number = $request->input('prod_num');
        $finder = new Finder();
        $max_number = $finder->findOneSize($product_id, $size)[0]->quantity;
        $cart->add($product, $product->id, $size, $number, $max_number);

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
        $cart = new CartSession($oldcart);
        $picture_finder = new Finder();
        return view('cart', ['products' => $cart->items, 'picture_finder' => $picture_finder]);
    }
}