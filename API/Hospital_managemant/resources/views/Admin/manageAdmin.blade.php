@extends('Admin.Layouts.app2')
@section('title','Admin || Manage Admin')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('addadmin')}}" class="btn btn-dark btn-custom">Add Admin</a>
                <a href="{{route('viewadmin')}}" class="btn btn-info">Manage Admin</a>
            </div>
        
        </div>
        
    </div>
@endsection