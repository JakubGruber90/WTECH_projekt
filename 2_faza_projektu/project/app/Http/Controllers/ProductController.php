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
