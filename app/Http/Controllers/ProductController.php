<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $selectedCategory = $request->input('category_id');
        $sortBy = $request->input('sortBy', 'id'); // Mặc định sắp xếp theo ID nếu không có giá trị
        $sortOrder = $request->input('sortOrder', 'asc'); // Mặc định sắp xếp tăng dần nếu không có giá trị

        $query = Product::query();

        // Thêm điều kiện tìm kiếm theo tên và mô tả
        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('distributor', 'like', '%' . $searchTerm . '%');
            });
        }

        // Thêm điều kiện tìm kiếm theo danh mục
        if ($selectedCategory !== null) {
            $query->whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('id', $selectedCategory);
            });
        }

        // Thêm điều kiện tìm kiếm theo khoảng giá
        if ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($sortBy === 'price') {
            $query->orderBy('price', $sortOrder);
        } else {
            $query->orderBy($sortBy, $sortOrder);
        }

        $categories = Category::all();

        // Thực hiện truy vấn và lấy dữ liệu phân trang
        $products = $query->paginate(10);

        return view('admin.product.index', compact('products', 'searchTerm', 'minPrice', 'maxPrice', 'selectedCategory', 'sortBy', 'sortOrder', 'categories'));
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
    public function show(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $selectedCategory = $request->input('category_id');
        $sortBy = $request->input('sortBy', 'id'); // Mặc định sắp xếp theo ID nếu không có giá trị
        $sortOrder = $request->input('sortOrder', 'asc'); // Mặc định sắp xếp tăng dần nếu không có giá trị

        $query = Product::query();

        // Thêm điều kiện tìm kiếm theo tên và mô tả
        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('distributor', 'like', '%' . $searchTerm . '%');
            });
        }

        // Thêm điều kiện tìm kiếm theo danh mục
        if ($selectedCategory !== null) {
            $query->whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('id', $selectedCategory);
            });
        }

        // Thêm điều kiện tìm kiếm theo khoảng giá
        if ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($sortBy === 'price') {
            $query->orderBy('price', $sortOrder);
        } else {
            $query->orderBy($sortBy, $sortOrder);
        }

        $categories = Category::all();

        // Thực hiện truy vấn và lấy dữ liệu phân trang
        $products = $query->paginate(10);

        return view('user.product', compact('products', 'searchTerm', 'minPrice', 'maxPrice', 'selectedCategory', 'sortBy', 'sortOrder', 'categories'));
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
        return view('admin.product.edit', compact('product', 'categories'));
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
        $product = Product::findOrFail($id);

        if ($request->hasFile('linkimg')) {

            $currentImagePath = $product->linkimg;


            if (Storage::disk('public')->exists($currentImagePath)) {
                Storage::disk('public')->delete($currentImagePath);
            }
            $newImagePath = $request->file('linkimg')->store('images', 'public');
            $product->linkimg = $newImagePath;
        }


        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->distributor = $request->input('distributor');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->remain = $request->input('remain');

        // Lưu cập nhật
        $product->save();

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
