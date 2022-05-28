<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/png" />
    <title>COVID - 19</title>
    <!-- Bootstrap CSS -->

    @yield('css')
    @include('frontend.layout.css')

</head>

<body data-scroll-animation="true">
    <div class="body_wrapper">

        <!--================Preloader Area =================-->
        <div class="preloader">
            <div class="three-bounce">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
        </div>
        <!--================End Preloader Area =================-->

        <!--================Mobile Canvus Menu Area =================-->
        <div class="mobile_canvus_menu">
            <div class="close_btn">
                <img src="{{asset('frontend/assets/images/icon/close-dark.png')}}" alt="">
            </div>
            <div class="menu_part_lux">
                <ul class="menu_list wd_scroll">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="index.html">Prevention
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="symptom.html">Typical Symptoms</a></li>
                            <li><a href="symptom-checker.html">Symptom Checker</a></li>
                            <li><a href="prevention.html">Prevention</a></li>
                            <li><a href="virus-checker.html">Coronavirus Checker</a></li>
                            <li><a href="tracker.html">Tracker</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                        </ul>
                    </li>
                    <li><a href="appointment.html">Appointment</a></li>
                    <li>
                        <a href="#">Pages
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="about.html">About</a></li>
                            <li><a href="doctors.html">Doctors</a></li>
                            <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                            <li><a href="typography.html">Typhography</a></li>
                            <li><a href="search.html">Search</a></li>
                            <li><a href="search-nothing.html">Not Found</a></li>
                            <li><a href="comingsoon.html">Coming Soon</a></li>
                            <li><a href="404.html">Error</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html">Blog
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single-blog.html">Blog Details</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="menu_btm">
                <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
            </div>
        </div>
        <!--================End Mobile Canvus Menu Area =================-->

        @yield('header')

        @yield('content')

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_copyright">
                <div class="container">
                    <img src="assets/images/f-logo.png" alt="">
                    <p>© Copyright
                        <script>
                            document.write(new Date().getFullYear());

                        </script> Sandip Foundation.</p>
                    <ul class="nav">
                        <li><a href="#">Appointment</a></li>
                        <li><a href="#">Blood Donation</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{asset('frontend/assets/images/icon/close-white.png')}}" alt="">
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type here..."
                            aria-label="Recipient's username" aria-describedby="button-addon3">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon3"><i
                                    class="linearicons-magnifier"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layout.scripts')
    @yield('scripts')
</body>

</html>
