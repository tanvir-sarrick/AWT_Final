@extends('Admin.Layouts.app2')
@section('title','Admin || Add Doctor')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('adddoctor')}}" class="btn btn-dark btn-custom">Add Doctor</a>
                <a href="{{route('viewdoctor')}}" class="btn btn-info">Manage Doctor</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">    
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h3 class="text-center mb-4">Add Doctor</h3>
                <form  action="{{route('adddoctor')}}" method="post" class="login-form"> 
                        <!-- using action & method
                    Using csrf -->
                    {{ @csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name"  value="{{old('name')}}" class="form-control " placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="username"  value="{{old('username')}}" class="form-control" placeholder="Enter Username">
                        @error('username')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email"  value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success submit px-3">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection