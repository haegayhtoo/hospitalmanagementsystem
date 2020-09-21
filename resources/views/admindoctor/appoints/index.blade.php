@extends('admindoctor/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Appointment List</h1>
                     
                </div>
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Disease</th>
                        <th>Doctor Name</th>

                        {{-- <th>Schedule</th> --}}
                        {{-- <th>Status ID</th> --}}

                        
                       

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $appointment->name}}</td>
                        <td>{{ $appointment->gender }}</td>
                        <td>{{ $appointment->phone_number}}</td>
                        <td>{{ $appointment->date_of_birth }}</td>
                        <td>{{ $appointment->address}}</td>
                        <td>{{ $appointment->disease}}</td>
                        <td>{{ $appointment->doctor->name}}</td>
                        {{-- <td>{{ $appointment->start_time}}</td> --}}
                       {{--  <td>{{ $appointment->status_id }}</td> --}}
                    
                       

                        
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
    
@endsection