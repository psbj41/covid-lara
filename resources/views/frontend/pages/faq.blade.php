@extends('frontend.layout.master')

@section('css')

@endsection

@section('header')
<!--================Header Area =================-->
<header class="header_area white_header">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('frontend/assets/images/logo.png')}}"
                        srcset="{{asset('frontend/assets/images/logo.png')}}" alt="" width="200" />
                    <img src="{{asset('frontend/assets/images/logo.png')}}"
                        srcset="{{asset('frontend/assets/images/logo.png')}}" alt="" width="200" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
<!--=============== Start braeadcrum Area =================-->
<section class="faq_breadcrumb_area">
    <img class="overlay_bg" src="{{asset('frontend/assets/images/about/worldmap2.png')}}" alt="" />
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h6>Frequently Asked Questions</h6>
            <h2>Find answers about Coronavirus</h2>
            <form action="#" class="faq_search">
                <div class="control-with-icon">
                    <input type="text" class="form-control" placeholder="Start typing your question..." required="" />
                    <span class="control-icon"><i class="linearicons-funnel"></i></span>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End braeadcrum Area =================-->
<!--================Start coronavirus question Area =================-->
<section class="coronavirus_question_area">
    <div class="container">
        <div class="main_title text-center">
            <h2>Top questions</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-first-aid"></i>
                    </div>
                    What are the symptoms?
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-eye-dropper"></i>
                    </div>
                    Should I get tested?
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-earth"></i>
                    </div>
                    How does it spread?
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-bag-dollar"></i>
                    </div>
                    Can I get financial help?
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-chart-growth"></i>
                    </div>
                    How do I reduce my risk?
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                <a href="#" class="corona_question">
                    <div class="icon">
                        <i class="linearicons-plane"></i>
                    </div>
                    Can I travel?
                </a>
            </div>
        </div>
    </div>
</section>
<section class="common_question_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="common_question_item">
                    <h3>How to protect yourself?</h3>
                    <ul class="list-unstyled question_list">
                        <li><a href="#">Am I at risk?</a></li>
                        <li>
                            <a href="#">Why do you need to wear cloth face coverings?</a>
                        </li>
                        <li><a href="#">How can I manage anxiety and stress?</a></li>
                    </ul>
                    <a class="text_btn" href="#">View all questions about
                        <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="common_question_item">
                    <h3>What to do if you feel sick?</h3>
                    <ul class="list-unstyled question_list">
                        <li><a href="#">What are the symptoms of COVID-19?</a></li>
                        <li><a href="#">Should I get tested?</a></li>
                        <li>
                            <a href="#">What should I do if someone in my house gets sick?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all questions about
                        <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End coronavirus question Area =================-->
<!--================Start More question Area =================-->
<section class="more_question_area">
    <div class="container">
        <div class="row more_question_inner">
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>Symptoms and testing</h3>
                    <ul class="list-unstyled question_list">
                        <li><a href="#">Should I be tested for COVID-19?</a></li>
                        <li>
                            <a href="#">What are the symptoms and complications that COVID-19 can
                                cause?</a>
                        </li>
                        <li>
                            <a href="#">Where can I get tested for COVID-19?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>Traveling</h3>
                    <ul class="list-unstyled question_list">
                        <li>
                            <a href="#">Should I cancel my international trip?</a>
                        </li>
                        <li>
                            <a href="#">What happens if there is a sick passenger on my
                                flight?</a>
                        </li>
                        <li>
                            <a href="#">What if I recently traveled and get sick?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>How it spreads</h3>
                    <ul class="list-unstyled question_list">
                        <li><a href="#">How does the virus spread?</a></li>
                        <li>
                            <a href="#">What is community spread?</a>
                        </li>
                        <li>
                            <a href="#">What is the source of the virus?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>Keeping your home safe</h3>
                    <ul class="list-unstyled question_list">
                        <li>
                            <a href="#">What steps can my family take to reduce our risk of
                                getting COVID-19?</a>
                        </li>
                        <li>
                            <a href="#">How can my family and I prepare for COVID-19?</a>
                        </li>
                        <li>
                            <a href="#">Should I use soap and water or a hand sanitizer to
                                protect against COVID-19?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>Financial help for workers and families</h3>
                    <ul class="list-unstyled question_list">
                        <li>
                            <a href="#">Who is eligible for the economic impact payment?</a>
                        </li>
                        <li>
                            <a href="#">Is the government delaying Tax Day?</a>
                        </li>
                        <li>
                            <a href="#">How can I file the tax return needed to receive my
                                economic impact payment?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="more_question_item">
                    <h3>Parents and children</h3>
                    <ul class="list-unstyled question_list">
                        <li>
                            <a href="#">Are children more at-risk?</a>
                        </li>
                        <li>
                            <a href="#">How should parents talk to children about COVID-19?</a>
                        </li>
                        <li>
                            <a href="#">Are the symptoms of COVID-19 different in children than
                                in adults?</a>
                        </li>
                    </ul>
                    <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="border_bottom"></div>
    </div>
</section>
<!--================End More question Area =================-->

<!--================Answers Area =================-->
<section class="faq_area">
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                                                aria-controls="four" aria-selected="false">How is the virus spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab"
                                                aria-controls="five" aria-selected="false">What are the symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four2-tab" data-toggle="tab" href="#four2"
                                                role="tab" aria-controls="four2" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five2-tab" data-toggle="tab" href="#five2"
                                                role="tab" aria-controls="five2" aria-selected="false">What are the
                                                symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four3-tab" data-toggle="tab" href="#four3"
                                                role="tab" aria-controls="four3" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five3-tab" data-toggle="tab" href="#five3"
                                                role="tab" aria-controls="five3" aria-selected="false">What are the
                                                symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four4-tab" data-toggle="tab" href="#four4"
                                                role="tab" aria-controls="four4" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five4-tab" data-toggle="tab" href="#five4"
                                                role="tab" aria-controls="five4" aria-selected="false">What are the
                                                symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four5-tab" data-toggle="tab" href="#four5"
                                                role="tab" aria-controls="four5" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five5-tab" data-toggle="tab" href="#five5"
                                                role="tab" aria-controls="five5" aria-selected="false">What are the
                                                symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four6-tab" data-toggle="tab" href="#four6"
                                                role="tab" aria-controls="four6" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five6-tab" data-toggle="tab" href="#five6"
                                                role="tab" aria-controls="five6" aria-selected="false">What are the
                                                symptoms?</a>
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
                                                difference between COVID-19 and
                                                the
                                                flu?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four7-tab" data-toggle="tab" href="#four7"
                                                role="tab" aria-controls="four7" aria-selected="false">How is the virus
                                                spread?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five7-tab" data-toggle="tab" href="#five7"
                                                role="tab" aria-controls="five7" aria-selected="false">What are the
                                                symptoms?</a>
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

@section('scripts')

@endsection
