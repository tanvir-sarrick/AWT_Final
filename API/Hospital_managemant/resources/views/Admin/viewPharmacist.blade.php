@extends('Admin.Layouts.app2')
@section('title','Admin || View Pharmacist')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('addpharmacist')}}" class="btn btn-dark btn-custom">Add Pharmacist</a>
                <a href="{{route('viewpharmacist')}}" class="btn btn-info">Manage Pharmacist</a>
            </div>
        </div>
        <div class="row ml-5">
            <div class="mt-5">
                <h3>-Pharmacist Lists-</h3>
                <table class="table table-borded">
        <tr>
            <th>Pharmacist Name</th>
            <th>Username</th>
            <th>Email Address </th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach($pharmacists as $pharmacist)
            <tr>
                <td>{{$pharmacist ->name}}</td>
                <td>{{$pharmacist ->username}}</td>
                <td>{{$pharmacist->email}}</td>
                <td>{{$pharmacist->phone}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="/admindashboard/managepharmacist/viewpharmacist/delete/{{$pharmacist->id}}}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
            </div>
        </div>
    </div>


@endsection        