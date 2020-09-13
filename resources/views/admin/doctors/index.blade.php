@extends('admin/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Doctor List</h1>
                     <a href="{{route('doctor.create')}}" class="btn btn-danger">Add</a>
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
                        <th>Doctor Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Qualification</th>
                        <th>Gender</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $doctor->doctor_name}}</td>
                        <td>{{ $doctor->address}}</td>
                        <td>{{ $doctor->phone_number }}</td>
                        <td>{{ $doctor->qualification }}</td>
                        <td>{{ $doctor->gender }}</td>doctor
                        <td>
                            <a href="{{route('doctor.show',$doctor->id)}}" class="btn btn-primary">Detail</a>

                             <a href="{{route('doctor.edit',$doctor->id)}}" class="btn btn-info">Edit</a>
                             
                            <form method="post" action="{{route('doctor.destroy',$doctor->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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