<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Delos</title>
    <!-- Page description -->
    <meta name="description"
        content="short-form video apps with live events, music enabled content and ecommerce capability">
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End of Meta -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/common/favicon/favicon.png')}}">
    <!-- End of Favicon -->
    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{asset('dist/style.css')}}">
    <!-- End of StyleSheets -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="js-preload-me ">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Preloader -->
    <div class="preloader js-preloader ">
        <span class="preloader__circle preloader__circle--primary"></span>
        <span class="preloader__circle preloader__circle--secondary"></span>
        <span class="preloader__circle preloader__circle--tertiary"></span>
    </div>
    <!-- End of Preloader -->
    <!-- Page -->
    <div class="page js-page ">
        <!-- Mobile Menu -->
        <div id="sidr">
            <div class="mobile-menu__close js-mobile-menu__close"></div>
            <ul class="mobile-menu js-mobile-menu ">
                <li class="mobile-menu__item ">
                    <a href="/" class="mobile-menu__link">Home</a>
                </li>
                <li class="mobile-menu__item ">
                    <a href="#products" class="mobile-menu__link js-scroll-to">Our Products</a>
                </li>
                <li class="mobile-menu__item ">
                    <a href="#insights" class="mobile-menu__link js-scroll-to">Insights</a>
                </li>
                <li class="mobile-menu__item ">
                    <a href="#delos" class="mobile-menu__link js-scroll-to">Delos Development</a>
                </li>
                <li class="mobile-menu__item ">
                    <a href="#board" class="mobile-menu__link js-scroll-to">Board of Advisors</a>
                </li>
                <li class="mobile-menu__item ">
                    <a href="#contacts" class="mobile-menu__link js-scroll-to">Contacts</a>
                </li>
                <li class="mobile-menu__item mobile-menu__item--button">
                    <a href="#download" class="mobile-menu__link js-scroll-to">Download</a>
                </li>
            </ul>
        </div>
        <!-- End of Mobile Menu -->
        <!-- Header -->
        <header class="header js-header {{ request()->is('/')?'':'faq-color'}} ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Logo -->
                        <div class="logo ">
                            <a href="/" class="logo__link">
                                <img src="assets/img/common/logo/logo.png" alt="Logo" class="logo__image js-logo__image"
                                    data-switch="true"> </a>
                        </div>
                        <!-- End of Logo -->
                    </div>
                    <div class="col-md-20 col-sm-20 col-xs-12">
                        <!-- Menu -->
                        <nav>
                            <ul class="menu menu--right js-menu sf-menu ">
                                <li class="menu__item ">
                                    <a href="/" class="menu__link">Home</a>
                                </li>
                                <li class="menu__item ">
                                    <a href="#products" class="menu__link js-scroll-to">Our Products</a>
                                </li>
                                <li class="menu__item ">
                                    <a href="#insights" class="menu__link js-scroll-to">Insights</a>
                                </li>
                                <li class="menu__item ">
                                    <a href="#delos" class="menu__link js-scroll-to">Delos Development</a>
                                </li>
                                <li class="menu__item ">
                                    <a href="#board" class="menu__link js-scroll-to">Board of Advisors</a>
                                </li>
                                <li class="menu__item ">
                                    <a href="#contacts" class="menu__link js-scroll-to">Contacts</a>
                                </li>
                                <li class="menu__item menu__item--button">
                                    <a href="#download" class="menu__link js-scroll-to">Download</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End of Menu -->
                        <!-- Menu Trigger -->
                        <a class="menu-trigger js-menu-trigger " href='sidr'> </a>
                        <!-- End of Menu Trigger -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->
        <!-- Hero -->
        @yield('content')
        <!-- Footer -->
        <footer class="footer center">
            <a href="#" class="footer__scroll-top js-scroll-top">
                <i class="fontello-level-up footer__scroll-icon"></i>
            </a>
            <div class="container">
                <div class="row center">
                    <div class="col-md-6 col-sm-24">
                        <!-- Logo -->
                        <div class="logo ">
                            <a href="/" class="logo__link">
                                <img src="assets/img/common/logo/logo.png" alt="Logo" class="logo__image">
                            </a>
                        </div>
                        <!-- End of Logo -->
                    </div>
                    <div class="col-md-6 col-sm-24">
                        <!-- Link List -->
                        <a href="/faq" class="link-list__link">FAQ</a>
                        <!-- End of Link List -->
                    </div>
                    <div class="col-md-6 col-sm-24">
                        <!-- Link List -->
                        <a href="/privacy" class="link-list__link">Privacy Policy</a>
                        <!-- End of Link List -->
                    </div>
                    <div class="col-md-6 col-sm-24">
                        <!-- Link List -->
                        <a href="/terms" class="link-list__link">Terms of Service</a>
                        <!-- End of Link List -->
                    </div>
                </div>
            </div>
            <!-- Push -->
            <div class="push push--80  "> </div>
            <!-- End of Push -->
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page -->
    <!-- Scripts -->
    <script src="dist/script.js"></script>
    <!-- End of Scripts -->
</body>

</html>