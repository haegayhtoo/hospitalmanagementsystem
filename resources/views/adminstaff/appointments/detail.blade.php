@extends('adminstaff/master')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Staff Detail List</h1>
            <div class="text-right">
            	<a href="{{route('appointments.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		
                <div class="col-md-6">
                    <p>Name: &nbsp; &nbsp; &nbsp;{{$appointment->name}}</p>
                    <p>Gender:  &nbsp; &nbsp; &nbsp;{{$appointment->gender}}</p>
                    <p>Phone Number:  &nbsp; &nbsp; &nbsp;{{$appointment->phone_number}}</p>
                    <p>Date of Birth:  &nbsp; &nbsp; &nbsp;{{$appointment->date_of_birth}}</p>
                    <p>Address: &nbsp; &nbsp; &nbsp;{{$appointment->address}}</p>
                    <p>Disease: &nbsp; &nbsp; &nbsp;{{$appointment->disease}}</p>
                    <p>Doctor Name:  &nbsp; &nbsp; &nbsp;{{$appointment->doctor_name}}</p>
                     <p>Status ID:  &nbsp; &nbsp; &nbsp;{{$appointment->status_id}}</p>
                   
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection