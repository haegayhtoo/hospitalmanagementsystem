@extends('frontend/master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
      
</div>
  
<div class="container-fluid">
<div class="container">
    <div class="row ">
      
        <div class="col-md-12">
           <form method="post" action="{{route('appointments.store')}}">
            @csrf
              <div class="form-group row ">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="appointmentname" class="form-control" id="inputname" >                    
                     </div>
              </div>
                
              <div class="form-group row ">
                   <label for="inputgender" class="col-sm-2 col-form-label" >Gender</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" value="female" checked>
                      <label class="form-check-label" for="inputradio">
                      Female
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="inputradio" value="male" checked>
                      <label class="form-check-label" for="inputradio">
                      Male
                      </label>
                    </div>
                  </div>
              </div>
              
              <div class="form-group row ">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="number" name="phonenumber" class="form-control" id="inputnumber" >                       
                     </div>
              </div>


              <div class="form-group row ">
                   <label for="inputdate" class="col-sm-2 col-form-label">Date of Birth</label>
                     <div class="col-sm-6">
                         <input type="date" name="date" class="form-control" id="inputdate" >                       
                     </div>
              </div>

              <div class="form-group row ">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="address"></textarea>
                      </div>
              </div>
                
              <div class="form-group row ">
                   <label for="inputdisease" class="col-sm-2 col-form-label">Disease</label>
                     <div class="col-sm-6">
                         <input type="text" name="disease" class="form-control" id="inputdisease">                   
                     </div>
              </div>

              <div class="form-group row ">
                   <label for="inputdoctorname" class="col-sm-2 col-form-label">Doctor Name</label>
                     <div class="col-sm-6">
                         {{-- <input type="text" name="doctorname" class="form-control" id="inputdoctorname">  --}}
                         <div class="form-group row">
                            <select class="form-control form-control-md" id="inputDoctor" name="doctor">
                             
                                <option selected disabled>Choose Doctor</option>
                              @foreach($doctors as $doctor)
                              <option value="{{$doctor->id}}">{{$doctor->doctor_name}}

                              </option>
                             
                              @endforeach
                            </select>

                            
                            {{-- <input class="form-control form-control-md" type="text" name="date" value="" id="date" readonly="readonly" > --}}

                            

                          </div> 
                      
                     </div>
                     
              </div>
                
              <input class="form-control form-control-md" type="time" name="stime" value="" id="stime" readonly="readonly" >
              <input class="form-control form-control-md" type="time" name="etime" value="" id="etime" readonly="readonly" >
              {{-- <div class="form-group row ">
                   <label for="inputtime" class="col-sm-2 col-form-label">Schedule</label>
                     <div class="col-sm-6">
                      
                         {{-- <input type="text" name="starttime" class="form-control" id="inputtime">
                         <div class="form-group row"> --}}
                            {{-- <select class="form-control form-control-md" id="inputtime" name="starttime">
                              <option>Schedule</option>
                              @foreach($schedules as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->start_time}}
                                </option>
                              @endforeach
                           </select> --}}
                            {{-- <input class="form-control form-control-md" type="text" name="date" value="" id="date" readonly="readonly" > --}}
                         {{--  </div> 
 --}}
                     {{-- </div> --}} 

              {{-- </div>  --}}
                
                <div class="form-group row ">

               {{--  <div class="form-group row ">

                   <label for="inputstatusid" class="col-sm-2 col-form-label">Status ID</label>
                     <div class="col-sm-6">
                         <input type="number" name="statusid" class="form-control" id="inputstatusid">                   
                     </div>
                </div>
 --}}
               

                <div class="form-group row">
                  <div class="col-sm-1">
                    
                    <input type="submit" value="Save" class="btn btn-info confirmbtn">
                  </div>

                 {{--  <div class="col-sm-1">
                     <a href="{{route('index')}}" class="btn btn-info">Cancel</a><br><br>
                  </div> --}}
    
            
        </div>

    </div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#inputDoctor').change(function(){


     var id = $(this).val();


     $.post('doctorc',{id:id},function(response){
      console.log(response.dtimes.length);
      if(response.dtimes.length>0){
      $.each(response.dtimes,function(i,v){
        console.log(v);
        $('#stime').val(v.start_time);
        $('#etime').val(v.end_time);
      });}else{
        $('#stime').val('');
        $('#etime').val('');
      }
     })
    

    })
  })

</script>
@endsection