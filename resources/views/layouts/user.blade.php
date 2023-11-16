<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyStream Home</title>
    <link rel="icon" type="image/png" href="/logotop.png">
    <!-- ==================Start Css Link===================== -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slider-range.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/tippy.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- ==================End Css Link===================== -->


    @vite(['resources/css/welcome/animate.css'])
    <link rel="stylesheet" href="assets/css/animate.css">
    @vite(['resources/css/welcome/bootstrap.min.css'])
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    @vite(['resources/css/welcome/datepicker.min.css'])
    <link rel="stylesheet" href="assets/css/datepicker.min.css">
    @vite(['resources/css/welcome/OverlayScrollbars.min.css'])
    <link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
    @vite(['resources/css/welcome/fontawesome.css'])
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    @vite(['resources/css/welcome/icofont.css'])
    <link rel="stylesheet" href="assets/css/icofont.css">
    @vite(['resources/css/welcome/magnific-popup.css'])
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    @vite(['resources/css/welcome/owl.theme.default.min.css'])
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    @vite(['resources/css/welcome/owl.carousel.min.css'])
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    @vite(['resources/css/welcome/slick.css'])
    <link rel="stylesheet" href="assets/css/slick.css">
    @vite(['resources/css/welcome/slick-theme.css'])
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    @vite(['resources/css/welcome/slider-range.css'])
    <link rel="stylesheet" href="assets/css/slider-range.css">
    @vite(['resources/css/welcome/select2.min.css'])
    <link rel="stylesheet" href="assets/css/select2.min.css">
    @vite(['resources/css/welcome/tippy.css'])
    <link rel="stylesheet" href="assets/css/tippy.css">
    @vite(['resources/css/welcome/app.css'])
    <link rel="stylesheet" href="assets/css/app.css">



    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>


    <!-- 
        ================== Header Area Start===================
     -->
    <header class="rt-site-header  rt-fixed-top white-menu">

        <div class="top-header rt-light-text d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        
                    </div>
                    <!-- end top header single -->
                    <div class="col-md-6">
                        <ul class="text-center text-md-right top-social">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <button class="home-logout-btn" type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                                </form>
                            </li>
                            <li><a href="/user/profile"><i class="far fa-user-circle"></i>Profile</a></li>
                        </ul>
                    </div>
                    <!-- end top header single -->
                </div>
            </div>
        </div>
        <!-- end top header -->

        <div class="main-header rt-sticky">
            <nav class="navbar">
                <div class="container">
                    <a href="index.html" class="brand-logo"><img src="/skystreamlogo.png" alt=""></a>
                    <a href="index.html" class="sticky-logo"><img src="/skystreamlogo.png" alt=""></a>
                    <div class="ml-auto d-flex align-items-center">


                        <div class="main-menu">
                            <ul>
                                <li class="current-menu-item"><a href="#home"></a></li>
                                <li><a href="trip-1.html"></a></li>
                                <li><a href="service-1.html"></a></li>
                                <li> <a href="blog.html">Contact Us</a></li>

                            </ul>
                            <div class="mobile-menu">
                                <div class="menu-click">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!-- end main menu -->
                        

                    </div>
                </div>
            </nav>
        </div>
        <!-- /.bootom-header -->

    </header>

    <div class="rt-breadcump rt-breadcump-height with-logn-height">
        <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(/images/home/backgrounds/bredcump.png)">
        </div>
        <!-- /.rt-page-bg -->
        <div class="container">
            <div class="row rt-breadcump-height with-logn-height">
                <div class="col-12">
                    <div class="breadcrumbs-content">
                        <h3>Flight</h3>
                        <div class="breadcrumbs">
                            <span class="divider"><i class="fa-solid fa-house"></i></span>
                            <a href="#" title="Home">home</a>
                            <span class="divider"><i class="fa-solid fa-chevron-right"></i></span> Flight

                        </div>
                        <!-- /.breadcrumbs -->
                    </div>
                    <!-- /.breadcrumbs-content -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

       
        @yield('search')
    </div>
    <!-- /.rt-bredcump -->
   @yield('content')

    <!-- 
    !============= Footer Area Start ===========!
 -->
 <section class="rt-site-footer" data-scrollax-parent="true">
        <!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="copy-text wow fade-in-bottom" data-wow-duration="1s">
                            Copyright © 2018.All Rights Reserved By <a href="#">Sky stream</a>
                        </div>
                        <!-- /.copy-text -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                            <ul>
                                <li><a href="#"><img src="/images/home/brands/card-1.png" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="/images/home/brands/card-2.png" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="/images/home/brands/card-3.png" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="/images/home/brands/card-4.png" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="/images/home/brands/card-5.png" alt="cardimage" draggable="false"></a></li>

                            </ul>
                        </div>
                        <!-- /.rt-footer-social -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.footer-bottom -->
    </section>



    <!-- ==================Start Js Link===================== -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/instafeed.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slider-range.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- ==================End Js Link===================== -->

    @vite(['resources/js/welcome/jquery-2.2.4.min.js'])
    <script src="assets/js/popper.min.js"></script>
    @vite(['resources/js/welcome/popper.min.js'])
    <script src="assets/js/bootstrap.min.js"></script>
    @vite(['resources/js/welcome/bootstrap.min.js'])
    <script src="assets/js/moment.min.js"></script>
    @vite(['resources/js/welcome/moment.min.js'])
    <script src="assets/js/jquery.easing.1.3.js"></script>
    @vite(['resources/js/welcome/jquery.easing.1.3.js'])
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    @vite(['resources/js/welcome/imagesloaded.pkgd.min.js'])
    <script src="assets/js/isotope.pkgd.min.js"></script>
    @vite(['resources/js/welcome/isotope.pkgd.min.js'])
    <script src="assets/js/instafeed.min.js"></script>
     @vite(['resources/js/welcome/instafeed.min.js'])
    <script src="assets/js/waypoints.min.js"></script>
     @vite(['resources/js/welcome/waypoints.min.js'])
    <script src="assets/js/jquery.counterup.min.js"></script>
     @vite(['resources/js/welcome/jquery.counterup.min.js'])
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
     @vite(['resources/js/welcome/jquery.magnific-popup.min.js'])
    <script src="assets/js/jquery.scrollUp.min.js"></script>
     @vite(['resources/js/welcome/jquery.scrollUp.min.js'])
    <script src="assets/js/owl.carousel.min.js"></script>
     @vite(['resources/js/welcome/owl.carousel.min.js'])
    <script src="assets/js/TweenMax.min.js"></script>
     @vite(['resources/js/welcome/TweenMax.min.js'])
    <script src="assets/js/scrollax.min.js"></script>
     @vite(['resources/js/welcome/scrollax.min.js'])
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
    <script src="assets/js/wow.js"></script>
     @vite(['resources/js/wow.js'])
    <script src="assets/js/jquery.overlayScrollbars.min.js"></script>
     @vite(['resources/js/welcome/jquery.overlayScrollbars.min.js'])
    <script src="assets/js/jquery-ui.js"></script>
     @vite(['resources/js/welcome/jquery-ui.js'])
    <script src="assets/js/jquery.appear.js"></script>
     @vite(['resources/js/welcome/jquery.appear.js'])
    <script src="assets/js/select2.min.js"></script>
     @vite(['resources/js/welcome/select2.min.js'])
    <script src="assets/js/slick.min.js"></script>
     @vite(['resources/js/welcome/slick.min.js'])
    <script src="assets/js/slider-range.js"></script>
     @vite(['resources/js/welcome/slider-range.js'])
    <script src="assets/js/vivus.min.js"></script>
     @vite(['resources/js/welcome/vivus.min.js'])
    <script src="assets/js/tippy.all.min.js"></script>
     @vite(['resources/js/welcome/tippy.all.min.js'])
    <script src="assets/js/app.js"></script>
     @vite(['resources/js/welcome/app.js'])

     <script src="https://kit.fontawesome.com/3aff9cc97f.js" crossorigin="anonymous"></script>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
