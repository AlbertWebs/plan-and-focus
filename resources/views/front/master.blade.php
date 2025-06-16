<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Plan & Focus || Creative Multipurpose Bootstrap4 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="img/icon.png">
      <!-- CSS
         ============================================ -->
      <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/revoulation.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/plugins.css')}}">
      <!-- Style Css -->
      <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
      <!-- Custom Styles -->
      <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
   </head>
   <body class="template-color-1 template-font-2">
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Add your site or application content here -->
      <!-- <div id="page-preloader" class="page-loading clearfix">
         <div class="page-load-inner">
             <div class="preloader-wrap">
                 <div class="wrap-2">
                     <div class=""> <img src="img/icons/brook-preloader.gif" alt="Brook Preloader"></div>
                 </div>
             </div>
         </div>
         </div> -->
      <!-- Wrapper -->
      <div id="wrapper" class="wrapper">
         <!-- Header -->
         <header class="br_header header-default header-transparent pt--15 light-logo--version haeder-fixed-width headroom--sticky header-mega-menu clearfix">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="header__wrapper mr--0">
                        <!-- Header Left -->
                        <div class="header-left flex-20">
                           <div class="logo">
                              <a href="{{url('/')}}">
                              <img src="{{asset('uploads/logo.svg')}}" alt="Brook Images">
                              </a>
                           </div>
                        </div>
                        <!-- Mainmenu Wrap -->
                        <div class="header-flex-right flex-80">
                           <div class="mainmenu-wrapper have-not-flex d-none d-lg-block">
                              <nav class="page_nav">
                                 <ul class="mainmenu">
                                    <li class="lavel-1 ">
                                       <a href="#home"><span class="signifier-200-menu">Home</span></a>
                                    </li>
                                     <li class="lavel-1 ">
                                       <a href="#about-us"><span class="signifier-200-menu">About Us</span></a>
                                    </li>
                                    <li class="lavel-1 ">
                                       <a href="#people"><span class="signifier-200-menu">People</span></a>
                                    </li>
                                    <li class="lavel-1">
                                       <a href="#what-we-do"><span class="signifier-200-menu">What We Do</span></a>
                                    </li>
                                    <li class="lavel-1 ">
                                       <a href="#people"><span class="signifier-200-menu">Work</span></a>
                                    </li>
                                    <li class="lavel-1 ">
                                       <a href="#"><span class="signifier-200-menu">Careers</span></a>
                                    </li>
                                    <li class="lavel-1 ">
                                       <a href="#contact"><span class="signifier-200-menu">Contact</span></a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                           <!-- Header Right -->
                           <div class="header-right have-not-flex pl--35 pl_md--5 pr_md--20 pl_sm--5 pr_sm--20">
                              <!-- Start Minicart -->
                              {{-- <div class="mini-cart">
                                 <div id="minicart-trigger" class="minicart-trigger mini-cart-button" data-count="3">
                                    <button><i class="fas fa-shopping-bag"></i></button>
                                 </div>
                               
                              </div> --}}
                              <!-- End Minicart -->
                              <!-- Start Popup Search Wrap -->
                              <div class="popup-search-wrap">
                                 <a class="btn-search-click" href="#">
                                 <i class="fa fa-search"></i>
                                 </a>
                              </div>
                              <!-- End Popup Search Wrap -->
                              <!-- Start Hamberger -->
                              <div class="manu-hamber popup-mobile-click d-block d-lg-none light-version d-block d-xl-none">
                                 <div>
                                    <i></i>
                                 </div>
                              </div>
                              <!-- End Hamberger -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!--// Header -->
         <!-- Start Popup Menu -->
         <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
               <div class="mobileheader">
                  <div class="logo">
                     <a href="{{url('/')}}">
                     <img src="{{asset('uploads/logo-color.svg')}}" alt="Multipurpose">
                     </a>
                  </div>
                  <a class="mobile-close" href="#"></a>
               </div>
               <div class="menu-content">
                  <ul class="menulist object-custom-menu">
                     <li>
                        <a href="#"><span>Home</span></a>
                       
                     </li>
                    
                  </ul>
               </div>
            </div>
         </div>
         <!-- End Popup Menu -->
         <!-- Start Brook Search Popup -->
         <div class="brook-search-popup">
            <div class="inner">
               <div class="search-header">
                  <div class="logo">
                     <a href="{{url('/')}}">
                     <img src="{{asset('uploads/logo-color.svg')}}" alt="Plan and Focus Logo">
                     </a>
                  </div>
                  <a href="#" class="search-close"></a>
               </div>
               <div class="search-content">
                  <form action="#">
                     <label>
                     <input type="search" placeholder="Enter search keyword…">
                     </label>
                     <button class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
         <!-- End Brook Search Popup -->
        
     
         @yield('content')
         <!-- Footer -->
         <footer class="page-footer bg_color--3 pl--150 pr--150 pl_lp--70 pr_lp--70 pl_lg--70 pr_lg--70 pl_md--50 pr_md--50 pl_sm--30 pr_sm--30">
   
            <!-- Start Copyright Area -->
            <div class="copyright ptb--50">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="copyright-left text-start">
                        <ul class="bk-copyright-menu d-flex justify-content-center justify-content-md-start bk-hover">
                           <li><a href="#">Terms and Conditions</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">Copyrigh Statement</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="copyright-right text-center text-md-end">
                        <p>© {{date('Y')}} Plan and Focus. <a href="{{url('/')}}">All Rights Reserved.</a></p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Copyright Area -->
         </footer>
         <!--// Footer -->
      </div>
      <!--// Wrapper -->
      <!-- Js Files -->
      <!-- <script src="{{asset('theme/js/vendor/modernizr-3.6.0.min.js')}}"></script>
         <script src="{{asset('theme/js/vendor/jquery.min.js')}}"></script>
         <script src="{{asset('theme/js/popper.min.js')}}"></script>
         <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('theme/js/plugins.js')}}"></script>
         <script src="{{asset('theme/js/main.js')}}"></script> -->
      <!-- REVOLUTION JS FILES -->
      <!-- <script src="{{asset('theme/js/jquery.themepunch.tools.min.js')}}"></script>
         <script src="{{asset('theme/js/jquery.themepunch.revolution.min.js')}}"></script> -->
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
      <!-- <script src="{{asset('theme/js/revolution.extension.actions.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.carousel.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.kenburn.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.layeranimation.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.migration.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.navigation.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.parallax.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.slideanims.min.js')}}"></script>
         <script src="{{asset('theme/js/revolution.extension.video.min.js')}}"></script> -->
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <script src="{{asset('theme/js/vendor/vendor.min.js')}}"></script>
      <script src="{{asset('theme/js/plugins.min.js')}}"></script>
      <!-- REVOLUTION JS FILES -->
      <script src="{{asset('theme/js/revolution.tools.min.js')}}"></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
      <script src="{{asset('theme/js/revolution.extension.min.js')}}"></script>
      <script src="{{asset('theme/js/main.js')}}"></script>
      <script src="{{asset('theme/js/revoulation.js')}}"></script>
   </body>
</html>