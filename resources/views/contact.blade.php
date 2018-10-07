<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contact us</title>
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
<!--
        <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="css/ar-style.css" rel="stylesheet">
-->
    </head>
    <body>
       
        <div class="wrapper_pro wrapper_contact"><!--Start wrapper-->
        
            <!--============= Start navbar =============-->
           @include('navbar')
            <!--============= End navbar =============-->
            
            <!--============= Start contact_us =============-->
            <section class="contact_us text-center">
                <div class="container"><!--Start container-->
                    <div class="heading">
                        <h2>contacts us</h2>
                        <img src="imgs/golden_zigzag.png" alt="">
                    </div>
                    <div class="row"><!--Start row-->
                        
                        <div class="col-md-6 col-xs-12">
                            <div class="map">
							{!! $labels[32]->text !!}
                                 </div>
                        </div>
                        
                        <div class="col-md-6 col-xs-12">
                            <div class="contact_info">
                                <h3>{{$labels[16]->text}}</h3>
                                 
					{!! Form::open( [ 'route' =>  'form', 'method' => 'post'] ) !!}
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="name*" required >
                                        <input type="email"    name="maile"  placeholder="email*"  required >
                                    </div>
                                    <div class="input-group">
                                        <textarea    name="message"  placeholder="  message" required ></textarea>
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
                        
                    </div><!--End row-->
                </div><!--End contact_us-->
            </section>
            <!--============= End contacts =============-->
            
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

        </div><!--End wrapper-->    
            
        <!--========== jQuery library ==========-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--========== bootstrap js ==========-->
        <script src="js/bootstrap.min.js"></script>
        <!--========== gallery js ==========-->
        <script src="js/gallery.js"></script>
        <!--========== bxslider js ==========-->
        <script src="js/jquery.bxslider.min.js"></script>
        <!-- Owl Carousel Slider -->
        <script src="js/owl.carousel.min.js"></script>
        <!--========== wow js ==========-->
        <script src="js/wow.min.js"></script>
        <script src="js/jssor.slider.min.js"></script>
        <!--========== custom js ==========-->
        <script src="js/custom.js"></script>

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

