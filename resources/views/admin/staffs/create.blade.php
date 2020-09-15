@extends('admin/master')
@section('content')
<div class="container-fluid">
      {{-- Page heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
          <div class="col">
            <h1 class="text-center ">Staff Form</h1>
          </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('staff.store')}}" method="post" >
          @csrf

              <div class="form-group row {{$errors->has('staffname')? 'has-error':''}}">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="staffname" class="form-control @error('title')is-invalid @enderror" id="inputname" > <span class="text-danger">{{$errors->first('staffname')}}</span>                        
                     </div>
                </div>

                <div class="form-group row {{$errors->has('phonenumber')? 'has-error':''}}">
                   <label for="inputnumber" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-6">
                         <input type="text" name="phonenumber" class="form-control @error('title')is-invalid @enderror" id="inputnumber" >   <span class="text-danger">{{$errors->first('phonenumber')}}</span>                    
                     </div>
                </div>

               <div class="form-group row {{$errors->has('gender')? 'has-error':''}}">
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
              
              
              <div class="form-group row {{$errors->has('address')? 'has-error':''}}">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-6">
                      <textarea class="form-control @error('title')is-invalid @enderror" name="address"></textarea>
                      <span class="text-danger">{{$errors->first('address')}}</span>
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