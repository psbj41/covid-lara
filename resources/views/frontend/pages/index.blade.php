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
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="container">
        <div class="row home_banner_inner">
            <div class="col-sm-7">
                <h5 class="wow fadeInUp" data-wow-delay="300ms">Stop COVID-19</h5>
                <h3 class="wow fadeInUp" data-wow-delay="500ms">How can we fight together against Coronavirus?
                </h3>
                <p class="wow fadeInUp" data-wow-delay="400ms">
                    It’s never been clearer that we’re all global citizens,
                    <br />and we all have a part to play. The novel strain of<br />
                    coronavirus, has officially reached pandemic proportions.
                </p>
                <div class="row home_option">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="300ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-shield-check"></i>
                            </div>
                            <div class="media-body">
                                <h4>Protection</h4>
                                <p>How to protect yourself</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-pulse"></i>
                            </div>
                            <div class="media-body">
                                <h4>Symptoms</h4>
                                <p>Check basic symptoms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="500ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-bubbles"></i>
                            </div>
                            <div class="media-body">
                                <h4>Appointment</h4>
                                <p>Get online consultation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="600ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-document2"></i>
                            </div>
                            <div class="media-body">
                                <h4>About COVID-19</h4>
                                <p>Read more about coronavirus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <img class="img-fluid wow fadeInRight" data-wow-delay="400ms"
                    src="{{asset('frontend/assets/images/svg/home-banner-cleaner.svg')}}" alt="" />
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Home About Area =================-->
<section class="home_about_corona">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home_ab_img wow fadeInUp" data-wow-delay="400ms">
                    <img src="{{asset('frontend/assets/images/home-ab-img.jpg')}}" alt="" width="560"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_ab_text">
                    <div class="home_ab_text_inner">
                        <div class="home_ab_item">
                            <h6>COVID-19 the disease</h6>
                            <h4>About the Coronavirus</h4>
                            <p>
                                Coronavirus disease 2019 (COVID-19) is an infectious
                                disease caused by severe acute respiratory syndrome
                                coronavirus 2. The disease was first identified in 2019 in
                                Wuhan, the capital of Hubei, China, and has since spread
                                globally, resulting in the 2019–2020 coronavirus pandemic.
                            </p>
                        </div>
                        <div class="home_ab_item">
                            <h4>What is the COVID-19?</h4>
                            <p>
                                COVID-19 is a new strain of coronavirus that has not been
                                previously identified in humans. It was first identified
                                in Wuhan, Hubei Province, China, where it has caused a
                                large and ongoing outbreak. It has since spread more
                                widely in China.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home About Area =================-->

<!--================Symptoms Area =================-->
<section class="symptoms_area" style="margin-top:100px">
    <div class="container">
        <ul class="nav image_list">
            <li><img src="{{asset('frontend/assets/images/symptoms-user/sm-1.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/images/symptoms-user/sm-2.png')}}" alt=""></li>
            <li><img src="{{asset('frontend/assets/images/symptoms-user/sm-3.png')}}" alt=""></li>
        </ul>
        <div class="title_text wow fadeInUp" data-wow-delay="400ms">
            <h5>Symptoms of COVID-19</h5>
            <h2>What are the basic symptoms?</h2>
        </div>
        <div class="row symptoms_inner">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{asset('frontend/assets/images/symptoms-user/symptoms-1.png')}}" alt="" />
                        </div>
                        <div class="media-body">
                            <h4>High fever</h4>
                            <p>
                                Fever is a key symptom, experts say. Don't fixate on a
                                number, but know it's not a fever until temperature
                                reaches at least 39°C.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{asset('frontend/assets/images/symptoms-user/symptoms-2.png')}}" alt="" />
                        </div>
                        <div class="media-body">
                            <h4>Sortness of Breath</h4>
                            <p>
                                You feel hot to touch on your chest or back It is a common
                                sign and also may appear in 2-10 days if you affected.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{asset('frontend/assets/images/symptoms-user/symptoms-3.png')}}" alt="" />
                        </div>
                        <div class="media-body">
                            <h4>Dry Cough</h4>
                            <p>
                                Coughing is another key symptom, but it's not just any
                                cough, said Schaffner. It should be a dry cough that you
                                feel in your chest.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="700ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{asset('frontend/assets/images/symptoms-user/symptoms-4.png')}}" alt="" />
                        </div>
                        <div class="media-body">
                            <h4>Headache</h4>
                            <p>
                                Around 1 out of every 6 people who gets COVID-19 becomes
                                seriously ill and develops difficulty breathing or
                                shortness of breath.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Symptoms Area =================-->

<!--================Protect Yourself Area =================-->
<section class="protect_yourself_area p_100">
    <div class="container">
        <div class="main_title text-center">
            <h5>What you need to do</h5>
            <h2>How to protect yourself?</h2>
        </div>
        <div class="row protect_inner">
            <div class="col-lg-6">
                <div class="row protect_list_inner">
                    <div class="col-6">
                        <div class="protect_list_item">
                            <div class="protect_list_title">
                                <h3>You should do</h3>
                                <h6>Be sure to follow it</h6>
                            </div>
                            <ul class="nav flex-column">
                                <li>
                                    <a href="#"><i class="linearicons-home4"></i>Stay at home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-desk-tape"></i>Wear mask</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-tissue"></i>Always use
                                        tissues</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-couch"></i>Disinfect your
                                        home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-rain"></i>Wash your hands</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-thermometer"></i>Frequent
                                        self-isolation</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-bottle"></i>Frequent
                                        waterintake</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="protect_list_item red">
                            <div class="protect_list_title">
                                <h3>You should avoid</h3>
                                <h6>Be sure to follow it</h6>
                            </div>
                            <ul class="nav flex-column">
                                <li>
                                    <a href="#"><i class="linearicons-man-woman"></i>Social
                                        distance</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-paw"></i>Avoid animals</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-woman"></i>Don't touch your
                                        face</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-hand"></i>Avoid handshaking</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-chair"></i>Avoid infected
                                        surfaces</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-drop-crossed"></i>Avoid
                                        droplets</a>
                                </li>
                                <li>
                                    <a href="#"><i class="linearicons-plane-crossed"></i>Don’t
                                        travel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="protect_self_text">
                    <h3>What does self-isolation involve?</h3>
                    <p>
                        If you need to self-isolate, you should take action
                        immediately. You must stay inside and avoid all contact with
                        other people.
                    </p>
                    <a class="text_btn" href="#">How else can you protect yourself?
                        <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="protect_img text-center apps_craft_animation">
                    <img class="img-fluid wow fadeIn" data-wow-delay="500ms"
                        src="{{asset('frontend/assets/images/protect-img.png')}}" alt=""  width="500"/>
                    <ul class="nav">
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-1.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-2.png')}}" alt=""></li>
                        <li><img class="layer layer2" data-depth="0.5"
                                src="{{asset('frontend/assets/images/icon/project-virus-3.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-4.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-5.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-6.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-7.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-8.png')}}" alt=""></li>
                        <li><img class="layer layer2" data-depth="0.5"
                                src="{{asset('frontend/assets/images/icon/project-virus-9.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/icon/project-virus-10.png')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Protect Yourself Area =================-->

<!--================Washing Process Area =================-->
<section class="washing_process_area pad_btm">
    <div class="container">
        <div class="main_title text-center white">
            <h5>Hand washing process</h5>
            <h2>How to wash your Hands</h2>
        </div>
        <div class="washing_process_inner row">
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="400ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-1.png')}}" alt="" />
                        <div class="number">
                            1
                        </div>
                    </div>
                    <p><span>Apply soap</span> and ruv your hands together</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="500ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-2.png')}}" alt="" />
                        <div class="number">
                            2
                        </div>
                    </div>
                    <p>
                        <span>Use one hand</span> to rub the back of the other hand
                        and vice versa
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="600ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-3.png')}}" alt="" />
                        <div class="number">
                            3
                        </div>
                    </div>
                    <p>
                        <span>Rub your hands</span> together and clean between your
                        fingers
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="700ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-4.png')}}" alt="" />
                        <div class="number">
                            4
                        </div>
                    </div>
                    <p>
                        <span>Rub the back</span> of your fingers against your palms
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="800ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-5.png')}}" alt="" />
                        <div class="number">
                            5
                        </div>
                    </div>
                    <p>
                        <span>Rub your thumb</span> using your other hand and vice
                        versa
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="900ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icon/washing-6.png')}}" alt="" />
                        <div class="number">
                            6
                        </div>
                    </div>
                    <p>
                        <span>Rub your tips</span> of your fingers on the palm of your
                        other hand and vice versa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Washing Process Area =================-->

<!--================Prevent Area =================-->
<section class="prevent_area">
    <div class="container">
        <div class="row prevent_inner">
            <div class="col-lg-6">
                <div class="prevent_item_inner row">
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/prevent/prevent-1.png')}}"
                                    alt="" />
                            </div>
                            <div class="prevent_text">
                                <h4>Stay at home</h4>
                                <p>
                                    Stay at home if you perceive the symptoms and consult
                                    your doctor on phone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/prevent/prevent-2.png')}}"
                                    alt="" />
                            </div>
                            <div class="prevent_text">
                                <h4>Wash your hands often</h4>
                                <p>
                                    Clean your hands with alcohol-based rub or wash them
                                    with soap for at least 20 seconds.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/prevent/prevent-3.png')}}"
                                    alt="" />
                            </div>
                            <div class="prevent_text">
                                <h4>Keep social distance</h4>
                                <p>
                                    Keep at least 2 m distance between yourself & anyone if
                                    you go among people.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="{{asset('frontend/assets/images/prevent/prevent-4.png')}}"
                                    alt="" />
                            </div>
                            <div class="prevent_text">
                                <h4>Wear Facemask</h4>
                                <p>
                                    When you are around other people and before you enter a
                                    healthcare provider’s.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="prevent_details">
                    <div class="prevent_details_text">
                        <h5>What should you do</h5>
                        <h2>How to prevent Coronavirus?</h2>
                        <p>
                            Some details about how the disease is spread are unknown and
                            is being determined.The WHO and CDC state that it is
                            primarily spread during close contact and by respiratory
                            droplets produced when people cough or sneeze; with close
                            contact being within 1 to 2 meters (3 to 6 feet). A study in
                            Singapore found that an uncovered coughing can lead to
                            droplets travelling up to 4.5 metres (15 feet).
                        </p>
                        <p>
                            Respiratory droplets may also be produced during breathing
                            out, including when talking, though the virus is not
                            generally airborne. These droplets can land in the mouths or
                            noses of people who are nearby or possibly be inhaled into
                            the lungs. Some medical procedures such as intubation and
                            cardiopulmonary...
                        </p>
                        <a class="green_btn" href="#"><i class="linearicons-shield-check"></i> Read more about
                            Prevention</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Prevent Area =================-->

<!--================Answers Area =================-->
<section class="answers_area p_100">
    <div class="container">
        <div class="main_title">
            <h5>Have questions? Find answers!</h5>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row answer_inner">
            <div class="col-lg-4">
                <div class="question_list">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pandemic
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                role="tab" aria-controls="home" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                                role="tab" aria-controls="contact" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                                                aria-controls="four" aria-selected="false">How is the
                                                virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab"
                                                aria-controls="five" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    About COVID-19
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2"
                                                role="tab" aria-controls="home2" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2"
                                                role="tab" aria-controls="profile2" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2"
                                                role="tab" aria-controls="contact2" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four2-tab" data-toggle="tab" href="#four2"
                                                role="tab" aria-controls="four2" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five2-tab" data-toggle="tab" href="#five2"
                                                role="tab" aria-controls="five2" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Protecting against COVID-19
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3"
                                                role="tab" aria-controls="home3" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile3"
                                                role="tab" aria-controls="profile3" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact3-tab" data-toggle="tab" href="#contact3"
                                                role="tab" aria-controls="contact3" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four3-tab" data-toggle="tab" href="#four3"
                                                role="tab" aria-controls="four3" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five3-tab" data-toggle="tab" href="#five3"
                                                role="tab" aria-controls="five3" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Work and travel arrangements
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home4-tab" data-toggle="tab" href="#home4"
                                                role="tab" aria-controls="home4" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile4-tab" data-toggle="tab" href="#profile4"
                                                role="tab" aria-controls="profile4" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact4-tab" data-toggle="tab" href="#contact4"
                                                role="tab" aria-controls="contact4" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four4-tab" data-toggle="tab" href="#four4"
                                                role="tab" aria-controls="four4" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five4-tab" data-toggle="tab" href="#five4"
                                                role="tab" aria-controls="five4" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    About university and school
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home5-tab" data-toggle="tab" href="#home5"
                                                role="tab" aria-controls="home5" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5"
                                                role="tab" aria-controls="profile5" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact5-tab" data-toggle="tab" href="#contact5"
                                                role="tab" aria-controls="contact5" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four5-tab" data-toggle="tab" href="#four5"
                                                role="tab" aria-controls="four5" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five5-tab" data-toggle="tab" href="#five5"
                                                role="tab" aria-controls="five5" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Home isolation
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home6-tab" data-toggle="tab" href="#home6"
                                                role="tab" aria-controls="home6" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile6-tab" data-toggle="tab" href="#profile6"
                                                role="tab" aria-controls="profile6" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact6-tab" data-toggle="tab" href="#contact6"
                                                role="tab" aria-controls="contact6" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four6-tab" data-toggle="tab" href="#four6"
                                                role="tab" aria-controls="four6" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five6-tab" data-toggle="tab" href="#five6"
                                                role="tab" aria-controls="five6" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingseven">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    Social distancing
                                    <i class="linearicons-chevron-down"></i>
                                </button>
                            </div>
                            <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab7" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home7-tab" data-toggle="tab" href="#home7"
                                                role="tab" aria-controls="home7" aria-selected="true">What are
                                                coronaviruses?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile7-tab" data-toggle="tab" href="#profile7"
                                                role="tab" aria-controls="profile7" aria-selected="false">What is the
                                                COVID-19 virus?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact7-tab" data-toggle="tab" href="#contact7"
                                                role="tab" aria-controls="contact7" aria-selected="false">What is the
                                                difference between COVID-19
                                                and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four7-tab" data-toggle="tab" href="#four7"
                                                role="tab" aria-controls="four7" aria-selected="false">How is
                                                the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five7-tab" data-toggle="tab" href="#five7"
                                                role="tab" aria-controls="five7" aria-selected="false">What are
                                                the symptoms?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content answer_details" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4>What are coronaviruses?</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h4>What is the COVID-19 virus?</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h4>What is the difference between COVID-19 and the flu?</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <h4>How is the virus spread?</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="five-tab">
                        <h4>What are the symptoms?</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four2" role="tabpanel" aria-labelledby="four2-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five2" role="tabpanel" aria-labelledby="five2-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four3" role="tabpanel" aria-labelledby="four3-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five3" role="tabpanel" aria-labelledby="five3-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile4-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact4-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four4" role="tabpanel" aria-labelledby="four4-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five4" role="tabpanel" aria-labelledby="five4-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile5-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact5-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four5" role="tabpanel" aria-labelledby="four5-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five5" role="tabpanel" aria-labelledby="five5-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile6-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact6" role="tabpanel" aria-labelledby="contact6-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four6" role="tabpanel" aria-labelledby="four6-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five6" role="tabpanel" aria-labelledby="five6-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="home7" role="tabpanel" aria-labelledby="home7-tab">
                        <h4>What are coronaviruses? 1</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="profile7-tab">
                        <h4>What is the COVID-19 virus? 2</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="contact7" role="tabpanel" aria-labelledby="contact7-tab">
                        <h4>
                            What is the difference between COVID-19 and the flu? 3
                        </h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="four7" role="tabpanel" aria-labelledby="four7-tab">
                        <h4>How is the virus spread? 4</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="five7" role="tabpanel" aria-labelledby="five7-tab">
                        <h4>What are the symptoms? 5</h4>
                        <p>
                            The first symptoms of COVID-19 and influenza (flu)
                            infections are often very similar. They both cause fever and
                            similar respiratory symptoms, which can then range from mild
                            through to severe disease, and sometimes can be fatal.
                        </p>
                        <p>
                            Both viruses are also transmitted in the same way, by
                            coughing or sneezing, or by contact with hands, surfaces or
                            objects contaminated with the virus. As a result, the same
                            public health measures, such as hand hygiene (hand washing),
                            good respiratory etiquette (coughing into your elbow or into
                            a tissue and immediately disposing of the tissue) and good
                            household cleaning are important actions to prevent both
                            infections.
                        </p>
                        <p>
                            The speed of transmission is an important difference between
                            the two viruses. Influenza typically has a shorter
                            incubation period (the time from infection to appearance of
                            symptoms) than COVID-19. This means that influenza can
                            spread faster than COVID-19.
                        </p>
                        <p>
                            While the range of symptoms for the two viruses is similar,
                            the fraction with severe disease appears to be higher for
                            COVID-19. While most people have mild symptoms,
                            approximately 15% of people have severe infections and 5%
                            require intensive care in a hospital ICU. The proportions of
                            severe and critical COVID-19 infections are higher than for
                            influenza infections.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Answers Area =================-->

@endsection
