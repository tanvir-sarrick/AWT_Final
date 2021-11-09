@extends('Admin.Layouts.app2')
@section('title','Admin || Manage Pharmacist')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('addpharmacist')}}" class="btn btn-dark btn-custom">Add Pharmacist</a>
                <a href="{{route('viewpharmacist')}}" class="btn btn-info">Manage Pharmacist</a>
            </div>
        
        </div>
    </div>
@endsection