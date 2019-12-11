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
                    <li><a href="{{ route('login') }}">Login</a> </li>
                    <li><a style="margin-right: 13px;" href="{{ route('register') }}">Register</a> </li>
                @endif                
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
