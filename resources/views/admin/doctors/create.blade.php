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
    		<form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
    			@csrf

    			      <div class="form-group row {{$errors->has('doctorname')? 'has-error':''}}">
                   <label for="inputdoctorname" class="col-sm-2 col-form-label">Doctor Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorname" class="form-control @error('title')is-invalid @enderror" id="inputdoctorname">  <span class="text-danger">{{$errors->first('doctorname')}}</span>                       
                     </div>
                </div>

                <div class="form-group row {{$errors->has('doctoremail')? 'has-error':''}}">
                   <label for="inputdoctoremail" class="col-sm-2 col-form-label">Doctor Email</label>
                     <div class="col-sm-6">
                         <input type="email" name="doctoremail" class="form-control @error('doctoremail')is-invalid @enderror" id="inputdoctoremail">  <span class="text-danger">{{$errors->first('doctoremail')}}</span>                       
                     </div>
                </div>

                <div class="form-group row {{$errors->has('doctorpassword')? 'has-error':''}}">
                   <label for="inputdoctorpassword" class="col-sm-2 col-form-label">Doctor Password</label>
                     <div class="col-sm-6">
                         <input type="password" name="doctorpassword" class="form-control @error('doctorpassword')is-invalid @enderror" id="inputdoctorpassword">  <span class="text-danger">{{$errors->first('doctorpassword')}}</span>                       
                     </div>
                </div>

                <div class="form-group row {{$errors->has('photo')? 'has-error':''}}">
                   <label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
                     <div class="col-sm-6">
                         <input type="file" name="photo" class="d-block" id="inputphoto">
                         <span class="text-danger">{{$errors->first('photo')}}</span>
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

                <div class="form-group row {{$errors->has('qualification')? 'has-error':''}}">
                      <label for="inputqualification" class="col-sm-2 col-form-label">Qualification</label>
                      <div class="col-sm-6">
                      <input type="text" name="qualification" class="form-control @error('title')is-invalid @enderror" id="inputqualification" > 
                      <span class="text-danger">{{$errors->first('qualification')}}</span>
                      </div>
                </div>
                

               <div class="form-group row {{$errors->has('gender')? 'has-error':''}}">
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