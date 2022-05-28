@extends('frontend.layout.master')

@section('header')
<!--================Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img src="{{asset('frontend/assets/images/logo.png')}}"
                        srcset="{{asset('frontend/assets/images/logo-2x.png 2x')}}" width="200" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                              aria-expanded="false">Appointment</a>
                            <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                              <li><a href="{{route('appointment')}}">Covid Appointment</a></li>
                              <li><a href="{{route('blood')}}">Blood Donation</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('prevention')}}">Prevention</a></li>
                        <li><a href="{{route('prediction')}}">Prediction</a></li>
                        <li><a href="{{route('faq')}}">FAQS</a></li>
                        <li><a href="{{route('doctor')}}">Doctors</a></li>
                        <li class="dropdown submenu">
                            @if (Route::has('login'))
                            @auth
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Dashboard</a>
                                <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                    data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    @else
                                    <li><a href="{{route('login')}}">Login</a></li>

                                </ul>
                            @endauth
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Header Area =================-->
@endsection

@section('content')
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area boi_breadcrumb">
            <div class="container">
                <div class="breadcrumb_text">
                    <h6>Meet the Experts</h6>
                    <h3>Our Doctors</h3>
                    <ul class="nav justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="doctors.html">Our Doctors</a></li>
                    </ul>
                </div>
                <div class="doctors_bio row">
                    <div class="col-lg-6">
                        <div class="doctors_img text-right wow fadeInUp" data-wow-delay="400ms"><img
                                src="{{asset('frontend/assets/images/doctors/doctors-img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="doctors_bio_text text-left wow fadeInUp" data-wow-delay="400ms">
                            <h5>Founder and Owner</h5>
                            <h3>Dr Pamela Smith</h3>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                                quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus.</p>
                            <img src="{{asset('frontend/assets/images/doctors/signature.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================octors Area =================-->
        <section class="doctors_area" style="margin-bottom:50px">
            <div class="container">
                <div class="row doctors_inner">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="doctors_item">
                            <div class="doctors_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/doctors/doctors-1.png')}}" alt="">
                            </div>
                            <div class="doctors_text">
                                <h6>Rehabilitation therapist</h6>
                                <h3>Dr Taylor Hawk</h3>
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="doctors_item">
                            <div class="doctors_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/doctors/doctors-2.png')}}" alt="">
                            </div>
                            <div class="doctors_text">
                                <h6>Rehabilitation therapist</h6>
                                <h3>Dr Taylor Hawk</h3>
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="doctors_item">
                            <div class="doctors_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/doctors/doctors-3.png')}}" alt="">
                            </div>
                            <div class="doctors_text">
                                <h6>Rehabilitation therapist</h6>
                                <h3>Dr Taylor Hawk</h3>
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="doctors_item">
                            <div class="doctors_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/doctors/doctors-4.png')}}" alt="">
                            </div>
                            <div class="doctors_text">
                                <h6>Rehabilitation therapist</h6>
                                <h3>Dr Taylor Hawk</h3>
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Doctors Area =================-->
@endsection
