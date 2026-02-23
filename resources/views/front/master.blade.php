<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Plan & Focus || Creative Multipurpose Bootstrap4 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <!-- Standard Favicon -->
      <link rel="icon" type="image/png" href="{{asset('favicon/favicon.ico')}}">

      <!-- ICO format for legacy browsers -->
      <link rel="shortcut icon" href="{{asset('favicon/favicon.ico')}}" type="image/x-icon">

      <!-- Apple Touch Icon (for iOS home screen bookmarks) -->
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/favicon.ico')}}">

      <!-- Android Chrome -->
      <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon/favicon.ico')}}">

      <!-- Safari Pinned Tab (macOS) -->
      <link rel="mask-icon" href="{{asset('favicon/favicon.ico')}}" color="#5bbad5">

      <!-- Web Manifest (optional for PWA behavior) -->
      <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
      <!-- CSS
         ============================================ -->
      <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/revoulation.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/plugins.css')}}">
      <!-- Style Css -->
      <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
      <!-- Custom Styles -->
      <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
      <style>
         /* Hide slider navigation on mobile for a cleaner hero */
         @media (max-width: 768px) {
            .tparrows, .tp-bullets { display: none !important; }
         }
         /* Mobile: space above footer so content isn't hidden behind bottom nav */
         @media (max-width: 991px) {
            #wrapper { padding-bottom: 72px; }
            .page-footer { padding-bottom: env(safe-area-inset-bottom, 0); }
         }
         /* Mobile bottom nav - horizontal bar with 5 links */
         .mobile-bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 999;
            background: #1a1a2e;
            box-shadow: 0 -2px 12px rgba(0,0,0,0.15);
            padding: 8px 0 calc(8px + env(safe-area-inset-bottom, 0)) 0;
         }
         @media (max-width: 991px) {
            .mobile-bottom-nav { display: flex; align-items: center; justify-content: space-around; }
         }
         .mobile-bottom-nav a {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 6px 4px;
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 10px;
            transition: color 0.2s;
         }
         .mobile-bottom-nav a:hover,
         .mobile-bottom-nav a.active { color: #fff; }
         /* Landing about section: reduce top/bottom space on mobile */
         @media (max-width: 768px) {
            .landing-about-section { padding-top: 1.25rem !important; padding-bottom: 1.25rem !important; }
            .landing-about-sep { height: 6px !important; }
            .landing-about-text { font-size: 1rem !important; line-height: 1.5; margin-bottom: 0 !important; }
         }
         /* Remove gap between hero banner and content on mobile */
         @media (max-width: 768px) {
            section#home,
            section#home .slider-revoluation,
            section#home .rev_slider_wrapper,
            section#home .fullwidthbanner-container,
            section#home .rev_slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
            .page-content { padding-top: 0 !important; margin-top: 0 !important; }
            section#about .landing-about-section { padding-top: 0.5rem !important; }
         }
         /* Mobile header: safe spacing so burger is not flush to edges */
         @media (max-width: 991px) {
            .br_header.header-default .container-fluid {
               padding-left: 20px !important;
               padding-right: 20px !important;
            }
            .br_header .header__wrapper {
               align-items: center;
               padding-top: 10px !important;
               padding-bottom: 10px !important;
            }
            .br_header .manu-hamber.popup-mobile-click {
               display: flex;
               align-items: center;
               justify-content: center;
               padding: 12px !important;
               min-width: 44px;
               min-height: 44px;
               box-sizing: border-box;
            }
         }
         @media (max-width: 576px) {
            .br_header.header-default .container-fluid {
               padding-left: 16px !important;
               padding-right: 16px !important;
            }
            .br_header .header__wrapper { padding-top: 8px !important; padding-bottom: 8px !important; }
         }
         /* Less space before "About Us" on mobile */
         @media (max-width: 768px) {
            .about-us-section { margin-top: 1.5rem !important; }
         }
         /* No extra top gap on hero when burger is visible */
         @media (max-width: 991px) {
            section#home { margin-top: 0 !important; }
         }
      </style>
      <!-- Font Awesome CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-y1N8lZy+Xz+O7zlmS6XK1rBnX0V8ZsYF1Q1D4JEVVTVS4bPln2Xe5AxDprmJGcOrXL1KXrg+JY7rV+vHpXW1/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">

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
                              <img src="{{asset('uploads/logo-white.svg')}}" alt="Brook Images">
                              </a>
                           </div>
                        </div>
                        <!-- Mainmenu Wrap -->
                        <div class="header-flex-right flex-80">
                           <div class="mainmenu-wrapper have-not-flex d-none d-lg-block">
                              <nav class="page_nav">
                             

                                 <ul class="mainmenu">
                                    <li class="lavel-1"><a href="#home"><span class="signifier-200-menu">Home</span></a></li>
                                    <li class="lavel-1"><a href="#about"><span class="signifier-200-menu">About Us</span></a></li>
                                    <li class="lavel-1"><a href="#services"><span class="signifier-200-menu">Services</span></a></li>
                                    <li class="lavel-1"><a href="#why"><span class="signifier-200-menu">Why Work With Us</span></a></li>
                                    <li class="lavel-1"><a href="#portfolio"><span class="signifier-200-menu">Portfolio</span></a></li>
                                    <li class="lavel-1"><a href="#contact"><span class="signifier-200-menu">Contact</span></a></li>
                                 </ul>

                              </nav>
                           </div>
                           <!-- Header Right -->
                           <div class="header-right have-not-flex d-sm-flex pl--35 pr_md--40 pr_sm--40">
                                    <!-- Start Social Icon -->
                                    <ul class="social-icon icon-size-medium text-center tooltip-layout d-none d-sm-flex">
                                        <li class="facebook"><a href="https://www.facebook.com/planandfocus/" class="link hint--bounce hint--top hint--theme"
                                                aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/PlanandFocus" class="link hint--bounce hint--top hint--theme"
                                                aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/planandfocus/" class="link hint--bounce hint--top hint--theme"
                                                aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li class="linkedin"><a href="https://www.linkedin.com/in/plan-and-focus-347774220/" class="link hint--bounce hint--top hint--theme"
                                                aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                    <!-- End Social Icon -->
                                    <!-- Start Hamberger -->
                                    <div class="manu-hamber popup-mobile-click d-block d-lg-none light-version pl_md--20 pl_sm--20">
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
                  <ul class="menulist object-custom-menu ">
                     <li>
                        <a href="#home"><span>Home</span></a>
                     </li>
                     <li class="lavel-1"><a href="#about"><span class="signifier-200-menu">About Us</span></a></li>
                     <li class="lavel-1"><a href="#services"><span class="signifier-200-menu">Services</span></a></li>
                     <li class="lavel-1"><a href="#why"><span class="signifier-200-menu">Why Work With Us</span></a></li>
                     <li class="lavel-1"><a href="#portfolio"><span class="signifier-200-menu">Portfolio</span></a></li>
                     <li class="lavel-1"><a href="#contact"><span class="signifier-200-menu">Contact</span></a></li>
                    
                  </ul>
               </div>
            </div>
         </div>
         <!-- End Popup Menu -->
         <!-- Mobile bottom nav (visible on tablets and below) -->
         <nav class="mobile-bottom-nav" aria-label="Mobile navigation">
            <a href="#home" class="mobile-nav-item" data-section="home"><i class="fas fa-home"></i><span>Home</span></a>
            <a href="#about" class="mobile-nav-item" data-section="about"><i class="fas fa-users"></i><span>About</span></a>
            <a href="#services" class="mobile-nav-item" data-section="services"><i class="fas fa-briefcase"></i><span>Services</span></a>
            <a href="#portfolio" class="mobile-nav-item" data-section="portfolio"><i class="fas fa-th-large"></i><span>Portfolio</span></a>
            <a href="#contact" class="mobile-nav-item" data-section="contact"><i class="fas fa-envelope"></i><span>Contact</span></a>
         </nav>
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
                           <li><a href="#">Copyright Statement</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="copyright-right text-center text-md-end">
                        <p>© {{date('Y')}} Plan and Focus - All Rights Reserved | Powered By <a href="https://designekta.com"> Designekta Studios </a></p>
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
      {{--  --}}

   <script>
      document.addEventListener("DOMContentLoaded", function () {
         const navItems = document.querySelectorAll(".mainmenu .lavel-1");
         const navLinks = document.querySelectorAll(".mainmenu .lavel-1 a");
         const sections = document.querySelectorAll("section[id]");
         const mobileNavItems = document.querySelectorAll(".mobile-bottom-nav a");

         function setActiveNav() {
            let scrollPos = window.scrollY + 200;

            sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute("id");

            if (scrollPos >= top && scrollPos < top + height) {
               navItems.forEach(item => item.classList.remove("active"));
               const activeLink = document.querySelector(`.mainmenu .lavel-1 a[href="#${id}"]`);
               if (activeLink) activeLink.parentElement.classList.add("active");

               mobileNavItems.forEach(item => {
                  item.classList.toggle("active", item.getAttribute("href") === "#" + id);
               });
            }
            });
         }

         window.addEventListener("scroll", setActiveNav);
         setActiveNav();

         navLinks.forEach(link => {
            link.addEventListener("click", function () {
            navItems.forEach(item => item.classList.remove("active"));
            this.parentElement.classList.add("active");
            });
         });

         // Mobile bottom nav: close burger menu when a link is clicked
         mobileNavItems.forEach(link => {
            link.addEventListener("click", function () {
               document.body.classList.remove("popup-mobile-menu-wrapper");
               document.documentElement.style.overflow = "";
            });
         });
      });
   </script>




     <script>
         const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
               entry.target.classList.add('animate-border');
               }
            });
         }, { threshold: 0.7 });

         document.querySelectorAll('.animated-underline').forEach(el => {
            observer.observe(el);
         });
      </script>

         {{--  --}}
   </body>
</html>