@extends('Admin.Layouts.app2')
@section('title','Admin || Visitor')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Id</th>
            <th>Ip Address</th>
            <th>Visit Time</th>
        </tr>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{$visitor->id}}</td>
                <td>{{$visitor->ip_address}}</td>
                <td>{{$visitor->visit_time}}</td>
            </tr>
        @endforeach
    </table>
@endsection