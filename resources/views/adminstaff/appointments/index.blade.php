@extends('adminstaff/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Appointment List</h1>
                     <a href="{{route('appointments.create')}}" class="btn btn-danger">Add</a>
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
                        <th>Doctor Name</th>
                        <th>Patient ID</th>
                        <th>Schedule ID</th>
                        <th>Staff ID</th>
                        <th>Action</th>

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
                        <td>{{ $appointment->doctor_name}}</td>
                        <td>{{ $appointment->patient_id}}</td>
                        <td>{{ $appointment->schedule_id }}</td>
                        <td>{{ $appointment->staff_id}}</td>
                        <td>
                        
                        <a href="" class="btn btn-primary">Confirm</a>
                            {{-- <a href="{{route('appointments.show',$appointment->id)}}" class="btn btn-primary">Detail</a> --}}

                             {{-- <a href="{{route('appointment.edit',$appointment->id)}}" class="btn btn-info">Edit</a> --}}
                             
                            <form method="post" action="{{route('appointments.destroy',$appointment->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
    
@endsection