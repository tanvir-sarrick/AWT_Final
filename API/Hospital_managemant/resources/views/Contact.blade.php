@extends('Layout.app')
@section('title','Conact')
@section('content')

    <div class="container-fluid jumbotron contactbanner">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- Contact Us -</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.726552359787!2d90.38292552230912!3d23.876733598781986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c413e891ad29%3A0x98211bdb93d8dec1!2sSector%2011%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1635350383611!5m2!1sen!2sbd" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="service-card-title">Address</h3>
                <hr>
                <p class="footer-text"><i class="fa fa-map-marker"></i> Sector 11, Uttara, Dhaka <i class="fa ml-2 fa-phone"></i>   01723895757  <i class="fa ml-2 fa-envelope"></i>   sarrick101@gmail.com</p>
                <h3 class="service-card-title">Send Message </h3>
                <form action="{{route('contact')}}" method="post">
                     {{ @csrf_field() }}
                    <div class="form-group ">
                        <input  type="text" name="name"  value="{{old('name')}}" class="form-control w-100" placeholder="Enter Your">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control  w-100" placeholder="Enter Mobile No ">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="{{old('email')}}" class="form-control  w-100" placeholder="Enter Email Address">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" type="text" class="form-control  w-100" placeholder="Enter Your Message "></textarea>
                        @error('message')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <button id="contactSendBtnId"  class="btn btn-block normal-btn w-100">Send </button>
                    </div>
                </form>
        </div>
    </div>
@endsection