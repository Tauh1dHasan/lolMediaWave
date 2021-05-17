@extends('base.frontEnd')

@php
  $CurrentDay = date('l');

  switch ($CurrentDay) {
    
    case 'Saturday':
      $dayColor = '#F62B00';
      break;

    case 'Sunday':
      $dayColor = '#6500BF';
      break;

    case 'Monday':
      $dayColor = '#FE8002';
      break;

    case 'Tuesday':
      $dayColor = '#FFE60F';
      break;

    case 'Wednesday':
      $dayColor = '#00B9FF';
      break;

    case 'Thursday':
      $dayColor = '#BD3AFF';
      break;

    case 'Friday':
      $dayColor = '#36FF00';
      break;
    
    default:
      return "Days Are over... (base blade)";
      break;
  }
  
@endphp

   @section('content')

{{-- Main Slide --}}
      <section class="iq-main-slider p-0">

         <div id="tvshows-slider">
            <div>
               <a href="/play">
                  <div class="shows-img">
                     <img src="images/movie-banner/1.jpg" class="w-100" alt="">
                     <div class="shows-content">
                        <h4 class="text-white mb-1">Open Dead Shot</h4>
                        <div class="movie-time d-flex align-items-center">
                           <span class="text-white">This video is about....</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
      
         </div>
      
      </section>





<!-- MainContent -->
      <div class="main-content">

         <section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title" style="color:{{ $dayColor }}">Videos for Today</h4>
                     </div>

                     <div class="favorites-contens">
                        <div class="list-inline row p-0 mb-0">


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                              <a href="/play">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title">
                                          <a href="/play">The Last Breath</a>
                                       </h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="/play">
                                             <span class="btn btn-hover" style="background: {{ $dayColor }}">
                                                <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Last Night</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">1980</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Looters</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Vugotronic</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">The Last Breath</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Last Night</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">1980</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Looters</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>


                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Vugotronic</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>

                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Vugotronic</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>

                           <div class="slide-item col-lg-3 col-md-3 col-sm-12 pt-3">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="show-details.html">Vugotronic</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          
                                          <span class="text-white">This video is about....</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                             <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                          </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                           </div>



                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

      </div>

   @endsection

   
   