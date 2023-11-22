<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        // :with('products')->get();

        return view('admin.product.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('products')->get();
        
        // In dữ liệu và kết thúc chương trình

        // Hoặc truyền dữ liệu vào view và hiển thị
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validatedData = $request->validate((
        //     'name' => 'required|string',
        //     'distributor' => 'required|string',
        //     'price' => 'required|numeric',
        //     'description' => 'required|string',
        //     'category_id' => 'required|numeric',
        //     'remain' => 'required|numeric',
        //     // 'link_img' => 'required|string',
        // ]);
        $imagePath = $request->file('linkimg')->store('images', 'public');
    
        Product::create([
            'name' =>  $request->input('name'),
            'category_id' => $request->input('category_id'),
            'distributor' => $request->input('distributor'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'remain' => $request->input('remain'),
            'linkimg' => $imagePath,
        ]);
        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $categories = Category::paginate(100);
        // :with('products')->get();

        return view('user.product', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::with('products')->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required'.$id,
        //     'category_id' => 'required', // Để tránh cập nhật mật khẩu mỗi khi chỉnh sửa
        //     'distributor' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'remain' => 'required',
            
        // ]);
        
        $product = Product::findOrFail($id);
        // $categories =  $validatedData['category_id'] === 'Category 1' ? 0 : 1;

        
        $product->update([
             
            'name' =>  $request->input('name'),
            'category_id' => $request->input('category_id'),
            'distributor' => $request->input('distributor'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'remain' => $request->input('remain'),
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
