@extends('Admin.Layouts.app2')
@section('title','Admin || Edit Admin')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('addadmin')}}" class="btn btn-dark btn-custom">Add Admin</a>
                <a href="{{route('viewadmin')}}" class="btn btn-info">Manage Admin</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">    
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h3 class="text-center mb-4">Edit Admin</h3>
                <form enctype="multipart/form-data" action="{{route('editadmin')}}" method="post" class="login-form"> 
                        <!-- using action & method
                    Using csrf -->
                    {{ @csrf_field() }}
                    <input type="hidden" name="id" value="{{$admin->id}}">
                    <div class="form-group">
                        <input type="text" name="name"  value="{{$admin->name}}" class="form-control " placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="username"  value="{{$admin->username}}" class="form-control" placeholder="Enter Username">
                        @error('username')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email"  value="{{$admin->email}}" class="form-control" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone"  value="{{$admin->phone}}" class="form-control" placeholder="Enter Phone">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success submit px-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection