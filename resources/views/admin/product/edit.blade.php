@extends('admin.layout.master')
@section('content')
<div class="container">
<form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="card-header">						
        <h4 class="card-title">Update Product</h4>
    </div>
    <div class="card-body">					
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" value="{{$product->name }}" required>
        </div>
        <div class="form-group">
            <label for="distributor">Distributor</label>
            <input name="distributor" type="text" class="form-control" value="{{ $product->distributor }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="text" class="form-control" value="{{$product->price}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" value="{{ $product->description }}" required>
        </div>
         <div class="form-group">
                {{-- <label for="category_id" class="form-label">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="" selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select> --}}
                <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
            </div>
            
         
        <div class="form-group">
            <label for="remain">Remain</label>
            <input name="remain" type="text" class="form-control" value="{{ $product->remain  }}" required>
        </div>
        <!-- <div class="form-group">
            <label for="linkimg">Img</label>
            <input type="file" name="linkimg" class="form-control-file"  id="exampleFormControlFile1" onchange="previewImage(this)">
             
        </div>      -->
        <div class="form-group">
            <label for="linkimg">Img</label>
            <input type="file" name="linkimg" class="form-control-file" id="exampleFormControlFile1" onchange="previewImage(this)">
            <img id="previewImage" src="{{ asset('storage/' . $product->linkimg) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
        </div>
    </div>
    <div class="btn-control">
        <button type="submit" class="btn btn-success btn-update">Update</button>
    </div>
   
</form>
</div>
<script>
    function previewImage(input) {
        var preview = document.getElementById('previewImage');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "{{ asset('storage/' . $product->linkimg) }}"; // Nếu không có tệp mới, hiển thị ảnh cũ
        }
    }

    // Sự kiện 'input' trên trường input file
    document.querySelector('input[name="linkimg"]').addEventListener('input', function(event) {
        previewImage(event.target);
    });
</script>
@endsection