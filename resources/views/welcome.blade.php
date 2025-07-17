@extends('front.master')

@section('content')

        @include('front.slider')
   
         <!-- Page Conttent -->
         <main class="page-content">
<section id="about">
            {{--  --}}
            {{-- @include('front.about-static') --}}
            {{--  --}}
            <div class="brook-service-area plr--100 plr_lg--30 plr_md--50 plr_sm--30 pb--100 mt--100" >
               <div class="row">
                     <div class="col-lg-12">
                        <div class="brook-section-title mb--30 text-center">
                           <h6 class="heading heading-h6 letter-spacing-3 signifier-200-font wow move-up animate new-font theme-yellow"  
                              style="font-weight:900 !important; border-bottom: 3px solid #009EE2; display: inline-block;">
                              About Us
                           </h6>
                           <div class="space mb--45"></div>
                           <h3 class="heading heading-h3 font-40 signifier-200 navy wow move-up animate theme-heading  w-600">We think like founders, <br>work like partners.</h3><br><br>
                        </div>
                     </div>
               </div>
                <div class="row row--0 bg_color--14 align-items-center ">
                    
                   

                    {{--  --}}
                    <div class="col-lg-10 ptb-md--80 ptb-sm--80" style="margin:0 auto; padding:50px">
                       <p class="signifier-200 font-size-25em navy new-font text-center">
                                    <strong>Plan & Focus</strong>, is not just a marketing communications agency—we are your network forward, creative partners.<br>
                                    From succinct, effective <strong>brand campaigns</strong> to sharp, <strong>strategic PR</strong>
                                    <strong>stakeholder engagement</strong>, we deliver <strong>integrated solutions</strong> that cut through the noise and drive results.
                                     Whether it’s on screen, online, on air, or on the ground, we bring the business conversation to life with precision and creative flair.
                                    We’re powered by entrepreneurial thinkers who treat every project like their own, combining creative agility with smart systems to deliver
                                     work that’s connected, inspired and effective.<br>
                                      <strong><span class="theme-color">Led by subject matter experts. </span> </strong> <br>
                                    <strong>Driven by process • Anchored by results.</strong>
                                 </p>
                    </div>
                    

                </div>
            </div>
</section>
            {{--  --}}
            {{--  --}}
            {{-- @include('former-about') --}}
             @include('front.pages.services')
             @include('front.pages.why')
            
            <!-- Start Service Area -->
            {{-- <div class="brook-service-area plr--100 plr_lg--30 plr_md--50 plr_sm--30" id="what-we-do">
                <div class="row row--0 bg_color--14 align-items-center video-with-thumb">
                    
                  
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
            </div> --}}

            @include('front.pages.portfolio')
              <!-- Start Portfolio Area -->
                {{-- <div class="brook-portfolio-area pt--100 rslide" data-background="#ae2883" id="services">
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
                </div> --}}
                <!-- End Portfolio Area -->

          
           
          

            
          
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
            @include('front.pages.contact')

       
         </main>
         <!--// Page Conttent -->
@endsection