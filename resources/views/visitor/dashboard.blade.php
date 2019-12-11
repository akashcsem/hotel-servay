

<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>

    <link href="{{asset('frontEnd')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/style.css" />
    <link href="{{asset('frontEnd')}}/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="{{asset('frontEnd')}}///fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
    <link href="{{asset('frontEnd')}}///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- //for-mobile-apps -->
    @yield('css')
    <!--//web-fonts-->

</head>
    <body>
        <!--/main-header-->
        <!--banner-section-->
        @include('visitor.inc.banner')
        <!--/banner-section-->

        <!--menu_slide-->
        @include('visitor.inc.menu_slide')
        <!--/menu_slide-->


        <!-- feature and body -->
        
    <div class="about-bottom" id="ab">
        <div class="col-md-12" style="padding-top:100px; padding-bottom:100px">
            <hr style="border-top: 1px solid red;">

                <form action="#" method="post">
                    <div class="clearfix"> </div>
                    <div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
                            <a class="btn btn-danger btn-block" href="{{ route('visitor.rooms.index') }}">Make a Reservation</a>
                    </div>
                </form>

        </div>
        <div class="clearfix"> </div>


        <div class="special featured">
        <div class="container">
            <div class="ab-w3l-spa">
                <h3 class="tittle">Welcome to Our Luxary Hotel!</h3>
                <hr style="border-top: 1px solid red;">
                <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels.
                </p>
            </div>
            <!-- services -->
            <div class="w3_agileits_services_grids">
                <div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <img src="{{asset('frontEnd')}}/images/5.jpg" alt="service-img">
                        </div>
                        <h3>Deluxe Room</h3>
                        <p>Online hotel reservations are a popular method for booking hotel rooms.</p>
                    </div>
                </div>
                <div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <img src="{{asset('frontEnd')}}/images/6.jpg" alt="service-img">
                        </div>
                        <h3>Luxury Room</h3>
                        <p>Online hotel reservations are a popular method for booking hotel rooms.</p>
                    </div>
                </div>
                <div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <img src="{{asset('frontEnd')}}/images/7.jpg" alt="service-img">
                        </div>
                        <h3>Swimming Pool</h3>
                        <p>Online hotel reservations are a popular method for booking hotel rooms.</p>
                    </div>
                </div>
                <div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <img src="{{asset('frontEnd')}}/images/8.jpg" alt="service-img">
                        </div>
                        <h3>Spa Care</h3>
                        <p>Online hotel reservations are a popular method for booking hotel rooms.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //services -->

            <div class="agileinf-button">    <a class="read" href="single.html">
                    Read More
                </a>
            </div>

        </div>
    </div>
    <div class="featured-facility">
        <!-- welcome -->

        <div class="spa-agile">
            <h3 class="tittle fea">Featured  Facilities</h3>
            <div class="col-md-3 spa-grid">

                <i class="fa fa-cutlery" aria-hidden="true"></i>

                <h4>Restaurant </h4>

            </div>
            <div class="col-md-3 spa-grid">

                <i class="fa fa-glass" aria-hidden="true"></i>


                <h4>Bar</h4>


            </div>
            <div class="col-md-3 spa-grid lost">

                <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>

                <h4>Gym</h4>


            </div>
            <div class="col-md-3 spa-grid lost">

                <i class="fa fa-car" aria-hidden="true"></i>


                <h4>Pick Up</h4>


            </div>
            <div class="clearfix"> </div>
        </div>

        <!-- //welcome -->
    </div>
    <!-- about-bottom -->
    <div class="about-bottom">
        <div class="col-md-6 w3l_about_bottom_left">
            <div class="video-grid-single-page-agileits">
                <div data-video="44fbHx7P-t8" id="video"> <img src="{{asset('frontEnd')}}/images/watch.jpg" alt="" class="img-responsive" /> </div>
            </div>

            <div class="w3l_about_bottom_left_video">
                <h4>watch our video</h4>
            </div>
        </div>
        <div class="col-md-6 w3l_about_bottom_right one">
            <h3 class="tittle why">why choose us ?</h3>
            <p>Online hotel reservations are a popular method for booking hotel rooms.</p>
            <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title asd">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Restaurant & Banquets
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body panel_text">
                            Online hotel reservations are a popular method for booking hotel rooms.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Transportation Included
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body panel_text">
                            Online hotel reservations are a popular method for booking hotel rooms.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>The best care for our precious visitors
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body panel_text">
                            Online hotel reservations are a popular method for booking hotel rooms.
                        </div>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Pool Deluxe Room
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body panel_text">
                            Online hotel reservations are a popular method for booking hotel rooms.
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    

    <div class="clearfix"> </div>
    </div>
    <!-- //about -->
    <!-- /plans -->
    <div class="plans-section">
        <div class="container">
            <h3 class="w3l-inner-h-title">Rates and Booking</h3>
            <div class="priceing-table-main">
                <div class="col-md-3 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr1">
                            <h4>SINGLE ROOM</h4>
                            <h4><span>TK</span>3900</h4>
                            <h5>1 Night</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">

                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                                <h6 class="bed"><i class="fa fa-bed" aria-hidden="true"></i></h6>
                            </div>
                            <div class="price-selet pric-sclr1">
                                <a href="#ab" class="scroll" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr2">
                            <h4>DOUBLE ROOM</h4>
                            <h4><span>TK</span>5500</h4>
                            <h5>1 Night</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">

                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                                <h6 class="bed two"><i class="fa fa-bed" aria-hidden="true"></i></h6>

                            </div>
                            <div class="price-selet pric-sclr2">
                                <a href="#ab" class="scroll" >Book Now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr3">
                            <h4>DELUX ROOM</h4>
                            <h4><span>TK</span>7000</h4>
                            <h5>1 Night</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                                <h6 class="bed three"><i class="fa fa-bed" aria-hidden="true"></i></h6>
                            </div>
                            <div class="price-selet pric-sclr3">
                                <a href="#ab" class="scroll" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid wthree lost">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr4">
                            <h4>LUXARY ROOM</h4>
                            <h4><span>TK</span>9500</h4>
                            <h5>1 Night</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                                <h6 class="bed four"><i class="fa fa-bed" aria-hidden="true"></i></h6>
                            </div>
                            <div class="price-selet pric-sclr4">
                                <a href="#ab" class="scroll" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- testimonials -->
    <div class="guests-agile">
        <h3 class="tittle">Our Guests</h3>
        <div class="w3_agileits_testimonial_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels.</p>
                                <img src="{{asset('frontEnd')}}/images/Tarek.jpg" style="height: 120px; width: 120px;" alt=" " class="img-responsive" />

                            </div>
                        </li>
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels.</p>
                                <img src="{{asset('frontEnd')}}/images/Sraboni.jpg" style="height: 120px; width: 120px;" alt=" " class="img-responsive" />

                            </div>
                        </li>
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels.</p>
                                <img src="{{asset('frontEnd')}}/images/Nafeur.jpg" style="height: 120px; width: 120px;" alt=" " class="img-responsive" />

                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- //flexSlider -->
        </div>
    </div>
        <!--/feature and body -->

        <!-- Footer -->
        @include('visitor.inc.footer')
        <!--/footer -->

        <script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery-2.1.4.min.js"></script>
    <!-- Dropdown-Menu-JavaScript -->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //Dropdown-Menu-JavaScript -->


    <script type="text/javascript" src="{{asset('frontEnd')}}/js/jquery.zoomslider.min.js"></script>
    <!-- search-jQuery -->
    <script src="{{asset('frontEnd')}}/js/main.js"></script>

    <!--/script-->
    <script src="{{asset('frontEnd')}}/js/simplePlayer.js"></script>
    <script>
        $("document").ready(function() {
            $("#video").simplePlayer();
        });
    </script>
    <!-- flexSlider -->
    <script defer src="{{asset('frontEnd')}}/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!--//script for portfolio-->
    <!-- Calendar -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery-ui.css" />
    <script src="{{asset('frontEnd')}}/js/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
    <!-- //Calendar -->
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('frontEnd')}}/js/easing.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
             };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!--end-smooth-scrolling-->
    <!--js for bootstrap working-->
    <script src="{{asset('frontEnd')}}/js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
        @yield('js')
    </body>
</html>







{{-- 
@section('banner_and_menu_for_other_pages_not_for_master_page') --}}
    {{-- <div id="demo-1" class="banner-inner">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="index.html"><span>R</span>esort <p class="s-log">Booking</p></a>

                        </h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="about.html">About</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown">
                                <a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Pages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="icons.html">Font Icons</a></li>

                                    <li><a href="codes.html">Short Codes</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html">Contact</a></li>


                        </ul>


                    </div>
                    <div class="clearfix"> </div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>

            </div>


            <!--//header-w3l-->
        </div>
    </div> --}}
    {{-- @endsection --}}
