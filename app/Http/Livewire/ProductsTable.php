<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ProductsTable extends Component
{
    public array $quantity = [];
    public $products;

    public function mount()
    {
        $this->products = Product::where('remain', '>', 0)->get();
    }
    public function render()
    {
        //        dd($cart);
        return view('livewire.products-table');
    }

    public function addToCart($product_id)
    {
        if (Auth::check()) {
            $data = [
                'user_id' => Auth::id(),
                'product_id' => $product_id
            ];
            ShoppingCart::updateOrCreate($data);
            $this->emit('cart_updated');
        } else {
            return redirect(route('login'));
        }
    }
}
