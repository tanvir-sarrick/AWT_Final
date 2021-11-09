@extends('Admin.Layouts.app2')
@section('title','Admin || Contact')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Email Address </th>
            <th>Phone Number</th>
            <th>Message</th>
        </tr>
        @foreach($contacts as $contact )
            <tr>
                <td>{{$contact ->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact ->message}}</td>
                <td>
                    <a href="contact/delete/{{$contact->id}}/{{$contact->name}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection