@extends('Admin.Layouts.app2')
@section('title','Admin || View Doctor')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('adddoctor')}}" class="btn btn-dark btn-custom">Add Doctor</a>
                <a href="{{route('viewdoctor')}}" class="btn btn-info">Manage Doctor</a>
            </div>
        </div>
        <div class="row ml-5">
            <div class="mt-5">
                <h3>-Doctor Lists-</h3>
                <table class="table table-borded">
        <tr>
            <th>Doctor Name</th>
            <th>Username</th>
            <th>Email Address </th>
            <th>Actions</th>
        </tr>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{$doctor ->name}}</td>
                <td>{{$doctor ->username}}</td>
                <td>{{$doctor->email}}</td>
                <td>
                    <a href="/admindashboard/managedoctor/editdoctor/edit/{{$doctor->id}}" class="btn btn-primary">Edit</a>
                    <a href="/admindashboard/managedoctor/viewdoctor/delete/{{$doctor->id}}}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
            </div>
        </div>
    </div>


@endsection        