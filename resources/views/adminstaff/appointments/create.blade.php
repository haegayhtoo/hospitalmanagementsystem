@extends('adminstaff/master')
@section('content')
<div class="container-fluid">
      {{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
            <h1 class="text-center ">Appointment Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('appointments.store')}}" method="post" >
          @csrf

              <div class="form-group row {{$errors->has('appointmentname')? 'has-error':''}}">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="appointmentname" class="form-control @error('title')is-invalid @enderror" id="inputname" > 
                         <span class="text-danger">{{$errors->first('appointmentname')}}</span>                   
                     </div>
                </div>
                
                <div class="form-group row {{$errors->has('gender')? 'has-error':''}}">
                   <label for="inputgender" class="col-sm-2 col-form-label" >Gender</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="gender" id="inputradio" value="female" checked>
                      <label class="form-check-label" for="inputradio">
                      Female
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" value="male" checked>
                      <label class="form-check-label" for="inputradio">
                      Male
                      </label>
                    </div>
                  </div>
              </div>
              
                <div class="form-group row {{$errors->has('phonenumber')? 'has-error':''}}">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control @error('title')is-invalid @enderror" id="inputnumber" >  
                         <span class="text-danger">{{$errors->first('phonenumber')}}</span>                        
                     </div>
                </div>


              <div class="form-group row {{$errors->has('date')? 'has-error':''}}">
                   <label for="inputdate" class="col-sm-2 col-form-label">Date of Birth</label>
                     <div class="col-sm-6">
                         <input type="date" name="date" class="form-control @error('title')is-invalid @enderror" id="inputdate" >
                         <span class="text-danger">{{$errors->first('date')}}</span>                   
                     </div>
                </div>

              <div class="form-group row {{$errors->has('address')? 'has-error':''}}">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address"></textarea>
                      <span class="text-danger">{{$errors->first('address')}}</span>   
                    </div>
                </div>

                <div class="form-group row {{$errors->has('disease')? 'has-error':''}}">
                   <label for="inputdisease" class="col-sm-2 col-form-label">Disease</label>
                     <div class="col-sm-6">
                         <input type="text" name="disease" class="form-control @error('title')is-invalid @enderror" id="inputdisease">    
                         <span class="text-danger">{{$errors->first('disease')}}</span>                  
                     </div>
                </div>
                
                <div class="form-group row {{$errors->has('doctorname')? 'has-error':''}}">
                   <label for="inputdoctorname" class="col-sm-2 col-form-label">Doctor Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorname" class="form-control @error('title')is-invalid @enderror" id="inputdoctorname">    
                         <span class="text-danger">{{$errors->first('doctorname')}}</span>                  
                     </div>
                </div>

                {{-- <div class="form-group row {{$errors->has('starttime')? 'has-error':''}}">
                   <label for="inputtime" class="col-sm-2 col-form-label">Schedule</label>
                     <div class="col-sm-6">
                         <input type="time" name="starttime" class="form-control @error('title')is-invalid @enderror" id="inputtime" >  
                         <span class="text-danger">{{$errors->first('starttime')}}</span>                     
                     </div>
                </div> --}}

                <div class="form-group row {{$errors->has('statusid')? 'has-error':''}}">
                   <label for="inputstatusid" class="col-sm-2 col-form-label">Status ID</label>
                     <div class="col-sm-6">
                         <input type="number" name="statusid" class="form-control @error('title')is-invalid @enderror" id="inputstatusid"> 
                         <span class="text-danger">{{$errors->first('statusid')}}</span>                     
                     </div>
                </div>
                
                

                <div class="form-group row ">
                  <div class="col-sm-1">
                    <input type="submit" value="Confirm" class="btn btn-success ">
                    {{-- <form method="post" action="{{route('appointment.store')}}" >
                               <input type="submit" value="Confirm" class="btn btn-success ">
                            </form> --}}
                  </div>

                  <div class="col-sm-1">
                     <input type="submit" value="Cancel" class="btn btn-success ">
                  </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
    
@endsection