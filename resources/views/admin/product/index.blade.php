@extends('admin.layout.master')
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4"><h2>Manager <b>Product</b></h2></div>      
                    <div class="col-sm-8">
                        <form action="{{ route('product.index') }}" method="GET" class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="searchTerm" class="visually-hidden">Search</label>
                                <input type="text" class="form-control" id="searchTerm" placeholder="Search" name="searchTerm" value="{{ $searchTerm ?? '' }}">
                            </div>
                            <div class="col-auto">
                                <label for="minPrice" class="visually-hidden">Min Price</label>
                                <input type="number" class="form-control" id="minPrice" placeholder="Min Price" name="minPrice" value="{{ $minPrice ?? '' }}">
                            </div>
                            <div class="col-auto">
                                <label for="maxPrice" class="visually-hidden">Max Price</label>
                                <input type="number" class="form-control" id="maxPrice" placeholder="Max Price" name="maxPrice" value="{{ $maxPrice ?? '' }}">
                            </div>
                            <div class="col-auto">
                                <label for="category_id" class="visually-hidden">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="">Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $selectedCategory ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>                               
                    <div class="col-sm-8">
                    <a href="{{route('product.create')}}"  class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span></span></a>                
                    </div>
                </div>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Distributor</th>
                        <th>
                            Price
                            <a href="{{ route('product.index', ['sortBy' => 'price', 'sortOrder' => 'asc']) }}">↑</a>
                            <a href="{{ route('product.index', ['sortBy' => 'price', 'sortOrder' => 'desc']) }}">↓</a>
                            <a href="{{ route('product.index') }}">Reset</a>
                        </th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th>Remain</th>
                        <th>IMG</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->distributor }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->remain }}</td>
                            <td><img src="{{ asset('storage/'.$product->linkimg) }}"   style="width: 50px; height: auto;"></td>
                            <td>
                                <a href="{{route('product.edit', $product->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a type="button" data-toggle="modal" data-target="#deleteModal{{ $product->id }}"><i class="material-icons">&#xE872;</i></a>

                                <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete {{ $product->name }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('product.destroy', ['id' => $product->id]) }}" >
                                                        @csrf
                                                        <!-- @method('DELETE') -->
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>                
                    @endforeach                                                             
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>  
</div>   
@endsection