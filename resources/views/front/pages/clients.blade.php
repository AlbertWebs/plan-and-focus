 <!-- Start brand brand-client Area -->
 <style>
     .brand-client-area .brand-client img {
         height: 70px;
         width: auto;
         max-width: 100%;
         object-fit: contain;
         display: block;
         margin: 0 auto;
     }
 </style>
            <div class="bk-brand brand-client-area bg_color--1 pt--80 pb--80 bg_color--10">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand brand-client-wrapper">
                                <div class="brand brand-client__list brand brand-client-default brand brand-client-style--1">
                                    <div class="brook-element-carousel" 
                                        data-slick-options='{
                                            "spaceBetween": 15, 
                                            "slidesToShow": 6, 
                                            "slidesToScroll": 1, 
                                            "arrows": false, 
                                            "infinite": true,
                                            "autoplay": true,
                                            "autoplaySpeed": 0,
                                            "speed": 6000,
                                            "cssEase": "linear",
                                            "pauseOnHover": true
                                        }'
                                        data-slick-responsive='[
                                            {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                            {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                            {"breakpoint":481, "settings": {"slidesToShow": 2}}
                                        ]'>

                                        @php
                                            $clients = \App\Models\Client::active()->ordered()->get();
                                        @endphp

                                        @forelse($clients as $client)
                                            <div class="brand brand-client">
                                                @if($client->url)
                                                    <a href="{{ $client->url }}" target="_blank" rel="noopener noreferrer">
                                                        <img loading="lazy" src="{{ asset('uploads/clients/' . $client->logo) }}" alt="{{ $client->name }}">
                                                    </a>
                                                @else
                                                    <a href="#">
                                                        <img loading="lazy" src="{{ asset('uploads/clients/' . $client->logo) }}" alt="{{ $client->name }}">
                                                    </a>
                                                @endif
                                            </div>
                                        @empty
                                            {{-- Fallback to hardcoded clients if database is empty --}}
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/1.jpg')}}" alt="Client logo"></a> </div>
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/2.jpg')}}" alt="Client logo"></a> </div>
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/3.jpg')}}" alt="Client logo"></a> </div>
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/4.jpg')}}" alt="Client logo"></a> </div>
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/5.jpg')}}" alt="Client logo"></a> </div>
                                            <div class="brand brand-client"><a href="#"><img loading="lazy" src="{{asset('uploads/clients/6.jpg')}}" alt="Client logo"></a> </div>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End brand brand-client Area -->