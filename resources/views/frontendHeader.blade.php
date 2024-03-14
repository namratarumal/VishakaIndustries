<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Font awesome -->
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('frontend/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.simpleLens.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('frontend/css/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="frontend/css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('frontend/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('frontend/images/logo/favicon.ico')}}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <section id="header">
        <!-- Start header section -->
        <header id="aa-header">
            <!-- start header bottom  -->
            <div class="aa-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <div class="aa-header-bottom-area">
                                <!-- logo  -->
                                <div class="aa-logo">
                                    <!-- Text based logo -->
                                    <a href="/">
                                        <img src="{{asset('frontend/images/logo/vishakatextlogo.jpg')}}" alt="Vishaka Tex Logo" style="height:55px;float:left;" />
                                        <p>Vishaka <strong>Industries</strong> <span>Rise of an innovation</span></p>
                                    </a>
                                </div>
                                <!-- / logo  -->
                            </div>
                        </div>
                        <div class="col-md-4 hidden-xs col-sm-6">
                            <ul class="socialmedia">
                                <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / header bottom  -->
        </header>
        <!-- / header section -->

        <!-- menu -->
        <section id="menu">
            <div class="container">
                <div class="menu-area">
                    <!-- Navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/aboutus">About Us</a></li>
                                <li><a href="#.">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($category as $c)
                                        <li><a href="{{ route('products', str_replace(' ','-',$c->category_name)) }}">{{$c->category_name}}</a></li>
                                        @endforeach
                                        <!--li><a href="dobby_border.php">Dobby Border Towel</a></li>
                  <li><a href="ribs_towel.php">Ribs Towel</a></li>
                  <li><a href="jacquard_velour_towel.php">Jacquard Velour Towel</a></li-->

                                    </ul>
                                </li>
                                <li><a href="/gallary">Gallery</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/feedback">Feedback</a></li>
                                <li><a href="/enquiry">Enquiry</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </section>
        <!-- / menu -->

    </section>


    @yield('frontend')

    <!-- footer -->
    <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <h3>Main Menu</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="aboutus.php">About us</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="feedback.php">Feedback</a></li>
                                            <li><a href="enquiry.php">Enquiry</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Contact Us</h3>
                                            <address>
                                                <p> 25 Astor Pl, NY 10003, USA</p>
                                                <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                                                <p><span class="fa fa-envelope"></span>info@vishakatex.com</p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                <p>&copy; All Rights Reserved Vishaka Tex.</p>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-right">
                                <p>Design &amp; Developed by <a href="http://www.vertextechnosys.com/" target="_blank">Vertex Technosys</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.smartmenus.js')}}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.smartmenus.bootstrap.js')}}"></script>
    <!-- To Slider JS -->
    <script src="{{asset('frontend/js/sequence.js')}}"></script>
    <script src="{{asset('frontend/js/sequence-theme.modern-slide-in.js')}}"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.simpleGallery.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.simpleLens.js')}}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{asset('frontend/js/slick.js')}}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{asset('frontend/js/nouislider.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>



    <!-- Product Inner Page slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>



</body>

</html>