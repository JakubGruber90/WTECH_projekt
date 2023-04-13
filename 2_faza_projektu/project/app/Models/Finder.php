<?php

namespace App\Models;

use App\Models\ProductPicture;
use App\Models\SizeProduct;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finder extends Model
{
    use HasFactory;
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
                            ->select('sizes.size')
                            ->get();
    }
}
