@extends('admin/master')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
    				<h1 class="text-center ">Room Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('room.store')}}" method="post" >
    			@csrf

    			<div class="form-group row ">
                   <label for="inputroomno" class="col-sm-2 col-form-label">Room No</label>
                     <div class="col-sm-6">
                         <input type="number" name="roomno" class="form-control" id="inputroomno">                         
                     </div>
                </div>

                <div class="form-group row ">
                   <label for="inputroomtype" class="col-sm-2 col-form-label">Room Type</label>
                     <div class="col-sm-6">
                         <input type="text" name="roomtype" class="form-control" id="inputroomtype">                       
                     </div>
                </div>

                <div class="form-group row ">
                   <label for="inputdailycharges" class="col-sm-2 col-form-label">Daily Charges</label>
                     <div class="col-sm-6">
                         <input type="number" name="dailycharges" class="form-control" id="inputdailycharges">                        
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