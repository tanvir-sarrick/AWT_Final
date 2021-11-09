@extends('Layout.app')
@section('title','Our Teams')
@section('content')

<div class="title-box">
        <h1> Our Team</h1>
        </div>
        <div class="team-row">
            <div class="profile-box">
            <h4>Tanvir <br> Ahmed</h4>
            <small>Advisor</small>
            <img src="{{asset('images/tanvir.png')}}">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p>ID: 1901-1955-2</p>
            <p>Lecturer, CS</p>
        </div>
            
        <div class="profile-box">
            <h4>Md. Tanvir<br>Sarrick</h4>
            
            <small>Team Leader</small>
            <img src="{{asset('images/sarrick.png')}}">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p>ID: 18-38389-2</p>
            <p>Department, CSE</p>
        </div>
            
    
            <div class="profile-box">
            <h4>Md.Shafikul<br>Islam </h4>
            <small>Team Member</small>
            <img src="{{asset('images/shafiq.jpg')}}">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p>ID: 18-38348-2</p>
            <p>Department, CSE</p>
        </div>
            
            <div class="profile-box">
            <h4>Md. Tanvir<br>Ahmmed</h4>
            <small>Team Member</small>
            <img src="{{asset('images/Ahmmed.jpg')}}">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p>ID: 18-38031-2</p>
            <p>Department, CSE</p>
        </div>
            <div class="profile-box">
            <h4>Sayed<br> Mahmudul</h4>
            <small>Team Member</small>
            <img src="{{asset('images/sayed.jpg')}}">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p>ID: 18-38095-2</p>
            <p>Department, CSE</p>
        </div>
         
        </div>

@endsection
