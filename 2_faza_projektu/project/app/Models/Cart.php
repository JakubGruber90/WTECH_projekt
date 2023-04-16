<?php

namespace App\Models;
use Illuminate\Support\Facades\Log;

class Cart {
    public $items = null;

    public function __construct($oldcart) {
        if ($oldcart) {
            $this->items = $oldcart->items;
        }
    }

    public function add($item, $product_id, $size) {
        $item->setAttribute('size', $size);
        $storedItem = ['item' => $item];
        if ($this->items) {
            if (array_key_exists($product_id, $this->items)) {
                $storedItem = $this->items[$product_id];
            }
        }
        $this->items[$product_id] = $storedItem;
        Log::info('Cart add', $this->items);
    }

    public function delete($item, $product_id) {
        Log::info('product id for deletion', $product_id);
        Log::info('item for deletion', $item);
        if (($key = array_search($product_id, $this->items) !== false)) {
            unset($this->items[$key]);
            Log::info('Cart delete', $this->items);
        }
    }
}