<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Finder;
use App\Models\Size;
use App\Models\SizeProduct;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function product_menu()
    {
        $products = Product::all();
        $picture_finder = new Finder();
        $count = count($products);
        return view('admin_menu', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
        ]);
    }

    public function create_product(Request $request)
    {
        /*$validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5|max:50',
            'cat' => 'required|string|min:5|max:12',
            'desc' => 'required|string|min:10|max:500',
            'price' => 'required',
            'brand' => 'required|string|min:3|max:50',
            'onsale' => 'required|string|min:3|max:3',
            'color' => 'required|string|min:5|max:20',
        ]);*/
        
        $categories = ['Basketball', 'Football', 'Voleyball', 'Tennis', 'Running', 'Hiking'];
        if (!in_array($request->input('cat'), $categories)) return back();

        $id = intval(Product::max('id')) + 1;
        $price = $request->input('price');
        if ($price < 10) $price = 10;

        $product = new Product();
        $product->id = $id;
        $product->title = $request->input('name');
        $product->category = $request->input('cat');
        $product->description = $request->input('desc');
        $product->price = number_format(floatval($price), 2, '.', '');
        $product->brand = $request->input('brand');
        $product->created_at = Carbon::now()->toDateString();
        if ($request->input('sale') == 'Áno' || $request->input('sale') == 'True') $product->onsale = 'true';
        elseif ($request->input('sale') == 'Nie' || $request->input('sale') == 'False') $product->onsale = 'false';
        else return back();

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

        return redirect('admin');
    }

    public function edit_product($product_id) {

        return redirect('admin');
    }

    public function delete_product($product_id) {
        return redirect('admin');
    }
}
