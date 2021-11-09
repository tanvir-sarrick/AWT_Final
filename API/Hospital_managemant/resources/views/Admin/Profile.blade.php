@extends('Admin.Layouts.app2')
@section('title','Admin || My Profile')
@section('content')
    <div class="container-fluid">
        <div class="row ml-5">
            <div class="mt-5">
                <h3>-My Profile-</h3>
        <table class="table table-borded">
            <tr>
                <th>Admin Name</th>
                <th>Admin Username</th>
                <th>Admin Email</th>
                <th>Admin Phone</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>{{$profile ->name}}</td>
                <td>{{$profile ->username}}</td>
                <td>{{$profile ->email}}</td>
                <td>{{$profile ->phone}}</td>
                <td>
                    <a href="/admindashboard/profile/edit/{{$profile->id}}" class="btn btn-warning">Edit</a> 
                </td>
            </tr>
       
        </table>
            </div>
        </div>
    </div>


@endsection        