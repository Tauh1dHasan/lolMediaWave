<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Admin LoLMediaWave</title>
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
   {{-- line awesome cdn --}}
   <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css') }}"/>
</head>
<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">

      {{-- Sidebar --}}
      @include('incBackend.sidebar')

      {{-- Topbar --}}
      @include('incBackend.topbar')

      {{-- Page content --}}
      @yield('content')





   </div>
   <!-- Wrapper END -->
   <!-- Footer -->
   <footer class="iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
               </ul>
            </div>
            <div class="col-lg-6 text-right">
               Copyright 2020 <a href="#">LoLMediaWave</a> All Rights Reserved.
               <br>
               <p>Developed By <a href="https://tauh1dhasan.github.io/Tauh1dHasan/" target="_blank" style="color:red;">Tauhid</a></p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer END -->
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