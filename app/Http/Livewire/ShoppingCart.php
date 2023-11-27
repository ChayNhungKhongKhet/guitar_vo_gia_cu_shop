<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use App\Models\Order;
use App\Models\ShoppingCart as ModelsShoppingCart;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Component
{
    public $cart_items, $sub_total = 0;
    public $message;
    public $quantity = [];
    protected $listeners = ['updated_cart_items' => 'render'];

    public function mount()
    {
        $this->cart_items = Cart::with('product')
            ->where(['user_id' => auth()->user()->id])
            ->get();
        foreach ($this->cart_items as $item) {
            $this->quantity[$item->id] = $item->quantity;
            $this->sub_total += $item->product->price * $item->quantity;
        }
    }

    public function render()
    {
        return view('livewire.shopping-cart', [
            'cart_items' => $this->cart_items,
        ])
            ->layout('user.layout.master');
    }

    public function decrementQty($itemId)
    {
        $cartItem = Cart::find($itemId);

        if ($cartItem && $cartItem->quantity > 1) {
            $cartItem->decrement('quantity');
            $this->quantity[$itemId]--;
            $this->sub_total -= $cartItem->product->price;
        }
    }

    public function incrementQty($itemId)
    {
        $cartItem = Cart::find($itemId);

        if ($cartItem && ($cartItem->product->remain > $this->quantity[$itemId])) {
            $cartItem->increment('quantity');
            $this->quantity[$itemId]++;
            $this->sub_total += $cartItem->product->price;
        }
    }


    public function removeItem($cartId)
    {
        $cart = Cart::find($cartId)->first();
        if ($cart) {
            $cart->delete();
            // dd($this->cart_items);
            $this->emit('cart_updated');
        }
    }

    public function checkout()
    {

        foreach ($this->cart_items as $item) {
            $product = Product::find($item->product_id);
            if (!$product || $product->remain < $item->quantity) {
                $this->message = $product->name . ' is not enough quantity';
                return;
            }
        }
        try {
            DB::transaction(function () {
                $order = Order::create([
                    'user_id' => auth()->id(),
                    'total_price' => 0
                ]);

                foreach ($this->cart_items as $item) {
                    $order->products()->attach($item->product_id, [
                        'quantity' => $item->quantity
                    ]);
                }
                $order->increment('total_price', $item->quantity * $item->product->price);
                foreach ($this->cart_items as $item) {
                    Product::find($item->product_id)->decrement('remain', $item->quantity);
                }
                Cart::where('user_id', auth()->id())->delete();
                $this->emit('cart_updated');
                $this->message = 'Completed Checkout Processing';
            });
        } catch (\Exception $exception) {
            $this->message = 'Something went wrong';
        }
    }
}
