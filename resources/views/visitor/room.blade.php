


@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <!--//main-header-->

    <div class="about-bottom" id="ab">
        <div class="col-md-12 w3l_about_bottom_right two">
            <h3 class="tittle why" style="text-align: center;">Book a Reservation</h3>
            <hr style="border-top: 1px solid red;">

            @include('partials._alert_message')

            <div class="book-form">

                <form action="{{ route('visitor.room.reservation') }}" method="post">
                    @csrf
                    <div class="col-md-6 form-date-w3-agileits">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
                    <input id="datepicker" name="arrival_date" type="text" data-date-format="Y-m-d" value="{{ old('arrival_date') ?: date('Y-m-d') }}">

                    </div>

                    <div class="col-md-6 form-date-w3-agileits">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
                    <input id="datepicker2" name="departure_date" type="text" data-date-format="Y-m-d" value="{{ old('departure_date') ?: date('Y-m-d') }}">

                    </div>
                    
                    <div class="col-md-6 form-left-agileits-w3layouts bottom-w3ls">
                        <label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
                        <select class="form-control" name="room">
                              <option value="" > Select </option>
                              @foreach ($rooms as $key => $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                              @endforeach
                              
                        </select>
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> No.of Room :</label>
                        <input type="text" name="number_of_room" class="form-control">
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
                        <input type="text" name="number_of_people" class="form-control">
                    </div>

                    @if (!Auth::user())
                        
                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> Name :</label>
                        <input type="text" name="name" placeholder="Your name" class="form-control">
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> Mobile :</label>
                        <input type="text" name="mobile" placeholder="Mobile Number" class="form-control">
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> Email :</label>
                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> Password :</label>
                        <input type="text" name="password" class="form-control">
                    </div>

                    @endif
                    <div class="clearfix"> </div>
                    <div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
                        <input type="submit" value="Make a Reservation">
                    </div>
                </form>
            </div>

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

                  @foreach ($rooms as $key => $room)
                      
                  
                  <div style="margin-top:30px !important" class="my-2 col-md-3 w3_agileits_services_grid hvr-overline-from-center">
                        <div class="w3_agileits_services_grid_agile">
                              <div class="w3_agileits_services_grid_1">
                                    <img src="{{ asset($room->image) }}" height="250px" alt="service-img">
                              </div>
                              <h3 title="View Details">
                                    <a href="">{{ $room->name }} </a>  
                              </h3>
                              <p>{{ $room->description }}</p>
                        </div>
                  </div>
                  @endforeach

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
    <!-- //testimonials -->
    @endsection




@section('banner_and_menu_for_other_pages_not_for_master_page')
    <div id="demo-1" class="banner-inner">
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
    </div>
    @endsection
