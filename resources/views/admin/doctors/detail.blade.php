@extends('admin/master')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Staff Detail List</h1>
            <div class="text-right">
            	<a href="{{route('doctor.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		
                <div class="col-md-6">
                    <p>Doctor Name: &nbsp; &nbsp; &nbsp;{{$doctor->doctor_name}}</p>
                    <p>Photo: &nbsp; &nbsp; &nbsp;{{$doctor->photo}}</p>
                    <p>Address:  &nbsp; &nbsp; &nbsp;{{$doctor->address}}</p>
                    <p>Phone Number:  &nbsp; &nbsp; &nbsp;{{$doctor->phone_number}}</p>
                    <p>Qualification:  &nbsp; &nbsp; &nbsp;{{$doctor->qualification}}</p>
                    <p>Gender:  &nbsp; &nbsp; &nbsp;{{$doctor->gender}}</p>
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection