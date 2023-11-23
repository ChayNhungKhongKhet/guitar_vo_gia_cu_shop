@extends('admin.layout.master')
@section('content')
<div id="container">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">						
            <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">					
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Distributor</label>
                <input name="distributor" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input name="price" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Dicription</label>
                <input name="description" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="" selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
                
            <div class="form-group">
                <label>Remain</label>
                <input name="remain" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Img</label>
                <input type="file" name="linkimg" class="form-control-file"  id="exampleFormControlFile1">
            </div>
            

        </div>
        <button type="submit" class="btn btn-success btn-create">Save</button>
    
    </form>
</div>
@endsection