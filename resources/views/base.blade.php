<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Interior Designing, Architectural Designing" />
    <meta name="description" content="The best interior designing company in Dubai, UAE" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Studio1 Creators</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ public_path().'/img/favicon.png' }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ public_path().'/css/plugins.css' }}" />

    <link href="{{ public_path().'/css/twentytwenty.css' }}" rel="stylesheet" type="text/css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ public_path().'/css/style.css' }}" />

</head>

<body class="bg-dark">


    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Studio1 Creators</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="/">
                <img src="{{ public_path().'/img/logo-white.png' }}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">Art Consulting</a>
                            <a class="dropdown-item" href="/">Interior Design</a>
                            <a class="dropdown-item" href="/">Architectural Design</a>
                            <a class="dropdown-item" href="/">Landscape Design</a>
                            <a class="dropdown-item" href="/">Turnkey Contract</a>
                            <a class="dropdown-item" href="/">Food & Beverage Design</a>
                            <a class="dropdown-item" href="/">Spa & Wellness</a>
                            <a class="dropdown-item" href="/">FF & E</a>
                            <a class="dropdown-item" href="/">Fit-out Services</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Projects</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/projects/interior/">Interior Design</a>
                            <a class="dropdown-item" href="/projects/architectural/">Architectural Design</a>
                            <a class="dropdown-item" href="/projects/landscape/">Landscape</a>
                            <a class="dropdown-item" href="/projects/fitout/">Fitout Services</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="social-icon">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#0"><i class="fab fa-instagram"></i></a>
                </div>
                <!--<div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div>-->
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    @yield("content")

    <!-- ==================== Start Footer ==================== -->

    <footer class="main-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item abot">
                        <div class="logo-footer mb-20">
                            <a href="/" class="logo">
                                <img src="{{ public_path().'/img/logo-white1.png' }}" alt="">
                            </a>
                        </div>
                        <!--<p class="text-justify">Studio1 Creators are recognized as a leading professional providing excellent service for all types of interior architecture and architectural design projects, well established in the United Arab Emirates, our services extend throughout the GCC region. We are in the business of designing spaces by understanding and providing solutions that consider cost, time and quality - ensuring every project is of the highest quality.</p>-->
                        <div class="social-icon">
                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="item usful-links">
                        <div class="fothead">
                            <h6>Projects</h6>
                        </div>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i> <a href="/projects/interior/">Interior Design</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="/projects/architectural/">Architectural</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="/projects/landscape/">Landscape</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="/projects/fitout/">Fitout Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Contact</h6>
                        </div>
                        <p>+971 506525592</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Email</h6>
                        </div>
                        <p>info@studio1creators.com</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Visit</h6>
                        </div>
                        <p>Studio1 Creators</p>
                        <p>Office No. 1502<br> City Tower-2,</p>
                        <p>Sheikh Zayed Road, <br>Dubai, UAE.</p>
                        <p>P.O.Box - 15473</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-left">
                            <p>© {{ date('Y') }}, Studio1 Creators.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-right">
                            <p>All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->

    <a href="https://api.whatsapp.com/send?phone=0971562329233&text=Hi." class="floating" target="_blank">
    <img src="{{ public_path().'/img/whatsapp.png' }}" alt="logo"></a>




    <!-- jQuery -->
    <script src="{{ public_path().'/js/jquery-3.0.0.min.js' }}"></script>
    <script src="{{ public_path().'/js/jquery-migrate-3.0.0.min.js' }}"></script>

    <!-- plugins -->
    <script src="{{ public_path().'/js/plugins.js' }}"></script>

    <!-- custom scripts -->
    <script src="{{ public_path().'/js/scripts.js' }}"></script>

    <!-- google map api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap">
        </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            grid: {
            rows: 2,
            },
            spaceBetween: 30,
            loop: true,
            autoplay: {
            delay: 0,
            disableOnInteraction: false
            },
            speed: 1500,
            freeMode: true,
        });
    </script>
</body>

</html>