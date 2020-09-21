@extends('adminstaff/master')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Patient Edit List</h1>
            <div class="text-right">
              <a href="{{route('patient.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>
      </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('patient.update',$patient->id)}}" method="post" >
    			@csrf
                @method('PUT')
                 <div class="form-group row ">
                   <label for="inputpatientname" class="col-sm-2 col-form-label">Patient Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="patientname" class="form-control" id="inputpatientname" value="{{$patient->patient_name}}">                         
                     </div>
                </div>
                
                <div class="form-group row ">
                   <label for="inputage" class="col-sm-2 col-form-label">Age</label>
                     <div class="col-sm-6">
                         <input type="number" name="age" class="form-control" id="inputage" value="{{$patient->age}}">                       
                     </div>
                </div>

               <div class="form-group row ">
                   <label for="inputgender" class="col-sm-2 col-form-label"  value="{{$patient->gender}}">Gender</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" @if($doctor->gender=='female')checked @endif value="female" >
                      <label class="form-check-label" for="inputradio">
                      Female
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" @if($doctor->gender=='male')checked @endif value="male" >
                      <label class="form-check-label" for="inputradio">
                      Male
                      </label>
                    </div>
                  </div>
              </div>
              
              <div class="form-group row ">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address">{{$patient->address}}</textarea>
                    </div>
                </div>
                

              <div class="form-group row ">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control" id="inputnumber" value="{{$patient->phone_number}}">                       
                     </div>
                </div>

              <div class="form-group row ">
                   <label for="inputdisease" class="col-sm-2 col-form-label">Disease</label>
                     <div class="col-sm-6">
                         <input type="text" name="disease" class="form-control" id="inputdisease" value="{{$patient->disease}}">                       
                     </div>
                </div>

                
                <div class="form-group row ">
                   <label for="inputdoctorid" class="col-sm-2 col-form-label">Doctor ID</label>
                     <div class="col-sm-6">
                         <input type="number" name="doctorid" class="form-control" id="inputdoctorid" value="{{$patient->doctor_id}}">                       
                     </div>
                </div>

                 <div class="form-group row ">
                   <label for="inputstartdate" class="col-sm-2 col-form-label">Start Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="startdate" class="form-control" id="inputstartdate" value="{{$patient->start_date}}">                       
                     </div>
                </div>

                <div class="form-group row ">
                   <label for="inputenddate" class="col-sm-2 col-form-label">End Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="enddate" class="form-control" id="inputenddate" value="{{$patient->end_date}}">                       
                     </div>
                </div>

               
                <div class="form-group row">
                <input type="submit" value="Update" class="btn btn-success ">
                </div>
        </form>
        </div>
    </div>
</div>
        
</div>
    
@endsection