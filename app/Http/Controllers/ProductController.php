<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // $cart = Cart::content();
        return view('user.product');
    }

    public function show($product_id)
    {
        $product = Product::find($product_id);
        return view('user.product_detail', compact('product'));
    }


    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
