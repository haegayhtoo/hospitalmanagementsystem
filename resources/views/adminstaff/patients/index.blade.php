@extends('adminstaff/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Patient List</h1>
                     <a href="{{route('patient.create')}}" class="btn btn-danger">Add</a>
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
                        <th>Patient Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Disease</th>
                       
                        <th>Doctor ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $patient->patient_name}}</td>
                        
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->address}}</td>
                        <td>{{ $patient->phone_number}}</td>
                        <td>{{ $patient->disease}}</td>
                        
                        <td>{{ $patient->doctor_id}}</td>
                        <td>{{ $patient->start_date }}</td>
                        <th>{{ $patient->start_date }}</th>
                        <td>

                            <a href="{{route('patient.show',$patient->id)}}" class="btn btn-primary">Detail</a>
 
                            <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-info">Edit</a>
                             
                            <form method="post" action="{{route('patient.destroy',$patient->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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