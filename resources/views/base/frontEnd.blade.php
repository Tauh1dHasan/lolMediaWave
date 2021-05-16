<!doctype html>
<html lang="en-US">
<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home Page</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/typography.css') }}">
   <!-- Style -->
   <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
   <!-- Responsive -->
   <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
</head>

<body>
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>

   <!-- Navbar -->
   @include('incFrontend/nav');

   {{-- Main Body --}}
   @yield('mainBody');









   <footer id="contact" class="footer-one iq-bg-dark">
     
      <!-- Address -->
      <div class="footer-top">
          <div class="container-fluid">
              <div class="row footer-standard">
                  <div class="col-lg-10">
                      <div class="widget text-left">        
                          <div class="textwidget">
                              <p><small>© 2021 GodIsThePlug. All Rights Reserved. All videos, images, content on this platform are property of GodIsThePlug</small></p>
                          </div>
                      </div>                        
                  </div>
                  <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
                      <h6 class="footer-link-title">
                          Follow Us :
                      </h6>
                      <ul class="info-share"> 
                          <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>
                      </ul>

                  </div>
                  
              </div>
          </div>
      </div>
      <!-- Address END -->
  </footer>
   <!-- MainContent End-->
   <!-- back-to-top -->
   <div id="back-to-top">
      <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
   </div>
   <!-- back-to-top End -->
   <!-- jQuery, Popper JS -->
   <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
   <script src="{{ URL::asset('js/popper.min.js') }}"></script>
   <!-- Bootstrap JS -->
   <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <!-- Slick JS -->
   <script src="{{ URL::asset('js/slick.min.js') }}"></script>
   <!-- owl carousel Js -->
   <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
   <!-- select2 Js -->
   <script src="{{ URL::asset('js/select2.min.js') }}"></script>
   <!-- Magnific Popup-->
   <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Slick Animation-->
   <script src="{{ URL::asset('js/slick-animation.min.js') }}"></script>
   <!-- Custom JS-->
   <script src="{{ URL::asset('js/custom.js') }}"></script>
</body>

</html>