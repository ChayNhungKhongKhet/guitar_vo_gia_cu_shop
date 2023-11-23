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
                    <a href="{{route('account.create')}}"  class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span></span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
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
                            <form action="{{route('account.destroy', $user->id)}}" method="post">
                                <a href="{{route('account.edit', $user->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" ><i class="material-icons">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>  
                    @endforeach                                        
                </tbody>
            </table>
            {{-- {{ $users->links() }} --}}
        </div>
    </div>  
</div>   

            <!-- Table End -->
@endsection