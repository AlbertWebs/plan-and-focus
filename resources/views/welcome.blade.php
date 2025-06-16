@extends('front.master')

@section('content')

    @include('front.slider')
    <!-- START REVOLUTION SLIDER -->
         {{-- <div class="slider-revoluation slider-business" id="home">
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-business"
               data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
               <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
               <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                  <ul>
                     <!-- SLIDE  -->
                     <li data-index="rs-1" data-transition="boxslide,curtain-1,3dcurtain-horizontal,incube"
                        data-slotamount="default,default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default,default"
                        data-easeout="default,default,default,default,default" data-masterspeed="default,default,default,default,default"
                        data-thumb="{{asset('theme/img/revoulation/100x50_slider-home-business-slide-01-bg.jpg')}}" data-rotate="0,0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-bg.jpg')}}" alt="" data-bgposition="center center"
                           data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                           data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption     rev_group" id="slide-1-layer-6" data-x="['left','center','left','left']"
                           data-hoffset="['150','-53','50','50']" data-y="['middle','top','top','top']"
                           data-voffset="['-100','193','150','140']" data-width="['1170','800','511','360']"
                           data-height="['198','197','299','299']" data-whitespace="nowrap" data-type="group"
                           data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 1170px; max-width: 1170px; max-width: 198px; max-width: 198px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption  " id="slide-1-layer-3" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','40','40']"
                              data-fontsize="['70','50','50','40']" data-lineheight="['78','56','56','45']"
                              data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                              data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                              data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">This
                              is P&F
                           </div>
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption tp-shape tp-shapewrapper " id="slide-1-layer-5" data-x="['left','left','left','left']"
                              data-hoffset="['440','324','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['39','26','0','0']" data-width="68" data-height="5" data-whitespace="normal"
                              data-type="shape" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgb(255,94,225);">
                           </div>
                           <!-- LAYER NR. 4 -->
                           <div class="tp-caption  " id="slide-1-layer-4" data-x="['left','left','left','left']"
                              data-hoffset="['535','403','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['0','3','120','118']" data-fontsize="['70','50','50','40']"
                              data-lineheight="['78','56','56','45']" data-width="['603','440','440','360']"
                              data-height="['157','none','none','none']" data-whitespace="normal" data-type="text"
                              data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: 603px; max-width: 603px; max-width: 157px; max-width: 157px; white-space: normal; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">A
                              Fully Integrated
                              PR & Digital Agency
                           </div>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption smooth-scroll-link rev_group" id="slide-1-layer-14" data-x="['left','left','left','left']"
                           data-hoffset="['150','150','-637','-637']" data-y="['bottom','bottom','bottom','bottom']"
                           data-voffset="['120','120','427','427']" data-width="172" data-height="36"
                           data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="group"
                           data-actions='' data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                           data-frames='[{"delay":1100,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 172px; max-width: 172px; max-width: 36px; max-width: 36px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;cursor:pointer;text-decoration: none;">
                           <!-- LAYER NR. 6 -->
                           <h6 class="tp-caption  " id="slide-1-layer-13" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 12; white-space: nowrap; font-size: 18px; line-height: 25px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Scroll
                              for more 
                           </h6>
                           <!-- LAYER NR. 7 -->
                           <div class="tp-caption  " id="slide-1-layer-12" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="image" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 13;"><img src="{{asset('theme/img/revoulation/mouse-icon.png')}}"
                              alt="" data-ww="['22px','22px','22px','22px']" data-hh="['36px','36px','36px','36px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption     rev_group" id="slide-1-layer-7" data-x="['right','right','left','left']"
                           data-hoffset="['150','150','50','50']" data-y="['bottom','bottom','top','top']"
                           data-voffset="['86','86','400','400']" data-width="245" data-height="110"
                           data-whitespace="nowrap" data-type="group" data-basealign="slide"
                           data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1300,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 14; min-width: 245px; max-width: 245px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 9 -->
                           <div class="tp-caption  " id="slide-1-layer-8" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="110" data-height="110" data-whitespace="nowrap"
                              data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 15; min-width: 110px; max-width: 110px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                              <!-- Start Single Popup -->
                              <div class="video-btn">
                                 <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                    <div class="video-icon third-icon secondary-color"></div>
                                 </a>
                              </div>
                              <!-- End Single Popup -->
                           </div>
                           <!-- LAYER NR. 10 -->
                           <h6 class="tp-caption  " id="slide-1-layer-9" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="120" data-height="none"
                              data-whitespace="normal" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 16; min-width: 120px; max-width: 120px; white-space: normal; font-size: 18px; line-height: 20px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Watch
                              video 
                           </h6>
                        </div>
                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-1-layer-10" data-x="['center','center','center','center']"
                           data-hoffset="['-200','-200','-200','-858']" data-y="['bottom','bottom','bottom','bottom']"
                           data-voffset="['0','0','0','171']" data-width="none" data-height="none" data-whitespace="nowrap"
                           data-visibility="['on','on','on','off']" data-type="image" data-basealign="slide"
                           data-responsive_offset="on" data-frames='[{"delay":300,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 5;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="0" data-xe="0"
                              data-ys="20" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-image-01.png')}}"
                              alt="" data-ww="['471px','471px','471px','471px']" data-hh="['469px','469px','469px','469px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-1-layer-11" data-x="['left','left','left','left']"
                           data-hoffset="['-250','-250','-250','-926']" data-y="['top','top','top','top']"
                           data-voffset="['0','0','0','-41']" data-width="none" data-height="none" data-whitespace="nowrap"
                           data-visibility="['on','on','on','off']" data-type="image" data-basealign="slide"
                           data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 6;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="-30" data-xe="30"
                              data-ys="0" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-image-03.png')}}"
                              alt="" data-ww="['674px','674px','674px','674px']" data-hh="['674px','674px','674px','674px']"
                              data-no-retina> </div>
                        </div>
                     </li>
                     <!-- SLIDE  -->
                     <li data-index="rs-2" data-transition="parallaxtoleft,3dcurtain-vertical,papercut,parallaxtotop"
                        data-slotamount="default,default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default,default"
                        data-easeout="default,default,default,default,default" data-masterspeed="default,default,default,default,default"
                        data-thumb="{{asset('theme/img/revoulation/100x50_slider-business-slide-02-bg.jpg')}}" data-rotate="0,0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="02" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('theme/img/revoulation/slider-business-slide-02-bg.jpg')}}" alt="" data-bgposition="center center"
                           data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                           data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption     rev_group" id="slide-2-layer-6" data-x="['right','center','left','left']"
                           data-hoffset="['150','-53','50','50']" data-y="['middle','top','top','top']"
                           data-voffset="['70','193','150','140']" data-width="['1170','800','511','360']"
                           data-height="['198','197','299','299']" data-whitespace="nowrap" data-type="group"
                           data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 1170px; max-width: 1170px; max-width: 198px; max-width: 198px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 14 -->
                           <div class="tp-caption  " id="slide-2-layer-3" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','40','40']"
                              data-fontsize="['70','50','50','40']" data-lineheight="['78','56','56','45']"
                              data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                              data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                              data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">Strategic Communication
                           </div>
                           <!-- LAYER NR. 15 -->
                           <div class="tp-caption tp-shape tp-shapewrapper " id="slide-2-layer-5" data-x="['left','left','left','left']"
                              data-hoffset="['440','324','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['39','26','0','0']" data-width="68" data-height="5" data-whitespace="normal"
                              data-type="shape" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgb(255,94,225);">
                           </div>
                           <!-- LAYER NR. 16 -->
                           <div class="tp-caption  " id="slide-2-layer-4" data-x="['left','left','left','left']"
                              data-hoffset="['535','403','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['0','3','120','118']" data-fontsize="['70','50','50','40']"
                              data-lineheight="['78','56','56','45']" data-width="['603','440','440','360']"
                              data-height="['157','none','none','none']" data-whitespace="normal" data-type="text"
                              data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 603px; max-width: 603px; max-width: 157px; max-width: 157px; white-space: normal; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">A
                              Powerful Results.
                           </div>
                        </div>
                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption    smooth-scroll-link rev_group" id="slide-2-layer-14" data-x="['left','left','left','left']"
                           data-hoffset="['150','150','-637','-637']" data-y="['bottom','bottom','bottom','bottom']"
                           data-voffset="['120','120','427','427']" data-width="172" data-height="36"
                           data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="group"
                           data-actions='' data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                           data-frames='[{"delay":1100,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 12; min-width: 172px; max-width: 172px; max-width: 36px; max-width: 36px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;cursor:pointer;text-decoration: none;">
                           <!-- LAYER NR. 18 -->
                           <h6 class="tp-caption  " id="slide-2-layer-13" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: nowrap; font-size: 18px; line-height: 25px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Scroll
                              for more 
                           </h6>
                           <!-- LAYER NR. 19 -->
                           <div class="tp-caption  " id="slide-2-layer-12" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="image" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 14;"><img src="{{asset('theme/img/revoulation/mouse-icon.png')}}"
                              alt="" data-ww="['22px','22px','22px','22px']" data-hh="['36px','36px','36px','36px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption     rev_group" id="slide-2-layer-7" data-x="['right','right','left','left']"
                           data-hoffset="['150','150','50','50']" data-y="['bottom','bottom','top','top']"
                           data-voffset="['86','86','400','400']" data-width="245" data-height="110"
                           data-whitespace="nowrap" data-type="group" data-basealign="slide"
                           data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1300,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 15; min-width: 245px; max-width: 245px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 21 -->
                           <div class="tp-caption  " id="slide-2-layer-8" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="110" data-height="110" data-whitespace="nowrap"
                              data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 16; min-width: 110px; max-width: 110px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                              <!-- Start Single Popup -->
                              <div class="video-btn">
                                 <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                    <div class="video-icon third-icon secondary-color"></div>
                                 </a>
                              </div>
                              <!-- End Single Popup -->
                           </div>
                           <!-- LAYER NR. 22 -->
                           <h6 class="tp-caption  " id="slide-2-layer-9" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="120" data-height="none"
                              data-whitespace="normal" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 17; min-width: 120px; max-width: 120px; white-space: normal; font-size: 18px; line-height: 20px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Watch
                              video 
                           </h6>
                        </div>
                        <!-- LAYER NR. 23 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-2-layer-10" data-x="['center','center','center','center']"
                           data-hoffset="['-200','-200','-200','-858']" data-y="['bottom','bottom','bottom','bottom']"
                           data-voffset="['-120','-120','-120','171']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
                           data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":300,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 5;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="0" data-xe="0"
                              data-ys="20" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-image-01.png')}}"
                              alt="" data-ww="['471px','471px','471px','471px']" data-hh="['469px','469px','469px','469px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 24 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-11" data-x="['left','left','left','left']"
                           data-hoffset="['-250','-250','-250','-926']" data-y="['bottom','bottom','top','top']"
                           data-voffset="['90','90','0','-41']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
                           data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 6;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="-30" data-xe="30"
                              data-ys="0" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-image-03.png')}}"
                              alt="" data-ww="['674px','674px','674px','674px']" data-hh="['674px','674px','674px','674px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 25 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-16" data-x="['right','right','right','right']"
                           data-hoffset="['-300','-300','-300','-300']" data-y="['top','top','top','top']"
                           data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-type="image" data-basealign="slide"
                           data-responsive_offset="on" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 7;">
                           <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="10"
                              data-origin="50% 50%"><img src="{{asset('theme/img/revoulation/slider-business-slide-02-image-01.png')}}"
                              alt="" data-ww="['674px','674px','674px','674px']" data-hh="['674px','674px','674px','674px']"
                              data-no-retina>
                           </div>
                        </div>
                     </li>
                     <!-- SLIDE  -->
                     <li data-index="rs-3" data-transition="scaledownfromtop,scaledownfromright,slideoverright,slotslide-vertical"
                        data-slotamount="default,default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default,default"
                        data-easeout="default,default,default,default,default" data-masterspeed="default,default,default,default,default"
                        data-thumb="{{asset('theme/img/revoulation/100x50_slider-business-slide-03-bg.jpg')}}" data-rotate="0,0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="03" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('theme/img/revoulation/slider-business-slide-03-bg.jpg')}}" alt="" data-bgposition="center center"
                           data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                           data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 26 -->
                        <div class="tp-caption     rev_group" id="slide-3-layer-6" data-x="['right','center','left','left']"
                           data-hoffset="['140','-53','50','50']" data-y="['top','top','top','top']" data-voffset="['280','193','150','140']"
                           data-width="['1170','800','511','360']" data-height="['198','197','299','299']"
                           data-whitespace="nowrap" data-type="group" data-basealign="slide"
                           data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 1170px; max-width: 1170px; max-width: 198px; max-width: 198px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 27 -->
                           <div class="tp-caption  " id="slide-3-layer-3" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','40','40']"
                              data-fontsize="['70','50','50','40']" data-lineheight="['78','56','56','45']"
                              data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                              data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                              data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">This
                              is Brook 
                           </div>
                           <!-- LAYER NR. 28 -->
                           <div class="tp-caption tp-shape tp-shapewrapper " id="slide-3-layer-5" data-x="['left','left','left','left']"
                              data-hoffset="['440','324','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['39','26','0','0']" data-width="68" data-height="5" data-whitespace="normal"
                              data-type="shape" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgb(255,94,225);">
                           </div>
                           <!-- LAYER NR. 29 -->
                           <div class="tp-caption  " id="slide-3-layer-4" data-x="['left','left','left','left']"
                              data-hoffset="['535','403','0','0']" data-y="['top','top','top','top']"
                              data-voffset="['0','3','120','118']" data-fontsize="['70','50','50','40']"
                              data-lineheight="['78','56','56','45']" data-width="['603','440','440','360']"
                              data-height="['157','none','none','none']" data-whitespace="normal" data-type="text"
                              data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 603px; max-width: 603px; max-width: 157px; max-width: 157px; white-space: normal; font-size: 70px; line-height: 78px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">A
                              full-service
                              creative agency. 
                           </div>
                        </div>
                        <!-- LAYER NR. 30 -->
                        <div class="tp-caption smooth-scroll-link rev_group" id="slide-3-layer-14" data-x="['left','left','left','left']"
                           data-hoffset="['150','150','-637','-637']" data-y="['bottom','bottom','bottom','bottom']"
                           data-voffset="['120','120','427','427']" data-width="172" data-height="36"
                           data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="group"
                           data-actions='' data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                           data-frames='[{"delay":1100,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 12; min-width: 172px; max-width: 172px; max-width: 36px; max-width: 36px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;cursor:pointer;text-decoration: none;">
                           <!-- LAYER NR. 31 -->
                           <h6 class="tp-caption  " id="slide-3-layer-13" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: nowrap; font-size: 18px; line-height: 25px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Scroll
                              for more 
                           </h6>
                           <!-- LAYER NR. 32 -->
                           <div class="tp-caption  " id="slide-3-layer-12" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                              data-whitespace="nowrap" data-type="image" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 14;"><img src="{{asset('theme/img/revoulation/mouse-icon.png')}}"
                              alt="" data-ww="['22px','22px','22px','22px']" data-hh="['36px','36px','36px','36px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 33 -->
                        <div class="tp-caption rev_group" id="slide-3-layer-7" data-x="['right','right','left','left']"
                           data-hoffset="['150','150','50','50']" data-y="['bottom','bottom','top','top']"
                           data-voffset="['86','86','400','400']" data-width="245" data-height="110"
                           data-whitespace="nowrap" data-type="group" data-basealign="slide"
                           data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1300,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                           data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]" style="z-index: 15; min-width: 245px; max-width: 245px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                           <!-- LAYER NR. 34 -->
                           <div class="tp-caption  " id="slide-3-layer-8" data-x="['right','right','right','right']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="110" data-height="110" data-whitespace="nowrap"
                              data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 16; min-width: 110px; max-width: 110px; max-width: 110px; max-width: 110px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                              <!-- Start Single Popup -->
                              <div class="video-btn">
                                 <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                    <div class="video-icon third-icon secondary-color"></div>
                                 </a>
                              </div>
                              <!-- End Single Popup -->
                           </div>
                           <!-- LAYER NR. 35 -->
                           <h6 class="tp-caption  " id="slide-3-layer-9" data-x="['left','left','left','left']"
                              data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                              data-voffset="['0','0','0','0']" data-width="120" data-height="none"
                              data-whitespace="normal" data-type="text" data-responsive_offset="off"
                              data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                              data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                              data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                              data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                              data-paddingleft="[0,0,0,0]" style="z-index: 17; min-width: 120px; max-width: 120px; white-space: normal; font-size: 18px; line-height: 20px; font-weight: 600; color: #ffffff; letter-spacing: 0px;">Watch
                              video 
                           </h6>
                        </div>
                        <!-- LAYER NR. 36 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-3-layer-10" data-x="['left','left','left','center']"
                           data-hoffset="['-230','-230','-230','-858']" data-y="['top','top','top','bottom']"
                           data-voffset="['70','70','70','171']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
                           data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":300,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 5;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="0" data-xe="0"
                              data-ys="20" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-home-business-slide-01-image-01.png')}}"
                              alt="" data-ww="['471px','471px','471px','471px']" data-hh="['469px','469px','469px','469px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 37 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="slide-3-layer-11" data-x="['center','center','left','left']"
                           data-hoffset="['43','43','-250','-926']" data-y="['bottom','bottom','top','top']"
                           data-voffset="['-433','-433','0','-41']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
                           data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 6;">
                           <div class="rs-looped rs-slideloop" data-easing="" data-speed="3" data-xs="-30" data-xe="30"
                              data-ys="0" data-ye="0"><img src="{{asset('theme/img/revoulation/slider-business-slide-03-image-01.png')}}"
                              alt="" data-ww="['674px','674px','674px','674px']" data-hh="['674px','674px','674px','674px']"
                              data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 38 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-3-layer-16" data-x="['right','right','right','right']"
                           data-hoffset="['-301','-301','-301','-301']" data-y="['top','top','top','top']"
                           data-voffset="['-208','-208','-208','-208']" data-width="none" data-height="none"
                           data-whitespace="nowrap" data-type="image" data-basealign="slide"
                           data-responsive_offset="on" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                           style="z-index: 7;">
                           <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="10"
                              data-origin="50% 50%"><img src="{{asset('theme/img/revoulation/slider-business-slide-02-image-01.png')}}"
                              alt="" data-ww="['674px','674px','674px','674px']" data-hh="['674px','674px','674px','674px']"
                              data-no-retina>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
               </div>
            </div>
         </div> --}}
         <!-- END REVOLUTION SLIDER -->
        

         <!-- Page Conttent -->
         <main class="page-content">
              <!-- Start About Area -->
            <div class="brook-about-area bg_image--26 ptb--100 ptb-md--100 ptb-sm--100" id="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-content text-center wow move-up">
                                <div class="bkseparator--10"></div>
                                 <p class="signifier-200 font-size-25em">
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
                    <div class="col-lg-6">
                        <div class="service-thumb authenthic-service">
                            <img src="{{asset('uploads/10.jpg')}}" alt="service image">
                        </div>
                    </div>
                    <div class="col-lg-6 ptb-md--80 ptb-sm--80">
                        <div class="service-content authenthic-service plr--170 plr_lg--70 plr_md--30 plr_sm--30">
                            <h6 class="heading headin-h6 theme-color letter-spacing-3 theme-color">What we do</h6>
                            <div class="bkseparator--30"></div>
                            <h1 class="heading heading-h1 heading-font line-height-1-5 cd-headline clip is-full-width move-up wow">PR & Communications
                                <span class="cd-words-wrapper theme-color">
                                    <b class="is-visible">Public Relations & Media</b>
                                    <b>Digital Marketing</b>
                                    <b>Project Management.</b>
                                    <b>Copywriting & content.</b>
                                </span></h1>
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
                <div class="brook-portfolio-area pt--100 rslide" data-background="#ae2883" id="people">
                    <div class="container-fluid plr--100 plr_sm--30 plr_md--50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="brook-section-title mb--30 text-center">
                                    <h6 class="heading heading-h6 letter-spacing-3 signifier-200-font  wow move-up animate"  style="color:#000000">FEATURED WORKS</h6>
                                    <div class="space mb--45"></div>
                                    <h3 class="heading heading-h3 font-40 signifier-200" style="color:#000000">Making Brands Relevant in Africa</h3>
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
                           <h3>WHAT WE DO</h3>
                           <h2 class="signifier-200">Center of Excelence
                           </h2>
                        </div>
                     </div>
                  </div>
                  <div class="row mt--70 mt_sm--20 mt_md--30">
                     <!-- Start Single Service -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="service service--1 text-center mt--30">
                           <div class="icons">
                              <i class="ion-ios-eye-outline"></i>
                           </div>
                           <div class="content">
                              <h4>Public Relations & Media</h4>
                              <p>Strategic public relations and media management to keep your brand in the news for all the right reasons
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
                              <i class="ion-ios-bookmarks-outline"></i>
                           </div>
                           <div class="content">
                              <h4>Digital Marketing</h4>
                              <p>We empower your business with digital marketing to increase your online presense, helping to grow your brand and support yur sales efforts
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
                              <h4>Project Management</h4>
                              <p>We help manage projects from start ti excecution, ensuring quality work on time and within budget
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
            <!-- Start Portfolio Area -->
            <div class="bk-testimonial-area section-ptb-xl bg_color--1">
                <div class="wavify-wrapper">
                  <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                     data-wavify-height="140" data-wavify-background="rgba(245,245,245,0.5)" data-wavify-amplitude="80"
                     data-wavify-bones="4">
                     <path d="M 0 141.71042689406383 C 237.875 148.50471572578806 237.875 148.50471572578806 475.75 145.107571309926 C 713.625 141.71042689406383 713.625 141.71042689406383 951.5 165.82491752026056 C 1189.375 189.9394081464571 1189.375 189.9394081464571 1427.25 193.5786122514483 C 1665.125 197.21781635643944 1665.125 197.21781635643944 1903 165.82491752026056 L 1903 7389 L 0 7389 Z"
                        fill="rgba(245,245,245,0.5)"></path>
                  </svg>
                  <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                     data-wavify-height="140" data-wavify-background="#f5f5f5" data-wavify-amplitude="80"
                     data-wavify-bones="3">
                     <path d="M 0 147.22020568980648 C 317.16666666666663 183.65559797623268 317.16666666666663 183.65559797623268 634.3333333333333 165.43790183301957 C 951.4999999999999 147.22020568980648 951.4999999999999 147.22020568980648 1268.6666666666665 200.09089320557024 C 1585.833333333333 252.96158072133412 1585.833333333333 252.96158072133412 1903 183.26276877337258 L 1903 7389 L 0 7389 Z"
                        fill="#f5f5f5"></path>
                  </svg>
               </div>
               <div class="container section-pt-xl">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="section-title text-center wow move-up animate">
                           <h2 style="signifier-200-font ">Digital at Work.</h2>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="container section-pt-xl wow move-up animate">
                  <div class="row row--0 space_dec--110">
                     <!-- Start Single Portfolio -->
                     <div class="col-lg-6">
                        <div class="portfolio portfolio_style--1">
                           <div class="thumb social-img">
                              <img src="{{asset('uploads/65.jpg')}}" alt="Portfolio Images">
                           </div>
                           <div class="port-overlay-info">
                              <div class="hover-action">
                                 <h3 class="post-overlay-title"><a href="#">Digital at Work</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Portfolio -->
                     <div class="col-lg-6">
                        <div class="row row--0">
                           <div class="col-lg-12 wow move-up">
                              <!-- Start Single Portfolio -->
                              <div class="portfolio portfolio_style--1">
                                 <div class="thumb socials-img">
                                    <img src="{{asset('uploads/66.jpg')}}" alt="Portfolio Images">
                                 </div>
                                 <div class="port-overlay-info">
                                    <div class="hover-action">
                                       <h3 class="post-overlay-title"><a href="#">New Age
                                          Design</a>
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Single Portfolio -->
                           </div>
                           <div class="col-lg-12 wow move-up">
                              <!-- Start Single Portfolio -->
                              <div class="portfolio portfolio_style--1">
                                 <div class="thumb socials-img">
                                    <img src="{{asset('uploads/67.jpg')}}" alt="Portfolio Images">
                                 </div>
                                 <div class="port-overlay-info">
                                    <div class="hover-action">
                                       <h3 class="post-overlay-title"><a href="#">New Age
                                          Design</a>
                                       </h3>
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
            <!-- Start CounterUp Area -->
            <div class="bk-number-speaks section-ptb-xl bg_image--3">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12">
                        <div class="number-speaks">
                           <div class="content wow move-up">
                              <h3 class="theme-color">NUMBER SPEAKS</h3>
                              <h2 class="signifier-200-font">We always ready <br> for a <span class="secondary-color">challenge.</span></h2>
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
            <div class="bk-blog-area mt--200">
              
               <div class="blog-wrapper pl--230 pr--230 pr_lp--100 pl_lp--100 pl_lg--100 pr_lg--100 pl_md--50 pr_md--50 pl_sm--30 pr_sm--30 section-pb-xl">
                  <div class="row row--0 space_dec--250">
                     <!-- Start Single Portfolio -->
                     <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 wow move-up">
                        <div class="blog blog-style--1">
                           <div class="thumb">
                              <a href="blog-details.html"><img src="{{asset('theme/img/blog/blog-1/blog-01.jpg')}}" alt="Blog Images"></a>
                           </div>
                           <div class="blog-content blog-position--bottom">
                              <div class="content">
                                 <div class="video-btn">
                                    <a class="video-icon play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA"></a>
                                 </div>
                                 <ul class="meta">
                                    <li>January 7, 2025</li>
                                    <li><a href="#">Photography</a></li>
                                 </ul>
                                 <h3 class="the-title"><a href="blog-details.html">Career Tips For Emerging
                                    Digital Agencies</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Portfolio -->
                     <!-- Start Single Portfolio -->
                     <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 wow move-up mt_sm--40">
                        <div class="blog blog-style--1">
                           <div class="thumb">
                              <a href="blog-details.html"><img src="{{asset('theme/img/blog/blog-1/blog-02.jpg')}}" alt="Blog Images"></a>
                           </div>
                           <div class="blog-content blog-position--bottom">
                              <div class="content">
                                 <ul class="meta">
                                    <li>January 7, 2025</li>
                                    <li><a href="#">Photography</a></li>
                                 </ul>
                                 <h3 class="the-title"><a href="blog-details.html">Career Tips For Emerging
                                    Digital Agencies</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Portfolio -->
                     <!-- Start Single Portfolio -->
                     <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 wow move-up mt_lg--40 mt_md--40 mt_sm--40">
                        <div class="blog blog-style--1">
                           <div class="thumb">
                              <a href="blog-details.html"><img src="{{asset('theme/img/blog/blog-1/blog-03.jpg')}}" alt="Blog Images"></a>
                           </div>
                           <div class="blog-content blog-position--bottom">
                              <div class="content">
                                 <h3 class="the-title"><a href="blog-details.html">Career Tips For Emerging
                                    Digital Agencies</a>
                                 </h3>
                                 <h6 class="post-quote-by"><a href="#">- Kasahara May</a></h6>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Single Portfolio -->
                  </div>
               </div>
            </div>
            <!-- End Blog Area -->
            <!-- Start Contact Area -->
            <div class="bk-contact-area section-pb-xl bg_color--1" id="contact">
               <div class="container">
                  <div class="row">
                     <!-- Start Address -->
                     <div class="col-xl-3 col-lg-3 col-12">
                        <div class="address-inner">
                           <div class="address wow move-up">
                              <h3 class="heading">Visit our studio at</h3>
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
                                          I’m available for commissions and collaborations, and i’m <br>
                                          excited to hear from you about new projects
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
         </main>
         <!--// Page Conttent -->
@endsection