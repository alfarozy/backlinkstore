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
                    <li><a href="/" class="sub-menu-item">Beranda</a></li>

                    <li class="sub-menu-item">
                        <a href="">Blog</a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="#price">Paket harga</a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="">Tentang </a></span>
                    </li>
                    <li class="sub-menu-item">
                        <a href="">Hubungi kami</a></span>
                    </li>

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
                                    <img src="/backlinkstore/assets/images/logo-dark.png" height="24" alt="">
                                </a>
                                <p class="mt-4">Start working with Landrick that can provide everything you need to
                                    generate awareness, drive traffic, connect.</p>
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
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Components</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe foot-white mb-3">
                                                <label class="form-label">Write your email <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe"
                                                        class="form-control border ps-5 rounded"
                                                        placeholder="Your email : " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send"
                                                    class="btn btn-primary" value="Subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->


        <div class="footer-py-30 bg-footer text-white-50 border-top">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Landrick. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="/backlinkstore/assets/images/payments/american-ex.png"
                                        class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="/backlinkstore/assets/images/payments/discover.png"
                                        class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="/backlinkstore/assets/images/payments/master-card.png"
                                        class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="/backlinkstore/assets/images/payments/paypal.png"
                                        class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="/backlinkstore/assets/images/payments/visa.png"
                                        class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->
    <!-- Footer End -->


    <!-- Cookies Start -->
    <div class="card cookie-popup shadow rounded py-3 px-4">
        <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it,
            you accept our <a href="https://shreethemes.in" target="_blank" class="text-success h6">use of
                cookies</a>
        </p>
        <div class="cookie-popup-actions text-end">
            <button><i class="uil uil-times text-dark fs-4"></i></button>
        </div>
    </div>
    <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- Cookies End -->


    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="/backlinkstore/assets/images/logo-dark.png" height="24" class="light-version"
                    alt="">
                <img src="/backlinkstore/assets/images/logo-light.png" height="24" class="dark-version"
                    alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="/backlinkstore/assets/images/contact.svg" class="img-fluid d-block mx-auto"
                        alt="">
                    <div class="card border-0 mt-4" style="z-index: 1">
                        <div class="card-body p-0">
                            <h4 class="card-title text-center">Login</h4>
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email"
                                                    name="email" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5"
                                                    placeholder="Password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="forgot-pass mb-0"><a href="auth-cover-re-password.html"
                                                    class="text-dark fw-bold">Forgot password ?</a></p>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account
                                                ?</small> <a href="auth-cover-signup.html"
                                                class="text-dark fw-bold">Sign Up</a></p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul><!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->

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
