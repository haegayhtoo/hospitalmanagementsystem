{{-- @extends('admin/master')
@section('content')
<div class="container-fluid"> --}}
    	{{-- Page heading --}}
    	{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Staff Edit List</h1>
            <div class="text-right">
              <a href="{{route('staff.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>
          </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('staff.update',$staff->id)}}" method="post" >
    			@csrf
                @method('PUT')
                 <div class="form-group row ">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="staffname" class="form-control" id="inputname" value="{{$staff->staff_name}}">                         
                     </div>
                </div>

                <div class="form-group row ">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="text" name="phonenumber" class="form-control" id="inputnumber" value="{{$staff->phone_number}}">                       
                     </div>
                </div>

               <div class="form-group row ">
                   <label for="inputgender" class="col-sm-2 col-form-label" value="{{$staff->gender}}">Gender</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" @if($staff->gender=='female')checked @endif value="female" >
                      <label class="form-check-label" for="inputradio">
                      Female
                      </label>
                    </div>
                
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio"  @if($staff->gender=='male')checked @endif value="male" >
                      <label class="form-check-label" for="inputradio">
                      Male
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row ">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address">{{$staff->address}}</textarea>
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