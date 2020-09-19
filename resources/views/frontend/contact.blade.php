@extends('frontend/master')
@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
            <div class="mt-5">
              
            </div>
          </div>
        </div>
      </div>
</section>
  <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
           
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-map-signs"></span>
              </div>
              <h3 class="mb-4">Address</h3>
              <p>190(A),Min Dama St,Hlaing Township,Yangon. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-phone2"></span>
              </div>
              <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">+95977777777</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
              </div>
              <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-globe"></span>
              </div>
              <h3 class="mb-4">Website</h3>
              <p><a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>

  
<div class="container-fluid">
<div class="container">
    <div class="row ">
      
        <div class="col-md-12">
          <form method="post" action="{{route('contacts.store')}}">
            @csrf
              <div class="form-group row ">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-6">
                         <input type="text" name="name" class="form-control" id="inputname" >                  
                     </div>
              </div>
                
              
                <div class="form-group row ">
                   <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-6">
                         <input type="text" name="email" class="form-control " id="inputemail" >  
                                          
                     </div>
                </div>


              <div class="form-group row ">
                   <label for="inputsubject" class="col-sm-2 col-form-label">Subject</label>
                     <div class="col-sm-6">
                         <input type="text" name="subject" class="form-control " id="inputsubject" >
                                           
                     </div>
              </div>

              <div class="form-group row ">
                      <label for="message" class="col-sm-2 col-form-label">Message</label>
                      <div class="col-sm-6">
                      <textarea class="form-control" name="message"></textarea>
                        
                      </div>
              </div>


                <div class="form-group row">
                  <div class="col-sm-1">
                    
                    <input type="submit" value="Send Message" class="btn btn-info confirmbtn">
                  </div>

                 {{--  <div class="col-sm-1">
                     <a href="{{route('index')}}" class="btn btn-info">Cancel</a><br><br>
                  </div> --}}
    
            
                </div>
          </form>
        </div>

    </div>
</div>
</div>
</section>
@endsection