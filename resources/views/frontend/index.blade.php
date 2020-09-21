@extends('frontend/master')
@section('content')
<section  style="background-image: url({{asset('frontend/images/bg_3.jpg')}});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-6 pt-5 ftco-animate">
            <div class="mt-5">
                <span class="subheading">Welcome to Hospital Management System</span>
                <h1 class="mb-4">We are here <br>for your Care</h1>
                <p class="mb-4">Hospital management information system is an important tool and means for hospital modern management. It is an important guarantee for hospitals to deepen reform, strengthen management, improve efficiency, and develop harmoniously. It will improve medical quality, promote resource sharing, expand information services, support teaching research, and improve hospitals. Competitiveness and so on are of great significance. </p>
            </div>
        </div>
    </div>
  </div>
</section>
<br>

<h1 style="text-align: center;color: black">Our Department</h1>
<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    <div class="container-fluid px-0">
       <div class="row no-gutters">

         <div class="col-md-12">
            <div class="row no-gutters">
                <div class="col-md-4">
                  <div class="department-wrap p-4 ftco-animate">
                     <div class="text p-2 text-center">
                        <div class="icon">
                           <span class="flaticon-stethoscope"></span>
                        </div>
                       <h3><a href="#">Maternity</a></h3>
                       <P>Women now have a choice of who leads their maternity care and where they give birth. Care can be led by a consultant, a GP or a midwife. Maternity wards provide antenatal care, care during childbirth.</P>
                     </div>
                  </div>
                  <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <h3><a href="#">General surgery</a></h3>
                        <p>The general surgery ward covers a wide range of surgery and typically includes the following:

                         Day surgery,
                         Thyroid surgery,
                         Kidney transplants,
                         Colon surgery,
                         Laparoscopic cholecystectomy,
                         Breast surgery
                        </p>
                    </div>
                  </div>
                  <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <h3><a href="#">Nephrology</a></h3>
                        <p>This department monitors and assesses patients with kidney (renal) problems. Nephrologists (kidney specialists) will liaise with the transplant team in cases of kidney transplants.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="department-wrap p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <span class="flaticon-stethoscope"></span>
                            </div>
                            <h3><a href="#">Haematology</a></h3>
                            <p>Haematology services work closely with the hospital laboratory. These doctors treat blood diseases and malignancies linked to the blood, with both new referrals and emergency admissions being seen.</p>
                        </div>
                    </div>
                    <div class="department-wrap p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <span class="flaticon-stethoscope"></span>
                            </div>
                               <h3><a href="#">Neurology</a></h3>
                               <p>This unit deals with disorders of the nervous system, including the brain and spinal cord. It's run by doctors who specialise in this area (neurologists) and their staff.
                               There are also paediatric neurologists who treat children. Neurologists may also be involved in clinical.</p>
                        </div>
                    </div>
                    <div class="department-wrap p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                               <span class="flaticon-stethoscope"></span>
                            </div>
                           <h3><a href="#">Ophthalmology</a></h3>
                           <p>.General eye clinic appointments<br>
                            .Laser treatments<br>
                            .Orthoptics (non-surgical treatments)<br>
                            .Prosthetic eye services<br>
                            .Ophthalmic imaging (eye scans)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                           <span class="flaticon-stethoscope"></span>
                       </div>
                       <h3><a href="#">Pharmacy</a></h3>
                       <p>The hospital pharmacy is run by pharmacists, pharmacy technicians and attached staff. It is responsible for drug-based services in the hospital.
                        Clinical and ward pharmacy 
                        </p>
                    </div>
                  </div>
                  <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <h3><a href="#">Physiotherapy</a></h3>
                        <p>Physiotherapists promote body healing, for example after surgery, through therapies such as exercise and manipulation. This means they assess, treat and advise patients with a wide range of medical conditions.</p>
                    </div>
                  </div>
                  <div class="department-wrap p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <span class="flaticon-stethoscope"></span>
                            </div>
                            <h3><a href="#">X-Ray</a></h3>
                            <p>The most familiar use of x-rays is checking for fractures (broken bones), but x-rays are also used in other ways. For example, chest x-rays can spot pneumonia. Mammograms use x-rays to look for breast cancer.</p>
                        </div>
                  </div>
                </div>
            </div>
         </div>

       </div>
    </div>
</section>
<br>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
 <div class="container">
    <div class="row d-flex">
       <div class="col-md-12 py-5">
          <div class="py-lg-5">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section ftco-animate">
                  <h2 class="mb-3" style="text-align: center;">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex">
                            <span class="flaticon-ambulance"></span>
                        </div>
                        <div class="media-body pl-md-4">
                            <h3 class="heading mb-3">Emergency Services</h3>
                        </div>
                    </div>      
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex">
                            <span class="flaticon-doctor"></span>
                        </div>
                        <div class="media-body pl-md-4">
                            <h3 class="heading mb-3">Qualified Doctors</h3>

                        </div>
                    </div>      
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <div class="media-body pl-md-4">
                            <h3 class="heading mb-3">Outdoors Checkup</h3>


                                   {{--  There are also paediatric neurologists who treat children. Neurologists may also be involved in clinical.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Ophthalmology</a></h3>
    								<p>.General eye clinic appointments<br>
                                    .Laser treatments<br>
                                    .Orthoptics (non-surgical treatments)<br>
                                    .Prosthetic eye services<br>
                                    .Ophthalmic imaging (eye scans)
                                    </p>
    							</div>
    						</div>
    					</div>
 --}}
                        </div>
                    </div>      
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex">
                            <span class="flaticon-24-hours"></span>
                        </div>
                        <div class="media-body pl-md-4">
                            <h3 class="heading mb-3">24 Hours Service</h3>


                        </div>
                    </div>      
                </div>
            </div>
          </div>
        </div>
    </div>
 </div>
</section>

<br>
<section class="ftco-facts img ftco-counter" style="background-image: url({{asset('frontend/images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
           <div class="col-md-5 heading-section heading-section-white">
              <span class="subheading">Fun facts</span>
              <h2 class="mb-4">Over 100 patients trust us</h2>
          </div>
          <div class="col-md-7">
              <div class="row pt-4">
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                          <strong class="number" data-number="15">0</strong>
                          <span>Years of Experienced</span>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="500">0</strong>
                      <span>Happy Patients</span>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="10">0</strong>
                  <span>Number of Doctors</span>
                </div>
              </div>
         </div>
         <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
                <div class="text">
                    <strong class="number" data-number="30">0</strong>
                    <span>Number of Staffs</span>
                </div>
            </div>
         </div>
        </div>
    </div>

</section>
@endsection