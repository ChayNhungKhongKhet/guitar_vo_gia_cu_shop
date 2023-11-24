<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Component
{
    public $cart_items, $sub_total = 0, $total = 0, $tax = 0;

    public function mount()
    {

        $this->cart_items = Cart::with('product')
            ->where(['user_id' => auth()->user()->id])
            ->get();
    }

    public function render()
    {
        $this->total = 0;
        $this->sub_total = 0;
        $this->tax = 0;
        foreach ($this->cart_items as $item) {
            $this->sub_total += $item->product->price * $item->quantity;
        }
        return view('livewire.shopping-cart');
    }

    public function incrementQty($id)
    {
        // dd("Increment quantity");
        $cart = Cart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();
    }

    public function decrementQty($id)
    {
        $cart = Cart::whereId($id)->first();
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        } else {
            return;
        }
    }

    public function removeItem($id)
    {
        $cart = Cart::whereId($id)->first();

        if ($cart) {
            $cart->delete();
            $this->emit('cart_updated');
        }
    }

    public function checkout()
    {

        foreach ($this->cart_items as $item) {
            $product = Product::find($item->product_id);
            if (!$product || $product->remain < $item->quantity) {
                session()->flash('error', $product->name . ' not enough quantity');
                return redirect('/cart');
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
                session()->flash('success', 'Completed Checkout Processing');

                return redirect('/cart');
            });
        } catch (\Exception $exception) {
            session()->flash('error', 'Something went wrong');

            return redirect('/cart', compact('message'));
        }
    }
}
