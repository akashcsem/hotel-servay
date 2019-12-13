


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

                @if ($request->session()->has('room_id'))
                    @php
                        $room_id          = $request->session()->get('room_id');
                        $arrival_date     = $request->session()->get('arrival_date');
                        $departure_date   = $request->session()->get('departure_date');
                        $number_of_room   = $request->session()->get('number_of_room');
                        $number_of_people = $request->session()->get('number_of_people');
                        $session_set = true;
                    @endphp
                @else
                @php $session_set = false; @endphp
                @endif
                <form action="{{ route('visitor.room.reservation') }}" method="post">
                    @csrf
                    <div class="col-md-6 form-date-w3-agileits">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
                        @if ($session_set)
                            <input id="datepicker" name="arrival_date" type="text" data-date-format="Y-m-d" value="{{ old('arrival_date') ?: $arrival_date }}">
                        @else
                            <input id="datepicker" name="arrival_date" type="text" data-date-format="Y-m-d" value="{{ old('arrival_date') ?: date('Y-m-d') }}">
                        @endif

                    </div>

                    <div class="col-md-6 form-date-w3-agileits">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
                        @if ($session_set)
                        <input id="datepicker2" name="departure_date" type="text" data-date-format="Y-m-d" value="{{ old('departure_date') ?: $departure_date  }}">
                        @else
                        <input id="datepicker2" name="departure_date" type="text" data-date-format="Y-m-d" value="{{ old('departure_date') ?:date('Y-m-d') }}">
                        @endif
                    </div>
                    
                    <div class="col-md-6 form-left-agileits-w3layouts bottom-w3ls">
                        <label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
                        <select class="form-control" name="room">
                              <option value="" > Select </option>
                              @foreach ($rooms as $key => $room)
                              @if ($session_set)
                                <option value="{{ $room->id }}" {{ $room->id == $room_id ? 'selected' : '' }}>{{ $room->name }}</option>
                            @else
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endif
                              @endforeach
                              
                        </select>
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> No.of Room :</label>
                        @if ($session_set)
                        <input type="text" name="number_of_room" value="{{ $number_of_room }}" class="form-control">
                        @else
                        <input type="text" name="number_of_room" class="form-control">
                        @endif
                    </div>

                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
                        <label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
                        @if ($session_set)
                        <input type="text" name="number_of_people" value="{{ $number_of_people }}" class="form-control">
                        @else
                        <input type="text" name="number_of_people" class="form-control">
                        @endif
                    </div>

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
                              {{ $room->rent}} Tk.
                              <p>{{ $room->description }}</p>
                        </div>
                  </div>
                  @endforeach

                <div class="clearfix"> </div>
            </div>
            <!-- //services -->


        </div>
    </div>
  

        <div class="clearfix"> </div>
    </div>
 
    <
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
