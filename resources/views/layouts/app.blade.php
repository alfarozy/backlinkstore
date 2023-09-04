<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.4.0" />

    <!-- favicon -->
    {{-- <link rel="shortcut icon" href="/backlinkstore/assets/images/favicon.ico" /> --}}

    <!-- Css -->
    <link href="/backlinkstore/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/backlinkstore/assets/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="/backlinkstore/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/backlinkstore/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="/backlinkstore/assets/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css" />

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->



    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="/">
                {{-- <img src="/backlinkstore/assets/images/logo-dark.png" height="24" class="logo-light-mode"
                    alt="">
                <img src="/backlinkstore/assets/images/logo-light.png" height="24" class="logo-dark-mode"
                    alt=""> --}}
                Backlinkgratisan
            </a>
            <!-- Logo End -->

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item ps-1 mb-0">
                    <a href="https://dashboard.backlinkgratisan.com/login" target="_blank">
                        <div class="btn  btn-primary">Login <i data-feather="log-in" class="fea icon-sm"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="sub-menu-item">
                        <a href="#price">PAKET HARGA </a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="">JUAL BACKLINK</a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="">BERLANGGANAN </a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="">BLOG</a></span>
                    </li>
                    {{-- <li class="sub-menu-item">
                        <a href="">HUBUNGI KAMI</a></span>
                    </li> --}}

                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    @yield('content')
    <!-- Footer Start -->
    <!-- Footer Start -->
    <footer class="footer footer-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    Backlinkgratisan.com
                                </a>
                                <p class="mt-4">Merupakan seubuah website yang menyediakan link website gratisan dari
                                    seluruh dunia, di kumpulkan kedalam 1 data base sehingga memudahkan para bolgger dan
                                    pelaku umkm untuk meningkatkan branding produk atau websitenya.</p>
                                <ul class="list-unstyled social-icon social mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Perusahaan</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Tentang kami</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Pertanyaan</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Hubungi kami</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Syarat dan Ketentuan</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Layanan</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Jasa Backlink Murah</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Berlangganan</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Jual Backlink</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Beli Backlink</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Metode pembayaran</h5>
                                <ul class="list-unstyled text-sm-center mb-0 mt-3">
                                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                                src="/backlinkstore/assets/images/payments/american-ex.png"
                                                class="avatar avatar-ex-sm" title="American Express"
                                                alt=""></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                                src="/backlinkstore/assets/images/payments/discover.png"
                                                class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                                src="/backlinkstore/assets/images/payments/master-card.png"
                                                class="avatar avatar-ex-sm" title="Master Card" alt=""></a>
                                    </li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                                src="/backlinkstore/assets/images/payments/paypal.png"
                                                class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                                src="/backlinkstore/assets/images/payments/visa.png"
                                                class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->


        <div class="footer-py-30 bg-footer text-white-50 border-top">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="text-sm-center">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Backlinkgratisan.com
                            </p>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->
    <!-- Footer End -->


    <!-- Cookies Start -->
    {{-- <div class="card cookie-popup shadow rounded py-3 px-4">
        <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it,
            you accept our <a href="https://shreethemes.in" target="_blank" class="text-success h6">use of
                cookies</a>
        </p>
        <div class="cookie-popup-actions text-end">
            <button><i class="uil uil-times text-dark fs-4"></i></button>
        </div>
    </div> --}}
    <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- Cookies End -->


    <!-- Switcher End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="/backlinkstore/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="/backlinkstore/assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <!-- Main Js -->
    <script src="/backlinkstore/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/backlinkstore/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/backlinkstore/assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
