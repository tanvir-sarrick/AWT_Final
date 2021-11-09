@extends('Admin.Layouts.app2')
@section('title','Admin || Manage Doctor')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('adddoctor')}}" class="btn btn-dark btn-custom">Add Doctor</a>
                <a href="{{route('viewdoctor')}}" class="btn btn-info">Manage Doctor</a>
            </div>
        
        </div>
    </div>
@endsection