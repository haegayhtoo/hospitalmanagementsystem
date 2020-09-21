{{-- @extends('admin/master')
@section('content')
<div class="container-fluid"> --}}

    	{{-- Page heading --}}
      
    	{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Doctor Edit</h1>
            <div class="text-right">
              <a href="{{route('doctor.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>
      </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('doctor.update',$doctor->id)}}" method="post" enctype="multipart/form-data">
    			@csrf
                @method('PUT')
                 <div class="form-group row ">
                   <label for="inputdoctorname" class="col-sm-2 col-form-label">Doctor Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorname" class="form-control" id="inputdoctorname" value="{{$doctor->doctor_name}}">                         
                     </div>
                </div>

                 <div class="form-group row">
                   <label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
                     <div class="col-sm-6">
                         <input type="file" name="photo" class="d-block" id="inputphoto" value="{{$doctor->photo}}">

                          <img src="{{asset($doctor->photo)}}" class="img-fluid w-20">

                         <input type="hidden" name="oldphoto" value="{{$doctor->photo}}">
                      
                     </div>
                  </div>

                <div class="form-group row ">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address" >{{$doctor->address}}</textarea>
                    </div>
                </div>
                

                <div class="form-group row ">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control" id="inputnumber" value="{{$doctor->phone_number}}">                       
                     </div>
                </div>

                <div class="form-group row ">
                      <label for="inputqualification" class="col-sm-2 col-form-label">Qualification</label>
                      <div class="col-sm-6">
                      <input type="text" name="qualification" class="form-control" id="inputqualification" value="{{$doctor->qualification}}"> 
                      </div>
                </div>
                

                <div class="form-group row ">
                   <label for="inputgender" class="col-sm-2 col-form-label" value="{{$doctor->gender}}">Gender</label>
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
                
               
                <div class="form-group row">
                <input type="submit" value="Update" class="btn btn-success ">
                </div>
        </form>
        </div>
    </div>
</div>
        
</div>
    
@endsection --}}