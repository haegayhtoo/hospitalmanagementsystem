<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hospital Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset ('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset ('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset ('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset ('frontend/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset ('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset ('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset ('frontend/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 ">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>

					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    {{-- <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a><a href="#">Sign In</a></p> --}}

                @guest
                           @if (Route::has('register'))
                    
                               <a class="text-decoration-none float-right loginLink" href="{{ route('register') }}"> Sign-up</a>
                           @endif
                               <a href="{{route('loginform')}}" class="d-xl-block d-lg-block d-md-block d-none text-decoration-none loginLink float-right">| Login&nbsp;</a>           
                           @else
                               <a style="color: #EC7094;" id="navbarDropdown" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none float-right dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}</a>
                         
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                               </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                             </form>
                            </div>
                        @endguest
					    </div>

              

				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Hospital Management System</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
<<<<<<< HEAD
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Appointment</a></li>
=======
	          <li class="nav-item"><a href="{{route('index')}}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="{{route('doctor')}}" class="nav-link"><span>Doctors</span></a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{route('appointment')}}" class="nav-link">Appointment</a></li>
>>>>>>> 020f2fb7a55c23fa4e8dafe04f8a664e503323bc
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
    @yield('content')

    <footer style="background-color:purple">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-12 text-center">
  
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SPNM</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 
    
  

 
  <script src="{{asset ('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset ('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset ('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset ('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset ('frontend/js/aos.js')}}"></script>
  <script src="{{asset ('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset ('frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset ('frontend/js/google-map.js')}}"></script>
  
  <script src="{{asset ('frontend/js/main.js')}}"></script>
    
  <script type="text/javascript" src="{{asset('frontend/js/localstorage_custom.js')}}"></script>
    
  </body>
</html>