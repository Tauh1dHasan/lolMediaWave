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

<header id="main-header">
      <div class="main-header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                     <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-icon" data-toggle="collapse">
                           <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                        </div>
                     </a>
                     <a class="navbar-brand" href="/"> 
                        <!-- <img class="img-fluid logo" src="images/logo.png"
                        alt="streamit" /> -->
                        <p><span style="color: {{ $dayColor }}; font-size: 1.5em; font-family: 'Dancing Script', cursive;">LoLMediaWave</span></p> 
                     </a>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="menu-main-menu-container">
                           <ul id="top-menu" class="navbar-nav ml-auto">
                              <li class="menu-item">
                                 <a href="/">Home</a>
                              </li>
                              <li class="menu-item">
                                 <a href="/about">About Us</a>
                              </li>
                              <li class="menu-item">
                                 <a href="/contact">Contact Us</a>
                              </li>                                                              
                           </ul>
                        </div>
                     </div>
                     {{-- <div class="mobile-more-menu">
                        <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                           data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-more-line"></i>
                        </a>
                        <div class="more-menu" aria-labelledby="dropdownMenuButton">
                           <div class="navbar-right position-relative">
                              <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                 <li>
                                    <a href="#" class="search-toggle">
                                    <i class="ri-search-line"></i>
                                    </a>
                                    <div class="search-box iq-search-bar">
                                       <form action="#" class="searchbox">
                                          <div class="form-group position-relative">
                                             <input type="text" class="text search-input font-size-12"
                                                placeholder="type here to search...">
                                             <i class="search-link ri-search-line"></i>
                                          </div>
                                       </form>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div> --}}
                     {{-- <div class="navbar-right menu-right">
                        <ul class="d-flex align-items-center list-inline m-0">
                           <li class="nav-item nav-icon">
                              <a href="#" class="search-toggle device-search">
                              <i class="ri-search-line"></i>
                              </a>
                              <div class="search-box iq-search-bar d-search">
                                 <form action="#" class="searchbox">
                                    <div class="form-group position-relative">
                                       <input type="text" class="text search-input font-size-12"
                                          placeholder="type here to search...">
                                       <i class="search-link ri-search-line"></i>
                                    </div>
                                 </form>
                              </div>
                           </li>
                        </ul>
                     </div> --}}
                  </nav>
                  <div class="nav-overlay"></div>
               </div>
            </div>
         </div>
      </div>
   </header>