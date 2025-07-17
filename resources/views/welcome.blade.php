@extends('front.master')

@section('content')

        @include('front.slider')
   
         <!-- Page Conttent -->
         <main class="page-content">
              <!-- Start About Area -->
            <div class="brook-about-area bg_image--26 ptb--100 ptb-md--100 ptb-sm--100" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-content text-center wow move-up">
                                <div class="bkseparator--10"></div>
                                 <p class="signifier-200 font-size-25em navy new-font">
                                    Plan and Focus is a results-driven agency specializing in 
                                    <span class="theme-color"><strong>Public Relations & Media, Digital Marketing, Project Management, and Copywriting & Content Creation.</strong></span> 
                                    We help brands shape narratives, manage campaigns, and boost visibility with clarity and creativity.
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area -->
            
            <!-- Start Service Area -->
            <div class="brook-service-area plr--100 plr_lg--30 plr_md--50 plr_sm--30" id="what-we-do">
                <div class="row row--0 bg_color--14 align-items-center video-with-thumb">
                    {{-- <div class="col-lg-6">
                        <div class="service-thumb authenthic-service">
                            <img src="{{asset('uploads/10.jpg')}}" alt="service image">
                        </div>
                    </div> --}}
                    {{--  --}}
                    <div class="col-lg-6">
                        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                           <div class="carousel-inner">
                                 <div class="carousel-item active">
                                    <img src="{{ asset('uploads/10.jpg') }}" class="d-block w-100" alt="Service Image 1">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('uploads/pexels-soumithsoman-4777979.jpg') }}" class="d-block w-100" alt="Service Image 2">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('uploads/pexels-rdne-7414284.jpg') }}" class="d-block w-100" alt="Service Image 3">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('uploads/slide-1.jpg') }}" class="d-block w-100" alt="Service Image 3">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('uploads/slide-2.jpg') }}" class="d-block w-100" alt="Service Image 3">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('uploads/slide-3.jpg') }}" class="d-block w-100" alt="Service Image 3">
                                 </div>

                                 
                           </div>
                        </div>
                     </div>

                    {{--  --}}
                    <div class="col-lg-6 ptb-md--80 ptb-sm--80">
                        <div class="service-content authenthic-service plr--115 plr_lg--70 plr_md--30 plr_sm--30">
                            <h6 class="heading headin-h6 theme-color letter-spacing-3 theme-color">What we do</h6>
                            <div class="bkseparator--30"></div>
                            <h3 class="heading heading-h1 heading-font line-height-1-5 cd-headline clip is-full-width move-up wow navy new-font">Marketing and Communications<br>
                                <span class="cd-words-wrapper theme-color">
                                    <b class="is-visible">TV, Radio, and Digital Advertising</b>
                                    <b>Integrated 360° Campaigns</b>
                                    <b>Creative Strategy, Design & Copy</b>
                                    <b>Copywriting & content.</b>
                                </span></h3>
                        </div>
                    </div>
                    <!-- Start Single Popup -->
                    <div class="video-btn position--center d-none d-lg-block">
                        <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                            <div class="video-icon third-icon"></div>
                        </a>
                    </div>
                    <!-- End Single Popup -->

                </div>
            </div>

              <!-- Start Portfolio Area -->
                <div class="brook-portfolio-area pt--100 rslide" data-background="#ae2883" id="services">
                    <div class="container-fluid plr--100 plr_sm--30 plr_md--50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="brook-section-title mb--30 text-center">
                                    <h6 class="heading heading-h6 letter-spacing-3 signifier-200-font  wow move-up animate new-font"  style="color:#000000">FEATURED WORKS</h6>
                                    <div class="space mb--45"></div>
                                    <h3 class="heading heading-h3 font-40 signifier-200 navy wow move-up animate theme-heading">Making <strong>Brands</strong> Relevant in Africa</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row row--25">

                            <div class="col-lg-12 col-xl-6 mt--40  wow move-up animate">
                                <!-- Start Single Portfolio -->
                                <div class="portfolio-cation">
                                    <div class="poss_relative">
                                        <div class="thumb folio">
                                            <img style="height:100%" src="{{asset('uploads/p16 LHS.jpg')}}" alt="Portfolio Images">
                                        </div>
                                        <div class="port-overlay-info">
                                            <div class="hover-action">
                                                <h3 class="post-overlay-title">
                                                   <a href="#">Megapipes Solutions Limited</a>
                                                </h3>
                                                <div class="category">Digital & PR</div>
                                                <div class="box-btn">
                                                      <a class="brook-btn red-color-5 btn-xs-size btn-rounded space-between" href="#">Learn
                                                         More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Portfolio -->
                            </div>
                            <div class="col-lg-12 col-xl-6 mt--40  wow move-up animate">
                                <div class="row row--25">
                                    <div class="col-lg-12 col-xl-6">
                                        <!-- Start Single Portfolio -->
                                        <div class="portfolio-cation">
                                            <div class="poss_relative">
                                                <div class="thumb folios">
                                                    <img src="{{asset('uploads/4857.avif')}}" alt="Portfolio Images">
                                                </div>
                                                <div class="port-overlay-info">
                                                    <div class="hover-action">
                                                        <h3 class="post-overlay-title"><a href="#">Vodafone</a></h3>
                                                        <div class="category">Digital</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Portfolio -->
                                    </div>
                                    <div class="col-lg-12 col-xl-6 mt_lg--40 mt_md--40 mt_sm--40  wow move-up animate">
                                        <!-- Start Single Portfolio -->
                                        <div class="portfolio-cation">
                                            <div class="poss_relative">
                                                <div class="thumb folios">
                                                    <img src="{{asset('uploads/fs-VTM-Machine-2018.xl.jpg')}}" alt="Portfolio Images">
                                                </div>
                                                <div class="port-overlay-info">
                                                    <div class="hover-action">
                                                        <h3 class="post-overlay-title"><a href="#">Vendibit</a></h3>
                                                        <div class="category">Digital</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Portfolio -->
                                    </div>
                                    <div class="col-lg-12 mt--50  wow move-up animate">
                                        <!-- Start Single Portfolio -->
                                        <div class="portfolio-cation">
                                            <div class="poss_relative">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/Acer-Aspire-Lite-14-header-1024x640.png')}}" alt="Portfolio Images">
                                                </div>
                                                <div class="port-overlay-info">
                                                    <div class="hover-action">
                                                        <h3 class="post-overlay-title"><a href="#">Acer Africa</a></h3>
                                                        <div class="category">Digital</div>
                                                        <div class="box-btn">
                                                               <a class="brook-btn red-color-5 btn-xs-size btn-rounded space-between" href="#">Learn
                                                                  More</a>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Portfolio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Area -->

          

            <!-- Start Service Area -->
            <div class="bk-service-area section-ptb-xl bg_image--2">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="section-title text-center wow move-up">
                           <h3 class="heading heading-h6 letter-spacing-3 signifier-200-font  wow move-up animate new-font">WHAT WE DO</h3>
                           <h2 class="signifier-200 navy wow move-up animate theme-heading">Center of Excelence
                           </h2>
                        </div>
                     </div>
                  </div>
                  <div class="row mt--70 mt_sm--20 mt_md--30">
                     <!-- Start Single Service -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="service service--1 text-center mt--30">
                           <div class="icons">
                              <i class="fas fa-bullhorn"></i>
                           </div>
                           <div class="content">
                              <h4>Marketing and Communications</h4>
                              <p class="p-service">Strategic public relations and media management to keep your brand in the news for all the right reasons
                              </p>
                              <a class="service-btn" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                              
                           </div>
                        </div>
                     </div>
                     <!-- End Single Service -->
                     <!-- Start Single Service -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="service service--1 text-center mt--30">
                           <div class="icons">
                              <i class="fas fa-tv"></i>
                           </div>
                           <div class="content">
                              <h4>Public Media Relations</h4>
                              <p class="p-service">We empower your business with digital marketing to increase your online presense, helping to grow your brand and support yur sales efforts
                              </p>
                              <a class="service-btn" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Service -->
                     <!-- Start Single Service -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="service service--1 text-center mt--30">
                           <div class="icons">
                              <i class="fas fa-project-diagram"></i>
                           </div>
                           <div class="content">
                              <h4>Project Management</h4>
                              <p class="p-service">We help manage projects from start ti excecution, ensuring quality work on time and within budget
                              </p>
                              <a class="service-btn" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Service -->
                      <!-- Start Single Service -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="service service--1 text-center mt--30">
                           <div class="icons">
                              <i class="ion-ios-browsers-outline"></i>
                           </div>
                           <div class="content">
                              <h4>Copywriting & content</h4>
                              <p>We empower your business with digital marketing to increase your online presense, helping to grow your brand and support your sales
                              </p>
                              <a class="service-btn" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Service -->
                  </div>
               </div>
            </div>
            <!-- End Service Area -->
              <!-- Start Best Service -->
            <div class="brook-service-area bg_color--10" id="why">
                <div class="row row--0 align-items-center">
                    <div class="col-lg-12 col-xl-6">
                        <div class="bext-service thumb wow move-up">
                            <img src="{{asset('uploads/pexels-rdne-7947646.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="bext-service plr--190 plr_lg--50 plr_lp--40 plr_md--50 plr_sm--30 mt_lg--40 mb_lg--40 mt_md--40 mb_md--40 mt_sm--40 mb_sm--40">
                            <div class="content">
                                <div class="brook-section-title text-start">
                                    <h3 class="heading heading-h3 font-large wow move-up navy theme-heading">Why Work With Us</h3>
                                    <div class="bkseparator--25"></div>
                                    <div class="title-separator w--80 color-red"></div>
                                </div>
                                <div class="bkseparator--40"></div>
                                <h6 class="heading heading-h6 font-16 line-height-1-88 font-medium body-color wow move-up">
                                 <strong>Sharp minds • Smooth systems • Serious results.</strong><br>
                                 Plan & Focus brings to your table<br>
                                 <ul>
                                 <li><strong>Entrepreneurial thinking</strong> —we approach every brief like it’s our own.</li>
                                 <li><strong>Expert-led teams</strong> —you get real specialists, not just account managers.</li>
                                 <li><strong>Integrated delivery</strong> —brand, creative, media, and PR all under one roof.</li>
                                 <li><strong>Smart systems</strong> —our process is built to scale without losing finesse.</li>
                                 </ul>
                                </h6>
                                <div class="box-btn wow move-up">
                                          <a class="brook-btn red-color-5 btn-xs-size btn-rounded space-between" href="#">Learn
                                             More</a>
                                    </div>
                                <div class="bkseparator--60 bkseparator_lg--30 bkseparator_md--20 bkseparator_sm--20"></div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Best Service -->

            
          
            <!-- Start CounterUp Area -->
            <div class="bk-number-speaks section-ptb-xl bg_image--3">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12">
                        <div class="number-speaks">
                           <div class="content wow move-up">
                              <h3 class="theme-color">NUMBER SPEAKS</h3>
                              <h2 class="signifier-200-font navy theme-heading">We always ready <br> for a <span class="secondary-color"><strong>challenge.</strong></span></h2>
                              <a class="bk-btn theme-btn" href="#">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12 mt_md--40 mt_sm--40">
                        <div class="speakers-number-wrap">
                           <!-- Start Single Count -->
                           <div class="number-wrap wow move-up">
                              <span class="count theme-color">1035</span>
                              <div class="content">
                                 <h6>Completed Projects</h6>
                                 <p>
                                    Since its establishment in 2000, Plan and Focus has been focusing on project management & implementation through cooperation. Since 2015, the company has successfully completed over 1,000 campaigns.
                                 </p>
                              </div>
                           </div>
                           <!-- End Single Count -->
                           <!-- Start Single Count -->
                           <div class="number-wrap mt--70 wow move-up">
                              <span class="count theme-color">234</span>
                              <div class="content">
                                 <h6>Visual Campaigns designs</h6>
                                 <p>
                                    In total, Plan and Focus has run over 200 visual campaigns, including billboards and other outdoor media. These campaigns reflect the company's expertise in creating impactful and strategically placed visual content that resonates with target audiences.
                                 </p>
                              </div>
                           </div>
                           <!-- End Single Count -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End CounterUp Area -->
          
     
         
            <!-- Start Blog Area -->
            {{-- @include('front.blog') --}}
            <!-- End Blog Area -->
            <!-- Start Contact Area -->
            <div class="bk-contact-area section-pb-xl section-pt-xl bg_color--10" id="contact">
               <div class="container">
                  <div class="row">
                     <!-- Start Address -->
                     <div class="col-xl-3 col-lg-3 col-12">
                        <div class="address-inner">
                           <div class="address wow move-up">
                              <h3 class="heading">Visit our offices at</h3>
                              <p>2005 Westlands Lane Apt. 896, Shop Plaza 10010, Nairobi</p>
                           </div>
                           <div class="address mt--60 mb--60 wow move-up">
                              <h3 class="heading">Message us</h3>
                              <p><a href="#">info@planadnfocus.com</a></p>
                              <p><a href="#">(+254) 723 014 032</a></p>
                           </div>
                           <ul class="social-icon icon-size-medium text-dark text-start tooltip-layout move-up wow">
                              <li class="facebook"><a href="#" class="link hint--bounce hint--top hint--theme"
                                 aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                              <li class="twitter"><a href="#" class="link hint--bounce hint--top hint--theme"
                                 aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                              <li class="instagram"><a href="#" class="link hint--bounce hint--top hint--theme"
                                 aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                              <li class="dribbble"><a href="#" class="link hint--bounce hint--top hint--theme"
                                 aria-label="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                              <li class="pinterest"><a href="#" class="link hint--bounce hint--top hint--theme"
                                 aria-label="Pinterest"><i class="fab fa-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Start COntact Form -->
                     <div class="col-xl-8 offset-xl-1 col-lg-9 col-12 mt_md--40 mt_sm--40">
                        <div class="contact-form">
                           <form class="form-style--1 wow move-up" action="#">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="input-box">
                                       <span class="form-icon far fa-user"></span>
                                       <input type="text" placeholder="Name *">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="input-box">
                                       <span class="form-icon far fa-envelope"></span>
                                       <input type="text" placeholder="Email *">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="input-box">
                                       <span class="form-icon fas fa-mobile-alt"></span>
                                       <input type="text" placeholder="Phone number">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="input-box">
                                       <textarea placeholder="Your message"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-action">
                                       <div class="form-description">
                                         We’re open to questions and conversations, and we’re always happy to hear from you anytime.
                                       </div>
                                       <div class="form-submit">
                                          <input type="submit" value="Send message">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Contact Area -->
            {{-- @include('services') --}}
              <!-- Start Call To Action -->
            <div class="brook-call-to-action bg_color--44 ptb--70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-7 col-12">
                            <div class="call-content text-center text-sm-start">
                                <h3 class="heading heading-h3 text-black">Start a New Project With Us ?</h3>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-12">
                            <div class="call-btn text-center text-sm-end mt_mobile--20">
                               <a class="brook-btn bk-btn-white text-theme btn-sd-size btn-rounded buzz" href="tel:+254723014032">
                                 Call Us <span class="fa fa-phone"></span>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action -->

       
         </main>
         <!--// Page Conttent -->
@endsection