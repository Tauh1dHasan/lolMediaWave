<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ URL::asset('https://iqonic.design/themes/streamitnew/dashboard/html/assets/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
      <!--datatable CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/dataTables.bootstrap4.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
 
      <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css') }}"/>
</head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-lg-5 col-md-12 align-self-center">
                  <div class="sign-user_card ">                    
                     <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 m-auto">
                           <h3 class="mb-3 text-center">Sign in</h3>
                           <form class="mt-4" action="/login" method="post">
                              @csrf
                              <div class="form-group">                                 
                                 <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" autocomplete="off" required>
                              </div>
                              <div class="form-group">                                 
                                 <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                              </div>
                                 <div class="sign-info">
                                    <button type="submit" class="btn btn-primary">Sign in</button>                               
                                 </div>                                    
                           </form>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <!-- Sign in END -->
            <!-- color-customizer -->
         </div>
      </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ URL::asset('assets/js/jquery.appear.js') }}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ URL::asset('assets/js/countdown.min.js') }}"></script>
   <!-- Select2 JavaScript -->
   <script src="{{ URL::asset('assets/js/select2.min.js') }}"></script>
   <!-- Counterup JavaScript -->
   <script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
   <script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ URL::asset('assets/js/slick.min.js') }}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ URL::asset('assets/js/smooth-scrollbar.js') }}"></script>
   <!-- apex Custom JavaScript -->
   <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ URL::asset('assets/js/chart-custom.js') }}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
   </body>


</html>
