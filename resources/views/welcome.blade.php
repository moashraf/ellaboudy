<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ELLABOUDY REAL STATE INVESTMENT</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{asset('website/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--=============== google fonts css cairo Old pt ===============-->
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|PT+Sans" rel="stylesheet">
        <!--=============== gallery css ===============-->
        <link href="{{asset('website/css/gallery.css')}}" rel="stylesheet">
        <!-- Owl carousel style sheet -->
        <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">
        <!--=============== bxslider css ===============-->
        <link href="{{asset('website/css/jquery.bxslider.min.css')}}" rel="stylesheet">
        <!--=============== Animate css ===============-->
        <link href="{{asset('website/css/animate.css')}}" rel="stylesheet">
        <!--=============== style css ===============-->
        <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
        <!--=============== RTL bootstrap ===============-->
<!--
        <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="css/ar-style.css" rel="stylesheet">
-->
<style>
    
    @for($i = 0 ; $i < count($banners) ; $i++ )
    .homeSlider .{{ Terbilang::make($i+1) }} {
        background: url("{{ asset($banners[$i]->image) }}")  no-repeat fixed;
        background-size: cover!important
    }
    @endfor

   
    @media(max-width: 995px){
        .homeSlider .bxslider .one {
            background-size: cover!important
        }
    
        .homeSlider .bxslider .two {
            background-size: cover!important
        }
    
        .homeSlider .bxslider .three {
           background-size: cover!important
        }
    
        .homeSlider .bxslider .four {
            background-size: cover!important
        }
    }
</style>
    </head>
    <body>
       
    <ul class="side_socials list-unstyled text-right">
            @foreach($social_media as $social)
            <li>
            <a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }} fa-fw"></i></a>
            </li>
            @endforeach
        </ul>



        <!--============= Start navbar =============-->
                    @include('navbar')

        <!--============= End navbar =============-->
        
        <!--============= Start slider =============-->
        <section id="homeSlider" class="homeSlider">
<!--
            <div class="bx-controls-direction">
                <a href="" class="bx-prev">Prev</a>
                <a href="" class="bx-next">Next</a>
            </div> 
-->
            <ul class="bxslider text-center">
            @for($i = 0 ; $i < count($banners) ; $i++ )
                <li class="mail_li {{ Terbilang::make($i+1) }}">
                    <div class="words">
                        <ul class="list-unstyled list-inline">
                           <li><img class="wow fadeInLeft" data-wow-duration="1s" src="{{asset('website/imgs/slider/zigzag.png')}}" alt="zigzag"></li>
                        <li><img class="wow fadeInRight" data-wow-duration="1s" src="{{asset('website/imgs/slider/zigzag.png')}}" alt="zigzag"></li>
                        </ul>
                        <h2 style="    background: #00000029;
    font-size: 50px!important; 
	" class="wow fadeInDown" data-wow-duration="1s">{{ $banners[$i]->slider_description->title }}</h2>
                        <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                        {{ $banners[$i]->slider_description->description }}                        </p>

                        <a style="      visibility: hidden; " href="{{ route('project',['id'=> $banners[$i]->project_route]) }}">
                             <button>
                                {{ $banners[$i]->slider_description->description }}  
                     </button></a>

                    </div>
                </li>
                @endfor
                   
            </ul>



        </section>
        <!--============= End slider =============-->
        
        <!--============= Start latest =============-->
        <section id="projects" class="latest">
            <div class="container"><!--Start Container-->
                <div class="heading text-center">
                    <h5>{{  $labels[7]->text }}</h5>
                    <h2>{{  $labels[8]->text }}</h2>
                    <img src="{{asset('website/imgs/slider/zigzag.png')}}" alt="zigzag-heading">
                </div>
                <div class="row"><!--Start row-->
                    
                    <div class="">
                        
                        <!--============ Start our-clients ============-->
                        <section class="our-clients">
                            <div class="container"><!--Start Container-->

                                <div class="popular-product">
                                    <div class="owl-carousel owl-theme">


                                        @foreach($projects as $project)
                                        <div class="items-1 text-center">
                                        <a href="{{ route('project',['id' => $project->id]) }}">
                                                <img class="img-responsive" src="{{asset($project->image)}}" alt="">
                                                <div class="desc">
                                                    <!-- <h4>pro contractor</h4> -->
                                                    <h3>{{ $project->title }}</h3>
                                                <h4>{{ $project->short_description}}</h4>

                                                    <!-- <p>lorem ipsum proin gravida nibh vel velit auctor al</p> -->
                                                </div>
                                            </a>    
                                        </div>
                                        @endforeach

                                       

                                        
                                    </div>
                                    
                                </div>
                            </div><!--End Container-->
                        </section>
                        <!--============ End our-clients ============-->
                        
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============= End latest =============-->
        
        <!--============= Start offering =============-->
        @for($i = 0 ; $i < count($offers_final);$i++)
        @if($i % 2 == 0)
        <section id="offers" class="offering">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                                        <a href="{{ route('offers',['id' =>  $offers_final[$i]->offer_description->offer_id ]) }} " > 

                    <div class="col-md-6 col-xs-12">
                        <div class="info">
                            <h2>{{ $offers_final[$i]->offer_description->title }}</h2>
                            <p>
                            {{ $offers_final[$i]->offer_description->description }}                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="info_img">
                            <img class="img-responsive" src="{{asset($offers_final[$i]->image)}}" alt="offering">
                        </div>
                    </div>
                       </a>
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        @else
        <!--============= End offering =============-->
        
		
        <!--============= Start offering =============-->
        <section class="offering jerry">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    <a href="{{ route('offers',['id' =>  $offers_final[$i]->offer_description->offer_id ]) }} " > 
                    <div class="col-md-6 col-xs-12">
                        <div class="info_img">
                            <img class="img-responsive" src="{{asset($offers_final[$i]->image)}}"    alt="jerry">
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="info">
                        <h2>{{ $offers_final[$i]->offer_description->title }}</h2>
                            <p>
                            {{ $offers_final[$i]->offer_description->description }}                           
                            </p>
                        </div>
                    </div>
                    </a>
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        @endif
        @endfor
        <!--============= End offering =============-->
        
        <!--============= Start videos =============-->
        <section class="videos videos_home">
            <div class="heading text-center">
                <h4>{{$labels[9]->text}} </h4>
                <h2 class="home_heading"> {{$labels[10]->text}}</h2>
                <img src="{{asset('website/imgs/slider/zigzag.png')}}" alt="zigzag">
            </div>
            
            <div id="jssor_1" style="">
                <!-- Loading Screen -->
<!--
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
                </div>
-->
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    
                @foreach($videos as $video)
                    <div class="sc">
                        <iframe data-u="image" src="https://www.youtube.com/embed/{{ $video->url }}" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                @endforeach    


                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>

        </section>
        <!--============= End videos =============-->
        
        <!--============= Start delevering =============-->
        <section id="inspiring" class="delevering text-center">
            <div class="container"><!--Start Container-->
                <div class="heading">
                    <h2>{{$labels[11]->text}}</h2>
                </div>
                <div class="row"><!--Start row-->
                @for($i = 0 ; $i < count($services_final);$i++)
                     <div class="col-md-3 col-sm-6 col-xs-12">
                   
                  <div class="window">
                            <img src="{{ asset($services_final[$i]->image )}}" alt="luxury">
                            <h3>{{ $services_final[$i]->service_description->title }}</h3>
                            <p>{{ $services_final[$i]->service_description->description }}</p>
                 </div>

                     </div>
                 @endfor    
                   
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============= End delevering =============-->
        
        <!--============= Start contact =============-->
        <section id="contact" class="contact">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="contact_form">
                            <h2>{{$labels[12]->text}}</h2>
                          	{!! Form::open( [ 'route' =>  'form', 'method' => 'post'] ) !!}
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="name*" required >
                                        <input type="email"    name="maile"  placeholder="email*"  required >
                                    </div>
                                    <div class="input-group">
									                                        <input type="text" name="message" placeholder="message" required >

                                     </div>
                                    <div class="input-group">
                                        <button type="submit">
                                                {{$labels[16]->text}}
                                            <i class="fa fa-chevron-right"></i>
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
 <div class="map">
							{!! $labels[32]->text !!}
                                 </div>                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============= End contact =============-->
        
        <!--============= Start footer =============-->
        @include('footer')
        <!--============= End footer =============-->
        
        <!--============= Start up =============-->
        <section class="up">
            <ul class="list-unstyled">
                <li><i class="fa fa-angle-up fa-fw"></i></li>
                <li><i class="fa fa-angle-up fa-fw second"></i></li>
            </ul>
        </section>
        <!--============= End up =============-->
        
        <!--========== jQuery library ==========-->
        <script src="{{asset('website/js/jquery-3.2.1.min.js')}}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
        <!--========== gallery js ==========-->
        <script src="{{asset('website/js/gallery.js')}}"></script>
        <!--========== bxslider js ==========-->
        <script src="{{asset('website/js/jquery.bxslider.min.js')}}"></script>
        <!-- Owl Carousel Slider -->
        <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
        <!--========== wow js ==========-->
        <script src="{{asset('website/js/wow.min.js')}}"></script>
        <script src="{{asset('website/js/jssor.slider.min.js')}}"></script>
        <!--========== custom js ==========-->
        <script src="{{asset('website/js/custom.js')}}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var jssor_1_options = {
                  $AutoPlay: 1,
                  $SlideWidth: 720,
//                  $SlideWidth: 1000,
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 980;
//                var MAX_WIDTH = 1260;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
                $('.owl-carousel').owlCarousel({
        autoplay:true,
        loop:true,
        dots: true,
        nav: true,
        margin: 0,
        responsive:{
            0:{items:1},
            600:{items:2},
            1000:{items:4}
            },
        center:true,
        slideBy:2,
        autoplayTimeout:5000,
      });
            });
        </script>
    </body>
</html>

