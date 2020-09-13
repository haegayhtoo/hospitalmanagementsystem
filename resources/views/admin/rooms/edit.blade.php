@extends('admin/master')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Edit List</h1>
            <div class="text-right">
              <a href="{{route('room.index')}}"  class="btn btn-success">
                Go Back
              </a>
            </div>
          </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('room.update',$room->id)}}" method="post" >
    			@csrf
                @method('PUT')
                <div class="form-group row">
                   <label for="inputroomno" class="col-sm-2 col-form-label">Room No</label>
                     <div class="col-sm-10">
                         <input type="number" name="roomno" class="form-control" id="inputroomno" value="{{$room->room_no}}">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputroomtype" class="col-sm-2 col-form-label">Room Type</label>
                     <div class="col-sm-10">
                         <input type="text" name="roomtype" class="form-control" id="inputroomtype" value="{{$room->room_type}}">
                     </div>
                </div>
            
                <div class="form-group row">
                   <label for="inputroomcharges" class="col-sm-2 col-form-label">Daily Charges</label>
                     <div class="col-sm-10">
                         <input type="number" name="dailycharges" class="form-control" id="inputroomcharges" value="{{$room->daily_charges}}">
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