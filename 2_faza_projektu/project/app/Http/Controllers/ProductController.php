<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Finder;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
        ]);
    }

    public function filter_category($category)
    {
        $categories = ['basketball', 'football', 'hiking', 'tennis', 'running'];
        if (in_array($category, $categories) == false) {
            return redirect('all-products');
        }
        $products = Product::where('category','=',$category)->get();
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
        ]);
    }

    public function filter_price($price) {
        if ($price == '50') $products = Product::whereRaw('price < 50')->get();
        else if ($price == '100') $products = Product::whereRaw('price > 50 and price < 150')->get();
        else if ($price == '150') $products = Product::whereRaw('price > 150')->get();
        else return redirect('all-products');
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
        ]);
    }

    public function search($search_text) {
        $products = Product::whereRaw("LOWER(title) ~ '" . $search_text . "'")->get();
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
        ]);
    }

    public function select($product_id) {
        if (is_numeric($product_id) == false) {
            return view('selected_product', [
                'product' => null,
                'pictures' => [],
                'sizes' => [],
            ]);
        }
        $finder = new Finder();
        $pictures = $finder->findManyPictures($product_id);
        $sizes = $finder->findManySizes($product_id);
        return view('selected_product', [
            'product' => Product::find($product_id),
            'pictures' => $pictures,
            'sizes' => $sizes,
        ]);
    }
}
