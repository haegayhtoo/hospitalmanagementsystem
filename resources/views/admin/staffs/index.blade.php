@extends('admin/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Staff List</h1>
                     <a href="{{route('staff.create')}}" class="btn btn-danger">Add</a>
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
                        <th>Staff Name</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($staffs as $staff)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $staff->staff_name}}</td>
                        <td>{{ $staff->phone_number}}</td>
                        <td>{{ $staff->gender }}</td>
                        <td>{{ $staff->address}}</td>
                        <td>
                            <a href="{{route('staff.show',$staff->id)}}" class="btn btn-primary">Detail</a>

                             <a href="{{route('staff.edit',$staff->id)}}" class="btn btn-info">Edit</a>
                             
                            <form method="post" action="{{route('staff.destroy',$staff->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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