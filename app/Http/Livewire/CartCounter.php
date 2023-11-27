<?php

namespace App\Http\Livewire;

use App\Models\ShoppingCart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated' => 'render'];
    public function render()
    {
        $cart_counter = ShoppingCart::all()->count();
        return view('livewire.cart-counter', compact('cart_counter'));
    }
}
