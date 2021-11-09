@extends('Admin.Layouts.app2')
@section('title','Admin Dashboard')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3 p-2">
                <div class="card" style="background-color:#dbcc19db;">
                    <div class="card-body cardcustom">
                        <h3 class="count-card-title">{{$TotalVisitor}}</h3>
                        <h3 class="count-card-text">Total Visitor</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="card"  style="background-color:#e83e8c;">
                    <div class="card-body cardcustom">
                        <h3 class="count-card-title">{{$TotalAdmin}}</h3>
                        <h3 class="count-card-text">Total Admin</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="card" style="background-color:#007bff">
                    <div class="card-body cardcustom">
                        <h3 class="count-card-title">{{$TotalDoctor}}</h3>
                        <h3 class="count-card-text">Total Doctors</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="card" style="background-color:#dc3545;">
                    <div class="card-body cardcustom">
                        <h3 class="count-card-title">{{ $TotalPharmacist}}</h3>
                        <h3 class="count-card-text">Total Pharmasist</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card" style="background-color:#20c997;">
                    <div class="card-body cardcustom">
                        <h3 class="count-card-title">{{ $TotalContact}}</h3>
                        <h3 class="count-card-text">Total Contacts</h3>
                    </div>
                </div>
            </div>
            

        </div>
    </div>	

@endsection