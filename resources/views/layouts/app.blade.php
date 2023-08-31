<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->
    <title> SleepShop</title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href="assets/images/logo/favicon-32x32.svg" type="image/x-icon">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.5.1.1.min.css">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <!--  Ui Tabs Css -->
    <link rel="stylesheet" href="assets/css/plugin/jquery-ui.min.css">
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="assets/css/plugin/nice-select.v1.0.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="shoe">
    <!-- ==========Preloader========== -->
    <div class="loader"><span>SleepShop...</span></div>
    <!-- ==========Preloader========== -->
    <!--===scroll bottom to top===-->
    <a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
    <!--===scroll bottom to top===-->

    <!-- header-default start -->
    <header class="header-style-3">
        <!-- Start Desktop Menu -->        

        <div class="menubox">
            <div class="top-info d-flex">
                <div class="container">
                    <div class="row g-0 ">
                        <div class="col-12">
                            <div class="top-info__top-content d-flex align-items-center justify-content-between">
                                <div class="medio-boxx">
                                    <ul>
                                        <li> <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="flaticon-facebook-app-symbol"></i></a> </li>
                                        <li> <a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a> </li>
                                        <li> <a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a> </li>
                                    </ul>
                                </div>
                                <a href="{{ route('aboutUs') }}" class="international-shopping d-lg-block d-none ">Добро пожаловать в магазин
                                    SleepShop!</a>
                                <a href="{{ route('contacts') }}" class="international-shopping d-lg-block d-none ">+375 (44) 255-62-85</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-lg-none d-block">
                <div class="menu-closer"></div>
                <div class="mobile-menu__sidebar-menu">
                    <div class="menu-closer two"> <span> Меню</span> <span class="cross"><i
                                class="flaticon-cross"></i></span> </div>

                    <ul class="page-dropdown-menu">
                        <li class="dropdown-list"> <a href="{{ route('aboutUs') }}"> <span>О нас </span> </a>

                        </li>
                        <li class="dropdown-list"> <a href="{{ route('catalog') }}"> <span>Каталог </span> <span
                                    class="menuarrow"> </span> </a>

                        </li>
                        <li class="dropdown-list"> <a href="{{ route('delivery') }}"> <span>Оплата и доставка </span> <span
                                    class="menuarrow">
                                </span> </a>

                        </li>
                        <li class="dropdown-list"> <a href="{{ route('contacts') }}"> <span>Контакты</span> <span class="menuarrow">
                                </span> </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sticy-header">
            <div class="mobile-menu d-lg-none d-block">
                <div class="mobile-menu__menu-top border-bottom-0">
                    <div class="container">
                        <div class="row">
                            <div class="menu-info d-flex justify-content-between align-items-center">
                                <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                    href="index.html" class="logo"> <img src="assets/images/logo/logo.svg" alt=""> </a>
                                <div class="cart-holder">
                                    <a href="{{ route('cart') }}" class="cart cart-icon position-relative">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container position-relative d-lg-block d-none">
                <div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo me-2">
                        <img src="assets/images/logo/logo.svg" alt=""> </a>
                    <div class="mega-menu-default mega-menu d-lg-block d-none">
                        <div class="container ">
                            <div class="row d-flex align-items-center justify-content-between">
                                <nav>
                                    <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                        <li class="dropdown-list"> <a href="{{ route('aboutUs') }}"> <span>О нас</span> <span
                                                    class="menuarrow">
                                                </span> </a>
                                        </li>
                                        <li class="dropdown-list"> <a href="{{ route('catalog') }}"> <span>Каталог </span> <span
                                                    class="menuarrow">
                                                </span> </a>
                                        </li>
                                        <li class="dropdown-list megamenu "> <a href="{{ route('delivery') }}"> <span>Оплата и доставка
                                                </span> <span class="menuarrow">
                                                </span> </a>
                                        </li>
                                        <li class="dropdown-list"> <a href="{{ route('contacts') }}"> <span>Контакты </span> <span
                                                    class="menuarrow">
                                                </span> </a>
                                        </li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-content-closer"></div>

        <div class="main-menu p-0 border-bottom-0">
            <div class="mega-menu-default mega-menu d-lg-block d-none">
                <div class="container auto-container position-relative">
                    <div class="row">
                        <div class=" d-flex align-items-center justify-content-between "> <a href="index.html"
                                class="logo"> <img src="assets/images/logo/logo.svg" alt=""> </a>
                            <nav>
                                <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                    <li class="dropdown-list"> <a href="{{ route('aboutUs') }}"> <span>О нас</span> <span class="menuarrow">
                                            </span> </a>

                                    </li>
                                    <li class="dropdown-list"> <a href="{{ route('catalog') }}"> <span>Каталог
                                            </span> <span class="menuarrow">
                                            </span> </a>

                                    </li>
                                    <li class="dropdown-list megamenu "> <a href="{{ route('delivery') }}"> <span>Оплата и
                                                доставка
                                            </span> <span class="menuarrow"> </span> </a>

                                    </li>
                                    <li class="dropdown-list"> <a href="{{ route('contacts') }}"> <span>Контакты </span>
                                            <span class="menuarrow">
                                            </span> </a>

                                    </li>

                                </ul>
                            </nav>
                            <div class="right d-flex align-items-center justify-content-end">
                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                    <li> <a href="{{ route('cart') }}" class="number cart-icon"> <i
                                                class="flaticon-shopping-cart"></i><span class="count">(0)</span>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="overflow-hidden">

        @yield('content')
        
    </main>


    <!--  Footer Three start -->


    <footer class="footer-default footer-style-1">
        <!--Start Footer-->
        <div class="footer-default__main-footer position-relative">
            <div class="container">
                <div class="row d-flex justify-content-between">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Информация </h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ route('aboutUs') }}">О нас</a></li>
                                <li><a href="{{ route('catalog') }}"> Каталог</a></li>
                                <li><a href="{{ route('delivery') }}">Оплата и доставка </a></li>
                                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Мы находимся </h4>
                            </div>
                            <div class="footer-address-box ">
                                <div class="text1 pt-3">
                                    <p>Адрес производства: </p>
                                </div>
                                <div class="text2">
                                    <p>Республика Беларусь, <br> г. Минск, ул. Стебенева, 4.</p>
                                </div>
                                <div class="text3">
                                    <p>Юридический адрес: </p>
                                </div>
                                <div class="text4">
                                    <p>220075, Республика Беларусь, <br> г. Минск, ул. Селицкого, 260.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="company-info">
                                <div class="footer-logo"> <a href="index.html"> <img src="assets/images/logo/logo.svg"
                                            alt=""> </a> </div>
                                <div class="text1">
                                    <p>Вы также можете найти нас в соцсетях и следить за последними обновлениями нашего
                                        магазина</p>
                                </div>
                                <div class="newsletter-bottom d-flex align-items-center">
                                    <ul class="footer__medio-boxx  medio-boxx  two d-flex align-items-center">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                    class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Рассылка </h4>
                            </div>
                            <div class="footer-newsletter">

                                {{-- <br><p class="text">Вы подписаны </p> --}}

                                <p class="text">Введите свой email, чтобы раньше всех узнавать о новостях магазина </p>                                

                                <form action="dataInsert" class="footer-default__subscrib-form" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="footer-input-box"> 
                                        <input type="text" name="email" placeholder="Email">
                                    </div>                                    

                                    <button class="btn--primary mt-30" type="submit" style="background: #d0af12; float:right;"> Подписаться</button>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- footer-bottom Footer-->
        <div class="footer_bottom position-relative">
            <div class="container">
                <div class="footer_bottom_content">
                    <div class="copyright wow fadeInUp animated">
                        <p>Copyright © 2022-{{ now()->year }} <a href="{{ route('aboutUs') }}">SleepShop.</a> Все права защищены.</p>
                    </div>                    
                    <div class="footer-bottom-menu wow fadeInUp animated">
                        <ul class="d-flex align-items-center">
                            <li> <a href="https://www.google.com/intl/ru/policies/privacy/archive/20150819/" target="_blank">Privacy Policy</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--==== Js Scripts Start ====-->
    <!-- Jquery v3.6.0 Js -->
    <script src="assets/js/jqurey.v3.6.0.min.js"></script> <!-- Popper v2.9.3 Js -->
    <script src="assets/js/popper.v2.9.3.min.js"></script> <!-- Bootstrap v5.1.1 js -->
    <script src="assets/js/bootstrap.v5.1.1.min.js"></script> <!-- jquery ui js -->
    <script src="assets/js/plugin/jquery-ui.min.js"></script> <!-- Parallax js -->
    <script src="assets/js/plugin/jarallax.min.js"></script> <!-- Isotope js -->
    <script src="assets/js/plugin/isotope.js"></script> <!-- Slick Slider Js -->
    <script src="assets/js/plugin/slick.min.js"></script> <!-- magnific-popup v2.3.4 Js -->
    <script src="assets/js/plugin/jquery.magnific-popup.min.js"></script> <!-- Tweenmax v2.3.4 Js -->
    <script src="assets/js/plugin/tweenMax.min.js"></script> <!-- Nice Select Js -->
    <script src="assets/js/plugin/nice-select.v1.0.min.js"></script> <!-- Wow js -->
    <script src="assets/js/plugin/wow.v1.3.0.min.js"></script> <!-- Wow js -->
    <script src="assets/js/plugin/jquery.countdown.min.js"></script> <!-- Main js -->
    <script src="assets/js/main.js"></script>
    <!--==== Js Scripts End ====-->
</body>

</html>