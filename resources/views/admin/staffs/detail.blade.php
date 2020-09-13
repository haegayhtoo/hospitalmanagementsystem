@extends('admin/master')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Staff Detail List</h1>
            <div class="text-right">
            	<a href="{{route('staff.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		
                <div class="col-md-6">
                    <p>Staff Name: &nbsp; &nbsp; &nbsp;{{$staff->staff_name}}</p>
                    <p>Phone Number:  &nbsp; &nbsp; &nbsp;{{$staff->phone_number}}</p>
                    <p>Gender:  &nbsp; &nbsp; &nbsp;{{$staff->gender}}</p>
                    <p>Address:  &nbsp; &nbsp; &nbsp;{{$staff->address}}</p>
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection