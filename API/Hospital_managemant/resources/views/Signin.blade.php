@extends('Layout.app')
@section('title','Sign In')
@section('content')

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <!-- <span class="fa fa-user-o"></span> -->
                    <span class=""><a href="{{route('signin')}}"><img src="{{asset('images/navlogo.webp')}}" alt=""></a></span>
                </div>
                    <h3 class="text-center mb-4">Sign In</h3>
                    <form action="{{route('signin')}}" method="post" class="login-form"> 
                         <!-- using action & method
                        Using csrf -->
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="username"  value="{{old('username')}}" class="form-control rounded-left" placeholder="Username">
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <input type="password" class="form-control rounded-left" name="password" placeholder="Password">
                            @error('password')
                                 <span class="text-danger">{{$message}}</span>
                             @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection