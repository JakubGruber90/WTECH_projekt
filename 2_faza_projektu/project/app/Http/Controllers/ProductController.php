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
    public function homepage() {
        $news = Product::whereRaw("created_at > (CURRENT_DATE - INTERVAL '30 days')")->limit(10)->get();
        $sales = Product::whereRaw("onsale = TRUE")->limit(10)->get();
        $recommends = Product::limit(10)->get();
        $picture_finder = new Finder();
        return view('homepage', [
            'news' => $news,
            'sales' => $sales,
            'recommends' => $recommends,
            'picture_finder' => $picture_finder,
        ]);
    }

    public function index()
    {
        $products = Product::all();
        $picture_finder = new Finder();
        $count = count($products);
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
            'paging' => false,
        ]);
    }

    public function filter_category($category)
    {
        $categories = ['basketball', 'volleyball', 'football', 'hiking', 'tennis', 'running'];
        if (in_array($category, $categories) == false) {
            return redirect('all-products');
        }
        $products = Product::where('category','=',$category)->get();
        $count = count($products);
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
            'paging' => false,
        ]);
    }

    public function filter_price($price) {
        if ($price == '50') $products = Product::whereRaw('price < 50')->get();
        else if ($price == '100') $products = Product::whereRaw('price > 50 and price < 150')->get();
        else if ($price == '150') $products = Product::whereRaw('price > 150')->get();
        else return redirect('all-products');
        $count = count($products);
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
            'paging' => false,
        ]);
    }

    public function filter_sales() {
        $products = Product::whereRaw('onsale = TRUE')->get();
        $count = count($products);
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
            'paging' => false,
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

    public function show_page($page) {
        $count = Product::all()->count();
        //number of items on selected page
        $page_count = ($count / 12) - 1;
        if ($page_count < 1) $page_count = 1;
        //input
        if (is_numeric($page) == false) {
            return redirect('/all-products/page/0');
        }
        else if ($page < 0 || $page > $page_count - 1) {
            return redirect('/all-products/page/0');
        }
        else if ($page == $page_count - 1 && $page_count > 1) {
            return redirect('/all-products/page/0');
        }
        else if ($page == -1 && $page_count > 1) {
            return redirect('/all-products/page/' . ($page_count - 1));
        }
        //paging
        if ($page == 0) {
            $products = Product::skip(0)->take(12)->get();
        }
        else {
            $products = Product::skip($page * 12)->take($page * 12)->get();
        }
        $picture_finder = new Finder();
        return view('all_products', [
            'products' => $products,
            'picture_finder' => $picture_finder,
            'count' => $count,
            'paging' => true,
        ]);
    }
}
