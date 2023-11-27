@extends('admin.layout.master')
@section('content')
<div class="container-xl" id="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4"><h2>Manager <b>Account</b></h2></div>
                    <div class="col-sm-8">
                        <form action="{{ route('account.index') }}" method="GET">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>

                                <input type="text" class="form-control" placeholder="Search" name="searchTerm">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="searchUsername" id="searchUsername">
                                    <label class="form-check-label" for="searchUsername">Username</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="searchName" id="searchName">
                                    <label class="form-check-label" for="searchName">Name</label>
                                </div>

                                <select name="searchGender" class="form-select">
                                    <option value="" selected>--Choose gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>   

                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>  
                    <div class="col-sm-8">
                    <a href="{{route('account.create')}}"  class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span></span></a>
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
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</i></th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $counter = 1
                    @endphp
                    @foreach ($users as $user)
                        @if ($user->status == 1 && $user->is_Admin == 1)
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if ($user->gender == 0)
                                        Male
                                    @else 
                                        Female
                                    @endif
                                </td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>
                                    <div class="button-control">
                                        <button><a href="{{route('account.edit', $user->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></button>
                                        <button type="button" data-toggle="modal" data-target="#deleteModal{{ $user->id }}"><i class="material-icons">&#xE872;</i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete {{ $user->name }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('account.destroy', ['id' => $user->id]) }}" >
                                                            @csrf
                                                            <!-- @method('DELETE') -->
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php 
                                $counter++;
                            @endphp
                            
                        @endif
                    @endforeach                                        
                </tbody>
            </table>
             {{ $users->links() }}
        </div>
    </div>  
</div>   

            <!-- Table End -->
@endsection