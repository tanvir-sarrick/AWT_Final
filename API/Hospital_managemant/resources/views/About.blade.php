@extends('Layout.app')
@section('title','About')
@section('content')

    <div class="container-fluid  contactbanner"  style="background-image: url('https://www.bdspecializedhospital.com/UI/FrontEnd/img/bg.jpg')">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- About Us -</h1>
            </div>
        </div>
    </div>

<div class="container-fluid ">
    <div class="row about">
        <div class="col-md-6 ">
            <h2>HOSPICE SPECIALIZED HOSPITAL</h2>
            <h4>GET A WORLD CLASS HEALTH SERVICE</h4>
            <p>
                 HSH has all the characteristics of a world-class hospital with wide range of services and specialists,
                 equipments and technology, ambience and service quality. The hospital is a showcase of synergy of
                 medical technology and advances in ICT Division through paperless medical records. The skilled nurses, 
                 technologists and administrators of Hospice Specialized Hospital, aided by state-of-the-art equipments, 
                 provide a congenial infrastructure for the medical professionals in providing healthcare of international standards.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/about.jpg')}}" alt="about/img">
        </div>

     </div>
</div>
@endsection