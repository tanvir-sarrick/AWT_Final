@extends('Layout.app')
@section('title','Feedback')
@section('content')

    <div class="container-fluid  contactbanner"  style="background-image: url('https://www.bdspecializedhospital.com/UI/FrontEnd/img/bg.jpg')">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- Feedback -</h1>
            </div>
        </div>
    </div>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-6 ">
            <h2>HOSPICE ONLINE FEEDBACK FORM</h2>
            <form action="{{route('feedback')}}" method="post">
                    {{ @csrf_field() }}
                    <div class="form-group ">
                        <input  type="text" name="name"  value="{{old('name')}}" class="form-control w-100" placeholder="Enter Your">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 margin-bottom-30">
                        <div class="table">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><h5>Topics</h5></th>
                                    <th><h5>Poor</h5></th>
                                    <th><h5>Good</h5></th>
                                    <th><h5>Excellent</h5></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ambiance</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="ambiance" value="poor" {{(old('ambiance') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="ambiance" value="good" {{(old('ambiance') == 'good') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="ambiance" value="excellent" {{(old('ambiance') == 'excellent') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Customer Care Service</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="CustomerCareService" value="poor" {{(old('CustomerCareService') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="CustomerCareService" value="good" {{(old('CustomerCareService') == 'good') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="CustomerCareService" value="excellent" {{(old('CustomerCareService') == 'excellent') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doctor's Service</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="doctorService" value="poor" {{(old('doctorService') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="doctorService" value="good" {{(old('doctorService') == 'good') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="doctorService" value="excellent" {{(old('doctorService') == 'excellent') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nurse's Service</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="nurseService" value="poor" {{(old('nurseService') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="nurseService" value="good" {{(old('nurseService') == 'good') ? 'checked' : ''}}>
                                           
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="nurseService" value="excellent" {{(old('nurseService') == 'excellent') ? 'checked' : ''}}>
                                           
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Billing Service</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="billing" value="poor" {{(old('billing') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="billing" value="good" {{(old('billing') == 'good') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="billing" value="excellent" {{(old('billing') == 'excellent') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cleaning Service</td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="cleaning" value="poor" {{(old('cleaning') == 'poor') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="cleaning" value="good" {{(old('cleaning') == 'good') ? 'checked' : ''}}>
                                           
                                        </label>
                                    </td>
                                    <td>
                                        <label class="radioCont">
                                            <input type="radio" name="cleaning" value="excellent" {{(old('cleaning') == 'excellent') ? 'checked' : ''}}>
                                            
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                 <div>
                        <button id="contactSendBtnId"  class="btn btn-block normal-btn w-100">Send </button>
                </div>
            </form>
            
        </div>
     </div>
</div>
@endsection