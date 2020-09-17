@extends('frontend/master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
    
  </div>


<div class="container mt-5">
	<div class="row">

		@foreach($doctors as $doctor)
		<div class="col-3">
			<div class="card" style="width: 18rem;">
			  <img src="{{$doctor->photo}}" class="card-img-top" alt="..." >
			  <div class="card-body">
			    <h5 class="card-title">{{$doctor->doctor_name}}</h5>
			    <p class="card-text">Address: {{$doctor->address}}</p>
			    <p class="card-text">Phone No: {{$doctor->phone_number}}</p>
			    <p class="card-text">Qualification: {{$doctor->qualification}}</p>
			    <p class="card-text">Gender: {{$doctor->gender}}</p>


			  </div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection