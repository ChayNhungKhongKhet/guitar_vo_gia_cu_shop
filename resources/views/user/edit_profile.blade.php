@extends('user.layout.master')
@section('content')
<div class="container">

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form action="{{ route('profile.update_profile', $user->id) }}" method="post">
@csrf
@method('PUT')
    <div class="card-header">						
        <h4 class="card-title">Update Profile</h4>
    </div>
    <div class="card-body">					
        <div class="form-group">
            <label for="username">UserName</label>
            <input name="username" type="text" class="form-control" value="{{$user->username }}" disabled required>
        </div>
        <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input hidden name="password" type="password" class="form-control" value="{{ $user->password }}" disabled required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" value="{{$user->name}}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-select">
                <option selected>--Choose gender--</option>
                <option value="0" {{$user->gender === 0 ? 'selected' : ''}}>Male</option>
                <option value="1" {{$user->gender === 1 ? 'selected' : ''}}>Female</option>
            </select>
        </div>
            
        <div class="form-group">
            <label for="address">Address</label>
            <input name="address" type="text" class="form-control" value="{{ $user->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" type="text" class="form-control" value="{{ $user->phone }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input name="birthday" type="date" class="form-control" value="{{ $user->birthday }}" required>
        </div>

    </div>
    <div class="btn-control">
        <button type="submit" class="btn btn-success btn-update">Update</button>
    </div>
   
</form>
</div>
@endsection
