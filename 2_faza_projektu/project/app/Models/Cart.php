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

    public function add($item, $product_id, $size, $number, $max_number) {
        $item->setAttribute('size', $size);
        $item->setAttribute('number', $number);
        $item->setAttribute('max_number', $max_number);
        $storedItem = ['item' => $item];
        if ($this->items) {
            if (array_key_exists($product_id, $this->items)) {
                $storedItem = $this->items[$product_id];
            }
        }
        $this->items[$product_id] = $storedItem;
    }

    public function delete($item, $product_id) {
        if (array_key_exists($product_id, $this->items)) {
            unset($this->items[$product_id]);
        }
    }
}