@extends('front.master')
@section('content')
<section id="home">
<!-- START REVOLUTION SLIDER -->
        <div class="slider-revoluation" id="home">
            <div id="rev_slider_15_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-service"
                data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div id="rev_slider_15_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-25" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="{{asset('theme/img/revoulation/100x50_slider-home-service-slide-01-bg.jpg')}}" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('/')}}/uploads/{{ $Portfolio->image }}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  homer-service-heading" id="slide-25-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-55','0','-150','-150']" data-fontsize="['70','55','40','25']"
                                data-lineheight="['70','107','86','64']" data-width="['1100','900','670','360']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":350,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; min-width: 1100px; max-width: 1100px; white-space: normal; font-size: 90px; line-height: 127px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">


                                <span class="secondary-font theme-color" style="font-weight: 700;"></span> <span style="background: rgba(0, 0, 0, 0.6); color: #fff; padding: 4px 8px; border-radius: 4px;">
                                    {{ $Portfolio->title }}
                                </span>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  homer-service-pra" id="slide-25-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['64','64','0','20']" data-fontsize="['36','20','14','10']"
                                data-lineheight="['51','43','34','29']" data-width="['800','800','600','360']"
                                data-height="['none','none','none','35']" data-whitespace="normal" data-type="text"
                                data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1000,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; min-width: 900px; max-width: 900px; white-space: normal; word-wrap:break-word; font-size: 36px; line-height: 51px; font-weight: 900; color: #FFDA00; letter-spacing: 0px;">
                                Bold Ideas • Smart Execution • Real Impact
                             </div>
                             <!-- LAYER NR. 3 - ICON BELOW TEXT -->
                            <div class="tp-caption"
                                id="slide-25-layer-4"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['160','160','60','50']"
                                data-width="['auto','auto','auto','auto']"
                                data-height="['auto','auto','auto','auto']"
                                data-type="image"
                                data-responsive_offset="off"
                                data-responsive="off"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                style="z-index: 8;">

                                <img src="{{ asset('favicon/favicon.ico') }}" alt="icon" style="width: 40px; height: 40px;">
                            </div>

                            <!-- LAYER NR. 4 -->
                        </li>
                        <!-- SLIDE  -->


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </div>
</section>
        <!-- END REVOLUTION SLIDER -->


<!-- Page Conttent -->
   <main class="page-content">
  <!-- Start Portfolio Details -->
            <div class="brook-portfolio-details bg_color--1">
                <div class="container">
                    <div class="row pt--100 pb--80">

                        <!-- Portfolio Left -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="portfolio-left bk-portfolio-details wow move-up">
                                <div class="portfolio-main-info">
                                    <h2 class="heading heading-h2 line-height-1-42">{{$Portfolio->title}}</h2>

                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Right -->
                        <div class="col-lg-7 col-md-6 offset-lg-1 col-12">
                            <div class="portfolio-left bk-portfolio-details mt_sm--30">
                                <div class="portfolio-main-info">
                                    <div class="portfolio-content">
                                        <h6 class="heading heading-h6 wow move-up">ABOUT THE PROJECT</h6>

                                        <div class="desc mt--40">
                                            <div class="content mb--25 wow move-up">
                                                <p class="bk_pra">
                                                    {{ $Portfolio->description }}
                                                </p>
                                            </div>
                                            <div class="content mb--65 wow move-up">
                                                <p class="bk_pra">Marketing has always been about connecting with your
                                                    audience in the right place and at the right time. Today, that
                                                    means you need to meet them where they are already spending time:
                                                    on the internet. (Source: blog.hubspot.com)</p>
                                            </div>

                                            <div class="portfolio-btn">
                                                <a href="{{url('/')}}/#contact" class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between"
                                                    href="#">Reach Out</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Portfolio Details -->
   </main>
<!--// Page Conttent -->
@endsection
