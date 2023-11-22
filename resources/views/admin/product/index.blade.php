@extends('admin.layout.master')
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manager <b>Account</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                    <div class="col-sm-8">
                    <a href="{{route('product.create')}}"  class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span></span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Distributor</th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th>Remain</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                        @foreach ($category->products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->distributor }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $product->remain }}</td>
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
                    @endforeach
                                                               
                </tbody>
            </table>
            
        </div>
    </div>  
</div>   

            <!-- Table End -->
@endsection