@extends('admin/master')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Detail List</h1>
            <div class="text-right">
            	<a href="{{route('room.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		
                <div class="col-md-6">
                    <p>Room No: &nbsp; &nbsp; &nbsp;{{$room->room_no}}</p>
                    <p>Room Type:  &nbsp; &nbsp; &nbsp;{{$room->room_type}}</p>
                    <p>Daily Charges:  &nbsp; &nbsp; &nbsp;{{$room->daily_charges}}</p>
                   
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection