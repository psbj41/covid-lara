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
<section class="breadcrumb_area">
    <div class="container">
        <div class="breadcrumb_text">
            <h6 class="wow fadeInUp">Contact us</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Get in Touch</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Breadcrumb Area =================-->

<!--================Contact Area =================-->
<section class="contact_area">
    <div class="container">
        <div class="contact_form_inner">
            <form class="row contact_us_form appoinment_form js-form">
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                        <label class="top_text"><i class="linearicons-user"></i>Your Name</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="email" name="email" placeholder=""
                            required />
                        <label class="top_text"><i class="linearicons-envelope-open"></i>Your Email
                            Address</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="number" name="number" placeholder=""
                            required />
                        <label class="top_text"><i class="linearicons-telephone"></i>Your Phone
                            Number</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                            required></textarea>
                        <label class="top_text"><i class="linearicons-pencil4"></i>Your Message</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group checkbox_field">
                        <div class="checkbox">
                            <input type="checkbox" value="None" id="policy" name="check" />
                            <label class="l_text" for="policy">I accept the <span>Privacy Policy</span> and
                                the
                                <span>Term of Use.</span></label>
                        </div>
                        <button type="submit" value="submit" class="green_btn">
                            Send Message
                        </button>
                    </div>
                </div>
                <div class="success-message">
                    <i class="fa fa-check text-primary"></i> Thank you!. Your message
                    is successfully sent...
                </div>
                <div class="error-message">We're sorry, but something went wrong</div>
            </form>
        </div>
    </div>
</section>
<!--================End Contact Area =================-->

@endsection
