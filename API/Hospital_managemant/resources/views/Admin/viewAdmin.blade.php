@extends('Admin.Layouts.app2')
@section('title','Admin || View Admin')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="md-10">
                <a href="{{route('addadmin')}}" class="btn btn-dark btn-custom">Add Admin</a>
                <a href="{{route('viewadmin')}}" class="btn btn-info">Manage Admin</a>
            </div>
        </div>
        <div class="row ml-5">
            <div class="mt-5">
                <h3>-Admin Lists-</h3>
                <table class="table table-borded">
        <tr>
            <th>Admin Name</th>
            <th>Username</th>
            <th>Email Address </th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        @foreach($admins as $admin )
            <tr>
                <td>{{$admin ->name}}</td>
                <td>{{$admin ->username}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td>
                    <a href="/admindashboard/manageadmin/editadmin/edit/{{$admin->id}}" class="btn btn-warning">Edit</a>
                    <a href="/admindashboard/manageadmin/viewadmin/delete/{{$admin->id}}/{{$admin->name}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
            </div>
        </div>
    </div>


@endsection        