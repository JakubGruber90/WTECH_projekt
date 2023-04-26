<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Finder;
use App\Models\Size;
use Illuminate\Http\Request;

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
}
