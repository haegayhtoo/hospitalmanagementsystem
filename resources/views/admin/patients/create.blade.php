@extends('admin/master')
@section('content')
<div class="container-fluid">
      {{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
            <h1 class="text-center ">Patient Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('patient.store')}}" method="post" >
          @csrf

              <div class="form-group row {{$errors->has('patientname')? 'has-error':''}}">
                   <label for="inputpatientname" class="col-sm-2 col-form-label">Patient Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="patientname" class="form-control @error('title')is-invalid @enderror" id="inputpatientname" >   <span class="text-danger">{{$errors->first('patientname')}}</span>                      
                     </div>
                </div>
                
                <div class="form-group row {{$errors->has('age')? 'has-error':''}}">
                   <label for="inputage" class="col-sm-2 col-form-label">Age</label>
                     <div class="col-sm-6">
                         <input type="number" name="age" class="form-control @error('title')is-invalid @enderror" id="inputage" > 
                         <span class="text-danger">{{$errors->first('age')}}</span>                     
                     </div>
                </div>

               <div class="form-group row ">
                   <label for="inputgender" class="col-sm-2 col-form-label" >Gender</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" value="female" checked>
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
              
              <div class="form-group row {{$errors->has('address')? 'has-error':''}}">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control @error('title')is-invalid @enderror" name="address"></textarea>
                      <span class="text-danger">{{$errors->first('address')}}</span>
                      </div>
              </div>
                

              <div class="form-group row {{$errors->has('phonenumber')? 'has-error':''}}">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control @error('title')is-invalid @enderror" id="inputnumber" > <span class="text-danger">{{$errors->first('phonenumber')}}</span>                      
                     </div>
                </div>

              <div class="form-group row {{$errors->has('disease')? 'has-error':''}}">
                   <label for="inputdisease" class="col-sm-2 col-form-label">Disease</label>
                     <div class="col-sm-6">
                         <input type="text" name="disease" class="form-control @error('title')is-invalid @enderror" id="inputdisease" > 
                         <span class="text-danger">{{$errors->first('disease')}}</span>                      
                     </div>
                </div>

                
                <div class="form-group row {{$errors->has('doctorid')? 'has-error':''}}">
                   <label for="inputdoctorid" class="col-sm-2 col-form-label">Doctor ID</label>
                     <div class="col-sm-6">
                         <input type="number" name="doctorid" class="form-control @error('title')is-invalid @enderror" id="inputdoctorid" >  <span class="text-danger">{{$errors->first('doctorid')}}</span>                     
                     </div>
                </div>

                 <div class="form-group row {{$errors->has('startdate')? 'has-error':''}}">
                   <label for="inputstartdate" class="col-sm-2 col-form-label">Start Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="startdate" class="form-control @error('title')is-invalid @enderror" id="inputstartdate" >  <span class="text-danger">{{$errors->first('startdate')}}</span>                     
                     </div>
                </div>

                <div class="form-group row {{$errors->has('enddate')? 'has-error':''}}">
                   <label for="inputenddate" class="col-sm-2 col-form-label">End Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="enddate" class="form-control @error('title')is-invalid @enderror" id="inputenddate" > 
                         <span class="text-danger">{{$errors->first('enddate')}}</span>                      
                     </div>
                </div>

                <div class="form-group row">
                <input type="submit" value="Create" class="btn btn-success ">
                </div>

            </form>
        </div>
    </div>
</div>
</div>
    
@endsection