<?php

namespace App\Models;

use App\Models\ProductPicture;
use App\Models\SizeProduct;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Finder {
    public function findOnePicture($product_id)
    {
        return ProductPicture::find($product_id, 'picture_url')->picture_url;
    }

    public function findManyPictures($product_id) {
        return ProductPicture::where('id', $product_id)->get();
    }

    public function findManySizes($product_id) {
        return SizeProduct::join('sizes', 'sizes.id', '=', 'size_products.size_id')
                            ->where('product_id', $product_id)
                            ->select('sizes.size', 'size_products.quantity')
                            ->orderBy('sizes.size', 'asc')
                            ->get();
    }

    public function findOneSize($product_id, $size) {
        return SizeProduct::join('sizes', 'sizes.id', '=', 'size_products.size_id')
                            ->where('product_id', $product_id)
                            ->where('sizes.size', $size)
                            ->select('size_products.quantity')
                            ->get();
    }

    public function findCartItem($id) {
        if (Session::has('cart') && !empty(Session::get('cart')->items)) {
            $decisioner = 0;
            foreach (Session::get('cart')->items as $product) {
                if ($product['item']->id == $id) $decisioner = 1;
            }
            if ($decisioner == 0) {
                return false;
            }
            else {
                return true;
            }
        }
        else { 
            return false;
        }
    }
}
