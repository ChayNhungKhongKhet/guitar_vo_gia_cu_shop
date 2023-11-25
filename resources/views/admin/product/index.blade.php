@extends('admin.layout.master')
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manager <b>Product</b></h2></div>
                    {{-- <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div> --}}
                    <form action="{{ route('product.index') }}" method="GET">
                     <div style="margin-bottom: 30px;" class="pe_top_right_section">
                        <div class="pe_top_search">
                           <input name="searchTerm" type="text" placeholder="Search for product" value="{{ $searchTerm ?? '' }}">
                           <button type="submit" style="border: none; "><img src="/images/header_search.svg" style="margin-right: 10px;" alt="images"></button>
                         </div>
                     </div>
                     </form>


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
                        <th>Price</th>
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

            <!-- Table End -->
@endsection