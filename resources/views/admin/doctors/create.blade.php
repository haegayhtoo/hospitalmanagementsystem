@extends('admin/master')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
    				<h1 class="text-center ">Doctor Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('doctor.store')}}" method="post" >
    			@csrf

    			      <div class="form-group row ">
                   <label for="inputdoctorname" class="col-sm-2 col-form-label">Doctor Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorname" class="form-control" id="inputdoctorname">                         
                     </div>
                </div>

                <div class="form-group row ">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address"></textarea>
                    </div>
                </div>
                

                <div class="form-group row ">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control" id="inputnumber" >                       
                     </div>
                </div>

                <div class="form-group row ">
                      <label for="inputqualification" class="col-sm-2 col-form-label">Qualification</label>
                      <div class="col-sm-6">
                      <input type="text" name="qualification" class="form-control" id="inputqualification" > 
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
              
              
                <div class="form-group row">
                <input type="submit" value="Create" class="btn btn-success ">
                </div>

        </form>
        </div>
    </div>
</div>
</div>
    
@endsection