<div class="master-wrapper">

    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="{{asset('img/loading.GIF')}}" alt="loading" /></span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie" href="index.html">THE <span class="theme-accent-color">GRILL</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About Us</a></li>  
                    <li><a href="#about">Specials</a></li>    
                    <li><a href="#about">Our Menu</a></li>      
                    <li><a href="#about">Book a Table</a></li>                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Extras <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    

                    @auth

                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>

                    <li >
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>

                @else

                    <li>
                        <a href="{{ route('login') }}">Log in</a>
                    </li>

                    @if (Route::has('register'))

                        <li >
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                @endauth





                    <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->         

        </div>
        <!-- /.container-fluid -->
    </nav>

    
    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Enter Search Term" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Header -->
    <header id="headerwrap" class="fullheight background--dar">
        <div id="BigVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=H3NIBobsWh0', containment:'#headerwrap', autoPlay:true, mute:true, opacity:1, showControls : false, startAt: 30}"></div> 
        <div class="vertical-center">              
            <div class="intro-text text-center smoothie col-sm-12 match-height">                    
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="{{asset('img/'.$section[0]->logo)}}"></div>              
            </div>
        </div>
    </header>
