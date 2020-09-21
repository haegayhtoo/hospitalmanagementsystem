@extends('adminstaff/master')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Patient Detail List</h1>
            <div class="text-right">
            	<a href="{{route('patient.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		
                <div class="col-md-6">
                    <p>Patient Name: &nbsp; &nbsp; &nbsp;{{$patient->patient_name}}</p>
                    <p>Age:  &nbsp; &nbsp; &nbsp;{{$patient->age}}</p>
                    <p>Gender:  &nbsp; &nbsp; &nbsp;{{$patient->gender}}</p>
                    <p>Address:  &nbsp; &nbsp; &nbsp;{{$patient->address}}</p>
                    <p>Phone Number:  &nbsp; &nbsp; &nbsp;{{$patient->phone_number}}</p>
                    <p>Disease: &nbsp; &nbsp; &nbsp;{{$patient->disease}}</p>
                    <p>Doctor ID:  &nbsp; &nbsp; &nbsp;{{$patient->doctor_id}}</p>
                    <p>Start Date:  &nbsp; &nbsp; &nbsp;{{$patient->start_date}}</p>
                    <p>End Date:  &nbsp; &nbsp; &nbsp;{{$patient->start_date}}</p>
                    
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection