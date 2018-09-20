
<header class="default-header">
    <div class="sticky-header">
        <div class="container">
            <div class="header-content d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#top" class="smooth"><img src="{{URL::asset('img/home/img/Invitation-Card.png')}}" alt=""></a>
                </div>
                <div class="right-bar d-flex align-items-center">
                    <nav class="d-flex align-items-center">
                        <ul class="main-menu">
                            <li><a href="#top">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#protfolio">Portfolio</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
                    </nav>
                    <div class="search relative">
                        <span class="lnr lnr-magnifier"></span>
                        <form action="#" class="search-field">
                            <input type="text" placeholder="Search here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search here'">
                            <button class="search-submit"><span class="lnr lnr-magnifier"></span></button>
                        </form>
                    </div>
                    <div class="header-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
