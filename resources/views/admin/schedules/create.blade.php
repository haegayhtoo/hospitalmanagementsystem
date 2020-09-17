@extends('admin/master')
@section('content')
<div class="container-fluid">
      {{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
            <h1 class="text-center ">Schedule Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('schedule.store')}}" method="post" >
          @csrf

              <div class="form-group row {{$errors->has('doctorid')? 'has-error':''}}">
                   <label for="inputdoctorid" class="col-sm-2 col-form-label">Doctor ID</label>
                     <div class="col-sm-6">
                         <input type="text" name="doctorid" class="form-control @error('title')is-invalid @enderror" id="inputdoctorid" >  <span class="text-danger">{{$errors->first('doctorid')}}</span>                       
                     </div>
                </div>

                <div class="form-group row {{$errors->has('scheduledate')? 'has-error':''}}">
                   <label for="inputdate" class="col-sm-2 col-form-label">Date</label>
                     <div class="col-sm-6">
                         <input type="date" name="scheduledate" class="form-control @error('title')is-invalid @enderror" id="inputdate" > 
                         <span class="text-danger">{{$errors->first('scheduledate')}}</span>                      
                     </div>
                </div>

               
              <div class="form-group row {{$errors->has('starttime')? 'has-error':''}}">
                   <label for="inputtime" class="col-sm-2 col-form-label">Start Time</label>
                     <div class="col-sm-6">
                         <input type="time" name="starttime" class="form-control @error('title')is-invalid @enderror" id="inputtime" >  
                         <span class="text-danger">{{$errors->first('starttime')}}</span>                     
                     </div>
                </div>

                <div class="form-group row {{$errors->has('endtime')? 'has-error':''}}">
                   <label for="inputtime" class="col-sm-2 col-form-label">End Time</label>
                     <div class="col-sm-6">
                         <input type="time" name="endtime" class="form-control @error('title')is-invalid @enderror" id="inputtime" >  
                         <span class="text-danger">{{$errors->first('endtime')}}</span>                     
                     </div>
                </div>
              
                
                <div class="form-group row">
                <input type="submit" value="Create" class="btn btn-success ">
                </div>

            </form>
        </div>
    </div>
</div>
</div>
    
@endsection