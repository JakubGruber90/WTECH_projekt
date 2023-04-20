<?php

namespace App\Models;
use Illuminate\Support\Facades\Log;

class CartSession {
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

    public function restore($item, $product_id, $count) {
        $item->id = $item->product_id;
        $item->number = $item->quantity;
        $item->max_number = $item->count;
        unset($item->product_id);
        unset($item->quality);
        unset($item->count);
        $storedItem = ['item' => $item];
        if ($this->items && count($this->items) == $count) {
            if (array_key_exists($product_id, $this->items)) {
                $storedItem = $this->items[$product_id];
            }
        }
        $this->items[$product_id] = $storedItem;
    }
}