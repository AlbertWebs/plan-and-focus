<?php
   $firstPortfolio = DB::table('portfolios')->first();

    // Fetch the rest (skipping the first one)
    $otherPortfolios = DB::table('portfolios')->skip(1)->take(4)->get();
?>

<section  id="portfolio">
   <!-- Start Portfolio Area -->
   <div class="brook-portfolio-area pt--100 pb--100 rslide" data-background="#ae2883" id="portfolio">
      <div class="bk-portfolio-area">
         <div class="container-fluid plr--100 plr_sm--30 plr_md--50">
            {{--  --}}
            <div class="row">
               <div class="col-lg-12">
                  <div class="brook-section-title mb--30 text-center">
                     <h6 class="heading heading-h6 letter-spacing-3 signifier-200-font  wow move-up animate new-font theme-yellow"  style="font-weight:900 !important; border-bottom: 3px solid #009EE2; display: inline-block;">FEATURED WORKS</h6>
                     <div class="space mb--45"></div>
                     <h3 class="heading heading-h3 font-40 signifier-200 navy wow move-up animate theme-heading  w-600">Custom, Clever, and Creative<br> that Works.</h3>
                  </div>
               </div>
            </div>
            {{--  --}}
            <div class="row row--25 pt--50">
               <div class="portfolio-wrapper">
                  <div class="row row--0">
                     <!-- Start Single Portfolio -->
                     <div class="col-lg-12 col-xl-6 col-12">
                        <div class="portfolio-cation wow move-up">
                           <div class="thumb">
                              <img class="main-image small-margin"  src="{{url('/')}}/uploads/{{ $firstPortfolio->image }}" alt="Portfolio Images">
                           </div>
                           <div class="port-overlay-info">
                              <div class="hover-action">
                                 <h3 class="post-overlay-title">
                                    <a href="#">{{ $firstPortfolio->title }}</a>
                                 </h3>
                                 {{-- <div class="category">Digital & PR &nbsp; </div> --}}
                                 <div class="box-btn">
                                    <a class="brook-btn bk-btn theme-btn btn-xs-size bg-yellow-color-navy" href="{{url('/')}}/featured-companies/{{ $firstPortfolio->slung }}">Learn
                                    More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Portfolio -->
                     <div class="col-lg-12 col-xl-6 col-12">
                        <div class="row row--0">
                           @foreach($otherPortfolios as $others)
                            <div class="col-lg-6">
                              <!-- Start Single Portfolio -->
                              <div class="portfolio-cation wow move-up">
                                 <div class="thumb folios">
                                    <img class="sub-image small-margin"  src="{{url('/')}}/uploads/{{ $others->image }}" alt="{{$others->title}}s">
                                 </div>
                                 <div class="port-overlay-info">
                                    <div class="hover-action">
                                       <h3 class="post-overlay-title"><a href="#">{{$others->title}}</a></h3>
                                       {{--
                                       <div class="category">Digital</div>
                                       --}}
                                       <div class="box-btn">
                                          <a class="brook-btn bk-btn theme-btn btn-xs-size bg-yellow-color-navy" href="{{url('/')}}/featured-companies/{{ $others->slung }}">Learn
                                          More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Single Portfolio -->
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Portfolio Area -->
</section>
