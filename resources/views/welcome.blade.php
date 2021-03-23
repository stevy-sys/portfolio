<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$title ?? ''}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ environement() ? asset('css/animate.css') : secure_asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ environement() ? asset('css/icomoon.css') : secure_asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ environement() ? asset('css/bootstrap.css') : secure_asset('css/bootstrap.css')}}">
        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{ environement() ? asset('css/flexslider.css') : secure_asset('css/flexslider.css')}}">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="{{ environement() ? asset('fonts/flaticon/font/flaticon.css') : secure_asset('fonts/flaticon/font/flaticon.css')}}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ environement() ? asset('css/owl.carousel.min.css') : secure_asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ environement() ? asset('css/owl.theme.default.min.css') : secure_asset('css/owl.theme.default.min.css')}}">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{ environement() ? asset('css/style.css') : secure_asset('css/style.css')}}">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
	<div id="colorlib-page">
		<div class="container-wrap">
		    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url({{asset('./images/za.jpg')}});"></div>
                    <h1 id="colorlib-logo"><a href="/">{{__('menu.nom')}}</a></h1>
                    <span class="position"><a href="/skills">{{__('menu.metier')}}</a></span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar-tsy-tapakevtra" class="collapse">
                        <ul>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/' ? 'active' : ''}}"><a href="/">Home</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''}}" ><a href="/about" >About</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/service' ? 'active' : ''}}" ><a href="/service">Services</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/skill' ? 'active' : ''}}" ><a href="/skills">Skills</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/education' ? 'active' : ''}}" ><a href="/education">Education</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/experience' ? 'active' : ''}}" ><a href="/experience">Experience</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/work' ? 'active' : ''}}" ><a href="/work">Work</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/blog' ? 'active' : ''}}" ><a href="/blog">Blog</a></li>
                            <li class="{{ $_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''}}" ><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </small> </p>
                    <ul>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>
            </aside>

            <div id="colorlib-main">
                @yield('content');
            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

        <!-- jQuery -->
        <script src="{{ environement() ? asset('js/jquery.min.js') : secure_asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{ environement() ? asset('js/jquery.easing.1.3.js') : secure_asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{ environement() ? asset('js/bootstrap.min.js') : secure_asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{ environement() ? asset('js/jquery.waypoints.min.js') : secure_asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Flexslider -->
        <script src="{{ environement() ? asset('js/jquery.flexslider-min.js') : secure_asset('js/jquery.flexslider-min.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{ environement() ? asset('js/owl.carousel.min.js') : secure_asset('js/owl.carousel.min.js')}}"></script>
        <!-- Counters -->
        <script src="{{ environement() ? asset('js/jquery.countTo.js') : secure_asset('js/jquery.countTo.js')}}"></script>

        <!-- MAIN JS -->
        <script src="{{ environement() ? asset('js/main.js') : secure_asset('js/main.js')}}"></script>
	</body>
</html>
