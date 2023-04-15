<?php

namespace App\Models;

class Cart {
    public $items = null;

    public function __construct($oldcart) {
        if ($oldcart) {
            $this->items = $oldcart->items;
        }
    }

    public function add($item, $product_id) {
        $storedItem = ['item' => $item];
        if ($this->items) {
            if (array_key_exists($product_id, $this->items)) {
                $storedItem = $this->items[$product_id];
            }
        }
        $this->items[$product_id] = $storedItem;
    }
}