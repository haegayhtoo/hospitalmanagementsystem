@extends('frontend/master')
@section('content')
 
<div class="jumbotron jumbotron-fluid subtitle">
      
  </div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Confirm</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cancel</a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
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
                    @foreach($cancelappointments as $cancelappointment)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $cancelappointment->name}}</td>
                        <td>{{ $cancelappointment->gender }}</td>
                        <td>{{ $cancelappointment->phone_number}}</td>
                        <td>{{ $cancelappointment->date_of_birth }}</td>
                        <td>{{ $cancelappointment->address}}</td>
                        <td>{{ $cancelappointment->disease}}</td>

                        <td>{{ $cancelappointment->doctor->name}}</td>
                        {{-- <td>{{ $appointment->start_time}}</td> --}}
                       {{--  <td>{{ $appointment->status_id }}</td> --}}
                    
                       

                        
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
  </div>
  
</div>






@endsection