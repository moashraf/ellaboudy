<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $offer_description->title }}</title>
        <!--=============== Bootstrap css ===============-->
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{ asset('website/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--=============== google fonts css cairo Old pt ===============-->
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|PT+Sans" rel="stylesheet">
        <!--=============== gallery css ===============-->
        <link href="{{ asset('website/css/gallery.css') }}" rel="stylesheet">
        <!-- Owl carousel style sheet -->
        <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css') }}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
        <!--=============== bxslider css ===============-->
        <link href="{{ asset('website/css/jquery.bxslider.min.css') }}" rel="stylesheet">
        <!--=============== Animate css ===============-->
        <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet">
        <!--=============== style css ===============-->
        <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
        <!--=============== RTL bootstrap ===============-->
        <!--=============== RTL bootstrap ===============-->
<!--
        <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="css/ar-style.css" rel="stylesheet">
-->
    </head>
    <body>
       
        <div class="wrapper_pro"><!--Start wrapper-->
        
            <!--============= Start navbar =============-->
            @include('navbar')
            <!--============= End navbar =============-->
            
            <!--============= Start hero =============-->
            <section class="hero" style=" background: url({{ URL::to('/').'/'.$offer->image}}) no-repeat fixed!important; ">
                <div class="container"><!--Start Container-->
                    <div class="row"><!--Start row-->
                        
                        <div class="col-xs-12">
                            <h2 class="text-center">{{$offer_description->title}}</h2>
                        </div>
                        
                    </div><!--End row-->
                </div><!--End Container-->
                <button class="sdown">{{ $labels[26]->text }}</button>
            </section>
            <!--============= Start hero =============-->
            
            <!--============= Start pro_types =============-->
            <section id="detail" class="pro_types">
                <div class="container"><!--Start container-->
                    
                    <div class="urgent_content">
                        <!-- Tab panes -->
                          <div class="tab-content">
                              
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="container-fluid"><!--Start branched container-->
                                    <div class="row"><!--Start branched row-->
                                        <div class="col-md-6 col-xs-12">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h2>{{$offer_description->title}}</h2>
                                                </li>
                                                
                                                <li>
                                                    <p>  {{$offer_description->description}}</p>
                                                </li>
                                            </ul>
                                        </div>
 <!--                                            <img class="img-responsive center-block" src="{{ asset('website/imgs/pro_tabs/1.jpg') }}" alt="">-->
                                                 <!-- Wrapper for slides -->
                                                
                                        </div>
                                    </div><!--End branched row-->
                                </div><!--End branched container-->
                            </div>
                              
                      </div>
                    </div>
                    
                </div><!--End container-->
            </section>
            <!--============= End pro_types =============-->
            
           
            
            <!--============= Start videos =============-->
             
            <!--============= End videos =============-->
            
           
            <!--============= End testi =============-->
            
            <!--============= Start contact_sec =============-->
             <!--============= End contact_sec =============-->

            <!--============= Start footer =============-->
                    <!--============= Start footer =============-->
        @include('footer')
        <!--============= End footer =============-->
  
            
        <!--========== jQuery library ==========-->
        <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
        <!--========== gallery js ==========-->
        <script src="{{ asset('website/js/gallery.js') }}"></script>
        <!--========== bxslider js ==========-->
        <script src="{{ asset('website/js/jquery.bxslider.min.js') }}"></script>
        <!-- Owl Carousel Slider -->
        <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
        <!--========== wow js ==========-->
        <script src="{{ asset('website/js/wow.min.js') }}"></script>
        <script src="{{ asset('website/js/jssor.slider.min.js') }}"></script>
        <!--========== custom js ==========-->
        <script src="{{ asset('website/js/custom.js') }}"></script>

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
            });
        </script>
    </body>
</html>

