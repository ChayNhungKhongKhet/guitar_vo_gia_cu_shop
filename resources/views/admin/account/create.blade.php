@extends('admin.layout.master')
@section('content')
<div id="container">
    <form action="{{route('account.store')}}" method="post">
        @csrf
        <div class="card-header">						
            <h4 class="card-title">Add Account</h4>
        </div>
        <div class="card-body">					
            <div class="form-group">
                <label>UserName</label>
                <input name="username" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-select">
                    <option selected>--Choose gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
                
            <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input name="birthday" type="date" class="form-control" >
            </div>

        </div>
        <button type="submit" class="btn btn-success btn-create">Save</button>
    
    </form>
</div>
@endsection