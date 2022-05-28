@extends('frontend.layout.master')

@section('css')
<link rel="stylesheet" href="{{asset('frontend/assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.css')}}" />
@endsection

@section('header')
<!--================Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img src="{{asset('frontend/assets/images/logo.png')}}"
                        srcset="{{asset('frontend/assets/images/logo-2x.png 2x')}}" width="200" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Appointment</a>
                            <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                data-toggle="dropdown"></i>
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
            <h6 class="wow fadeInUp">Consult our experts doctors</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Online Consultation</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.html">Home</a></li>
                <li><a href="doctors.html">Appointment</a></li>
            </ul>
        </div>
        <div class="row appointment_box">
            <div class="col-lg-4 appoinment_features">
                <div class="shape one" data-parallax='{"y": 100}'>
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img1.png')}}" alt="" />
                </div>
                <div class="shape two">
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img2.png')}}" alt="" />
                </div>
                <div class="shape three">
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img3.png')}}" alt="" />
                </div>
                <div class="shape four" data-parallax='{"x": 30}'>
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img4.png')}}" alt="" />
                </div>
                <div class="shape five">
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img5.png')}}" alt="" />
                </div>
                <div class="shape six" data-parallax='{"y": 50}'>
                    <img src="{{ asset('frontend/assets/images/appoinment/a_img6.png')}}" alt="" />
                </div>
                <h2>Make an appointment</h2>
                <p>
                    Fill out the form to request an online appointment and our staff
                    will contact you immediately.
                </p>
                <div class="media appoinment_features_item">
                    <i class="linearicons-medal-empty"></i>
                    <div class="media-body">
                        <h6>Reputable experts</h6>
                        <p>Our doctors are world famous</p>
                    </div>
                </div>
                <div class="media appoinment_features_item">
                    <i class="linearicons-clipboard-check"></i>
                    <div class="media-body">
                        <h6>Smart advice</h6>
                        <p>We’ll give you useful tips</p>
                    </div>
                </div>
                <div class="media appoinment_features_item">
                    <i class="linearicons-tags"></i>
                    <div class="media-body">
                        <h6>100% FREE</h6>
                        <p>Don’ worry about the cost</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="{{route('app.store')}}" method="POST" class="appoinment_form">
                    @csrf
                    @if (session('success'))
                    <div>
                        <h2>{{session('success')}}</h2>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_name" name="name" placeholder="" />
                                <label><i class="linearicons-user"></i>Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="email" placeholder="" />
                                <label><i class="linearicons-envelope-open"></i>Your Email
                                    Address</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="phone" placeholder="" />
                                <label><i class="linearicons-telephone"></i>Your Phone
                                    Number</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control datetimepicker-input" name="dt" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="subject" name="subject" placeholder="" />
                                <label><i class="linearicons-document"></i>Type Topic</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" id="a_message" cols="30" rows="10"
                                    class="form-control"></textarea>
                                <label><i class="linearicons-pencil4"></i>Your Message</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <button type="submit" class="green_btn" value="appoinment" data-value="appoinment">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================End Breadcrumb Area =================-->

<!--================Starrt Work Area =================-->
<section class="work_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="work_content">
                    <div class="main_title">
                        <h5>It’s so simple</h5>
                        <h2>How it works?</h2>
                    </div>
                    <ol class="work_list">
                        <li class="wow fadeInUp" data-wow-delay="0.1s">Enter your contact details so we can add you on
                            backend
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.2s">Select date and time, when we can call you</li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s">Add your subject, that we will talk about on
                            consulting
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.5s">Describe briefly how we can help you</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img data-wow-delay="400ms" class="img-fluid wow fadeInRight" src="assets/images/appoinment/works.png"
                    alt="">
            </div>
        </div>
    </div>
</section>
<!--================End work Area =================-->

@endsection


@section('scripts')
<script src="{{asset('frontend/assets/vendors/datetimepicker/moment.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.js')}}"></script>
@endsection
