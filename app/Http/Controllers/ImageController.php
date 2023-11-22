<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lấy đường dẫn của file ảnh
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Lưu đường dẫn của ảnh vào cơ sở dữ liệu hoặc thực hiện các bước khác cần thiết
        // ...

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
}

