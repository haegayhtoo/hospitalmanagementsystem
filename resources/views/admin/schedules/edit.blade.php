@extends('admin/master')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Edit List</h1>
            <div class="text-right">
              <a href="{{route('schedule.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>
          </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('schedule.update',$schedule->id)}}" method="post" >
    			@csrf
                @method('PUT')

                <div class="form-group row">
                   <label for="inputdoctorid" class="col-sm-2 col-form-label">Doctor ID</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorid" class="form-control" id="inputdoctorid" > 
                     </div>
                </div>

                <div class="form-group row">
                   <label for="inputdate" class="col-sm-2 col-form-label">Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="scheduledate" class="form-control" id="inputdate" >       
                     </div>
                </div>

               
              <div class="form-group row">
                   <label for="inputtime" class="col-sm-2 col-form-label">Start Time</label>
                     <div class="col-sm-6">
                         <input type="time" name="starttime" class="form-control" id="inputtime" >  
                         
                     </div>
                </div>

                <div class="form-group row">
                   <label for="inputtime" class="col-sm-2 col-form-label">End Time</label>
                     <div class="col-sm-6">
                         <input type="time" name="endtime" class="form-control" id="inputtime" >  
                        
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