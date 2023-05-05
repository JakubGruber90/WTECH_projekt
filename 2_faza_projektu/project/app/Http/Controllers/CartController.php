<?php

namespace App\Http\Controllers;

use App\Models\CartSession;
use App\Models\SizeProduct;
use App\Models\UserSession;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Size;
use App\Models\OrderProduct;
use App\Models\ProductPicture;
use App\Models\Finder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
    public function createCartDB($userDB) {
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

    public function recalculatePrice($cartDB) {
        echo "<script>console.log('" . $cartDB . "' );</script>";
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
            $full_price += $product->price*$product->quantity;
        }
        $cartDB->price = $full_price;
        $cartDB->save();
    }

    public function cartAddAuth(Request $request, $product_id) {
        $product = Product::find($product_id);
        $userSession = Session::has('user') ? Session::get('user'): null;
        if (!$userSession) return redirect('select-product/' . $product_id);

        $userDB = User::where("email", $userSession->email)->get()[0];
        $cart = Cart::where("customer_id", $userDB->id)->where("status", TRUE)->get();
        if (!$cart || $cart->count() == 0) {
            $this->createCartDB($userDB);
            $cart = Cart::where("customer_id", $userDB->id)->where("status", TRUE)->get();
        }
        $size = $request->input('size');
        $number = $request->input('prod_num');
        $this->createProductCartDB($cart[0]->id, $product_id, $size, $number);
        $this->recalculatePrice($cart[0]);

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

        $this->recalculatePrice($cart);
        $oldcart = Session::get('cart');
        $oldcart->delete($product, $product->id);

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
            $full_price += $product->price*$product->quantity;
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
        else if (Session::get('cart')->items == null || count(Session::get('cart')->items) != $this->getCartCount($user->id)) {
            $cart = Cart::where("customer_id", $user->id)->where("status", TRUE)->get();
            if (!$cart || $cart->count() == 0) return view('cart', ['products' => [], 'picture_finder' => null]);
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

    public function saveOrder (Request $request) {
        if (strlen($request->input('phone_number')) != 13) return back();
        if (strlen($request->input('address')) < 3) return back();
        if (strlen($request->input('postal_code')) != 5) return back();
        if (strlen($request->input('city')) < 3) return back();
        if (strlen($request->input('country')) < 5) return back();

        $order = new Order();
        $cart = Session::get('cart');
        $total_price = null;
        foreach ($cart->items as $item) {
            $total_price += $item['item']->price*$item['item']->number;
        }

        if (Auth::user() !== null) {
            $order->customer_id = Auth::user()->id;
            $cartDB = Cart::where('customer_id', Auth::user()->id)->where('status', TRUE)->limit(1)->get()[0];
            $order->cart_id = $cartDB->id;
            $cartDB->status = false;
            $cartDB->save();
        }
        else {
            $order->customer_id = null;
            $cartDB = new Cart();
            $cartDB->customer_id = null;
            $cartDB->price = $total_price;
            $cartDB->status = false;
            $cartDB->save();
            $order->cart_id = $cartDB->id;
        }
        $order->shipping_id = Session::get('delivery');
        $order->payment_id = Session::get('payment');
        $order->price = $total_price;
        $order->status= "Shipping";
        $order->created_at = now();
        $order->shipped_at = now();
        $order->phone_number = $request->input('phone_number');
        $order->address = $request->input('address');
        $order->postal_code = $request->input('postal_code');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->save();

        foreach ($cart->items as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item['item']->id,
                'quantity' => $item['item']->number,
                'size' => $item['item']->size,
            ]);
            $size = Size::where('size', $item['item']->size)->limit(1)->get()[0];
            $sizeproduct = SizeProduct::where('product_id', $item['item']->id)->where('size_id', $size->id)->limit(1)->get()[0];
            $sizeproduct->quantity = $sizeproduct->quantity - $item['item']->number;
            if ($sizeproduct->quantity <= 0) SizeProduct::where('product_id', $item['item']->id)->where('size_id', $item['item']->size)->limit(1)->delete();
            else $sizeproduct->save();
        }

        Session::get('cart')->deleteCart();

        return redirect()->route('homepage');
    }

    public function paymentDeliverySave (Request $request) {
        $payment = $request->input('payment_method');
        $delivery = $request->input('delivery_method');

        Session::put('payment', $payment);
        Session::put('delivery', $delivery);

        return view('cart_address');
    }
}