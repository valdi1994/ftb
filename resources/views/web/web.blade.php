<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <style>
        @media (max-width: 991px) {
            #header.sticky-header:not(.static-sticky), #header.sticky-header:not(.static-sticky) #header-wrap, #header.sticky-header:not(.static-sticky):not(.sticky-style-2):not(.sticky-style-3) #logo img {
                height: 100px;
            }
        }
    </style>
@section('css')
@show
<!-- Document Title
    ============================================= -->
    <title>{{\Illuminate\Support\Facades\Config::get('app.name')}}</title>

</head>

<body class="stretched">
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="page-section dark sticky-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{route('home')}}" class="standard-logo" data-dark-logo="{{asset('images/logo.png')}}"><img
                                src="{{asset('images/logo.png')}}" alt="Canvas Logo"></a>
                    <a href="{{route('home')}}" class="retina-logo" data-dark-logo="{{asset('images/logo.png')}}"><img
                                src="{{asset('images/logo.png')}}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul class="one-page-menu">
                        <li class="current"><a href="{{route('home')}}" data-href="#header">
                                <div>Home</div>
                            </a></li>

                        @guest
                        <li><a href="{{route('auth')}}">
                                <div>Subscribe/Register</div>
                            </a></li>
                        @endguest
                        <li><a href="{{route('how_to')}}">
                                <div>How to buy FTB</div>
                            </a></li>
                        <li><a href="{{route('bounty')}}">
                                <div>Bounty</div>
                            </a></li>
                        <li><a href="{{route('social')}}">
                                <div>Social</div>
                            </a></li>
                        <li><a href="{{route('white_paper')}}">
                                <div>White Paper</div>
                            </a></li>
                        <li><a href="{{route('contact_us')}}">
                                <div>Contact Us</div>
                            </a></li>
                        @guest
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('profile')}}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.logout')}}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                        >
                                            Logout

                                            <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    @include('partials.alerts')
@section('slider')

@show


<!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                @section('content')

                @show

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; {{\Carbon\Carbon::now()->format('Y')}} All Rights Reserved by {{\Illuminate\Support\Facades\Config::get('app.name')}}.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

<script type="text/javascript">
    $(function () {
        $("#side-navigation").tabs({show: {effect: "fade", duration: 400}});
    });
</script>
@section('js')
@show
</body>
</html>