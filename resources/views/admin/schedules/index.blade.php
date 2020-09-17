@extends('admin/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Schedule List</h1>
                     <a href="{{route('schedule.create')}}" class="btn btn-danger">Add</a>
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
                        <th>Doctor ID</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $schedule->doctor_id}}</td>
                        <td>{{$schedule->date}}</td>
                        <td>{{ $schedule->start_time}}</td>
                        <td>{{ $schedule->end_time}}</td>
                        
                        
                        <td>
                            {{-- <a href="{{route('schedule.show',$schedule->id)}}" class="btn btn-primary">Detail</a> --}}

                             <a href="{{route('schedule.edit',$schedule->id)}}" class="btn btn-info">Edit</a>
                             
                            <form method="post" action="{{route('schedule.destroy',$schedule->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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