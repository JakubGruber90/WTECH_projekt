<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Finder;
use App\Models\Size;
use App\Models\SizeProduct;
use App\Models\PaymentMethod;
use App\Models\ShippingType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function product_menu()
    {
        $products = Product::all();
        $picture_finder = new Finder();
        $payment_methods = PaymentMethod::all();
        $shipping_types = ShippingType::all();
        return view('admin_menu', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'payment_methods' => $payment_methods,
            'shipping_types' => $shipping_types,
        ]);
    }

    public function create_product(Request $request)
    {   
        $categories = ['basketball', 'football', 'volleyball', 'tennis', 'running', 'hiking'];
        if (!in_array(strtolower($request->input('cat')), $categories)) return back();

        $id = intval(Product::max('id')) + 1;
        $price = $request->input('price');
        if ($price < 10) $price = 10;
        if (strlen($request->input('name')) < 3) return back()->with('failed', 'Krátky názov');
        if (strlen($request->input('desc')) < 5) return back()->with('failed', 'Krátky popis');
        if (strlen($request->input('brand')) < 3) return back()->with('failed', 'Krátka značka');
        if (strlen($request->input('sizes')) < 3) return back()->with('failed', 'Krátka veľkosť');

        $product = new Product();
        $product->id = $id;
        $product->title = $request->input('name');
        $product->category = strtolower($request->input('cat'));
        $product->description = $request->input('desc');
        $product->price = number_format(floatval($price), 2, '.', '');
        $product->brand = $request->input('brand');
        $product->created_at = Carbon::now()->toDateString();
        if ($request->input('sale') == 'Áno' || $request->input('sale') == 'True') $product->onsale = 'true';
        elseif ($request->input('sale') == 'Nie' || $request->input('sale') == 'False') $product->onsale = 'false';
        else return back()->with('failed', 'Chybná hodnota akcie');

        $sizes = $request->input('sizes');
        $sizes = explode(';', $sizes);
        foreach ($sizes as $size) {
            $size = explode(':', $size);
            $sizeproduct = new SizeProduct();
            $sizeproduct->id = intval(SizeProduct::max('id')) + 1;
            $sizeproduct->product_id = $id;
            $sizeproduct->size_id = $size[0];
            $sizeproduct->quantity = $size[1];
            $sizeproduct->save();
        }

        $imgs = $request->file('images');
        $name = $request->input('name');
        foreach ($imgs as $img) {
            $imgname = time() . "_" . $name . $img->getClientOriginalName();
            $path = $img->storeAs('public/src', $imgname);
            $picture = new ProductPicture();
            $picture->id = $id;
            $picture->picture_url = 'src/' . $imgname;
            $picture->save();
        };
        $product->save();

        return redirect('admin')->with('success', 'Produkt úspešne vytvorený');
    }

    public function edit_product(Request $request) {
        $id = intval($request->input('id'));
        $product = Product::find($id);
        if (SizeProduct::where("product_id", $id)->get()->count() == 0) return back()->with('failed', 'ID sa nenašlo');
        if (ProductPicture::find($id)->count() == 0) return back()->with('failed', 'ID sa nenašlo');
        if ($product->count() == 0) return back()->with('failed', 'ID sa nenašlo');
        
        $categories = ['basketball', 'football', 'voleyball', 'tennis', 'running', 'hiking'];
        if (in_array(strtolower($request->input('cat')), $categories)) $product->category = strtolower($request->input('cat'));
        $price = $request->input('price');
        if ($price > 10) $product->price = number_format(floatval($price), 2, '.', '');
        if (strlen(trim($request->input('name'))) > 3) $product->title = $request->input('name');
        if (strlen(trim($request->input('desc'))) > 5) $product->description = $request->input('desc');
        if (strlen(trim($request->input('brand'))) > 3) $product->brand = $request->input('brand');
        if ($request->input('sale') == 'Áno' || $request->input('sale') == 'True') $product->onsale = 'true';
        elseif ($request->input('sale') == 'Nie' || $request->input('sale') == 'False') $product->onsale = 'false';

        if (strlen(trim($request->input('sizes'))) != 0) {
            $sizes = $request->input('sizes');
            $sizes = explode(';', $sizes);
            SizeProduct::where("product_id", $id)->delete();
            foreach ($sizes as $size) {
                $size = explode(':', $size);
                $sizeproduct = new SizeProduct();
                $sizeproduct->id = intval(SizeProduct::max('id')) + 1;
                $sizeproduct->product_id = $id;
                $sizeproduct->size_id = $size[0];
                $sizeproduct->quantity = $size[1];
                $sizeproduct->save();
            }
        }

        if ($request->file('images')) { 
            $old_pictures = ProductPicture::where("id", $id)->get();
            foreach ($old_pictures as $picture) {
                $url = 'public/' . $picture->picture_url;
                if(Storage::exists($url)) Storage::delete($url);
            }
            ProductPicture::destroy($id);
            
            $imgs = $request->file('images');
            $name = $request->input('name');
            foreach ($imgs as $img) {
                $imgname = time() . "_" . $name . $img->getClientOriginalName();
                $path = $img->storeAs('public/src', $imgname);
                $picture = new ProductPicture();
                $picture->id = $id;
                $picture->picture_url = 'src/' . $imgname;
                $picture->save();
            };
        }
        $product->save(['timestamps' => true]);

        return redirect('admin')->with('success', 'Produkt úspešne upravený');
    }

    public function delete_product($product_id) {
        $pictures = ProductPicture::where("id", $product_id)->get();
        if (SizeProduct::where("product_id", $product_id)->get()->count() == 0) return back()->with('failed', 'ID not found');
        if ($pictures->count() == 0) return back()->with('failed', 'ID not found');
        if (Product::find($product_id)->count() == 0) return back()->with('failed', 'ID not found');
        
        SizeProduct::where("product_id", $product_id)->delete();
        foreach ($pictures as $picture) {
            $url = 'public/' . $picture->picture_url;
            if(Storage::exists($url)) Storage::delete($url);
        }
        ProductPicture::destroy($product_id);
        Product::destroy($product_id);
        return redirect('admin')->with('success', 'Produkt úspešne vymazaný');
    }
}
