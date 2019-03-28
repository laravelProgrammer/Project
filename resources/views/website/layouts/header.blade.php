 <header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
                Very beautiful wishing and wedding cards.
            </span>

            <div class="topbar-child2">
                <span class="topbar-email">
                    laravelprogrammers@gmail.com
                </span>


            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="{{route('/')}}" class="logo">
                <img src="{{asset('website/images/icons/logo.png')}}" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">


                        <li>
                            <a href="{{ route('/') }}">Home</a>
                        </li>

                        

                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        @guest
                        <li>
                            <a href="{{route('login')}}"> Login</a>
                        </li>
                        @else

                        
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-forms').submit(); "> Logout</a>
                        </li>
                        @endguest

                        <form id="logout-forms" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        @guest
                        <li>
                            <a href="{{ route('register') }}">Registeration</a>
                        </li>
                        @endguest
                         
                         @guest
                         <li></li>
                         @else
                          <div class="dropdown " style="float:right;">
                            <li class="dropdown-toggle" data-toggle="dropdown">
                                <a href="" >{{Auth::user()->name}}</a>
                                <span class="caret"></span>
                            </li>
                         
                              <ul class="dropdown-menu">
                               
                               
                                <li class="text-center"><a href="{{route('profile.edit',Auth::user()->id)}}">Update profile</a></li>
                               <hr>
                            </ul>
                        </div>
                        @endguest

                   
                    </ul>

                </nav>
            </div>

            <!-- Header Icon -->

        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="{{asset('website/images/icons/logo.png')}}" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">


                <span class="linedivide2"></span>


            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
                     Very beautiful wishing and wedding cards.
                 </span>
             </li>

             <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
                    <span class="topbar-email">
                        laravelprogrammers@gmail.com
                    </span>


                </div>
            </li>

            <li class="item-topbar-mobile p-l-10">
                <div class="topbar-social-mobile">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>
            </li>






            <li class="item-menu-mobile">
                <a href="{{ route('/') }}">Home</a>
            </li>



            <li class="item-menu-mobile">
                <a href="{{route('about')}}">About</a>
            </li>

            <li class="item-menu-mobile">
                <a href="{{route('contact')}}">Contact</a>
            </li>
            @guest
            <li class="item-menu-mobile">
                <a href="{{route('login')}}"> Login</a>
            </li>
            @else


            <li class="item-menu-mobile">
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-forms').submit(); "> Logout</a>
            </li>
            @endguest

            <form id="logout-forms" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @guest
            <li class="item-menu-mobile">
                <a href="{{ route('register') }}">Registeration</a>
            </li>
            @endguest
        </ul>
    </nav>
</div>
</header>
