<div class="w3layouts-top-strip">
    <div class="top-srip-agileinfo">
        <div class="w3ls-social-icons text-left">
            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

        </div>
        <div class="agileits-contact-info text-right">
            <ul>
                @if (Auth::check())

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="">{{ Auth::user()->name }}</a></li>
                @else 
                    <li><a href="{{ route('home') }}">Login</a> </li>
                    <li><a style="margin-right: 13px;" href="{{ route('register') }}">Register</a> </li>
                @endif                
                </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>





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
                    <h1><a  href="index.html"><span>V</span>elly Garden <p class="s-log">Hotel</p></a>

                    </h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="{{ route('visitor.rooms.index') }}">Rooms</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="{{ route('visitor.contact.us') }}">Contact</a></li>


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
