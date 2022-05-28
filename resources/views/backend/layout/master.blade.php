<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @yield('css')
    @include('backend.layout.css')

</head>

<body>

    <div id="body" class="theme-green">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="mt-3"><img src="assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <div id="wrapper">

            <!-- Page top navbar -->
            @include('backend.layout.header')
            <!-- Main left sidebar menu -->
            @include('backend.layout.sidebar')
            <!-- Right bar chat  -->
            <div id="rightbar" class="rightbar">
                <div class="slim_scroll">
                    <div class="chat_list">
                        <form>
                            <div class="input-group c_input_group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        <div class="body">
                            <ul class="nav nav-tabs3 white mt-3 d-flex text-center">
                                <li class="nav-item flex-fill"><a class="nav-link active show" data-toggle="tab"
                                        href="#chat-Users">Chat</a></li>
                                <li class="nav-item flex-fill"><a class="nav-link" data-toggle="tab"
                                        href="#chat-Groups">Groups</a></li>
                                <li class="nav-item flex-fill"><a class="nav-link mr-0" data-toggle="tab"
                                        href="#chat-Contact">Contact</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane vivify fadeIn active show" id="chat-Users">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="text-muted font-12">10
                                                            min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small
                                                            class="text-muted font-12">15 min</small></span>
                                                    <span class="message">I was wondering...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Lisa Garett <small class="text-muted font-12">18
                                                            min</small></span>
                                                    <span class="message">I've forgotten how it felt before</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie <small
                                                            class="text-muted font-12">23 min</small></span>
                                                    <span class="message">Wasup for the third time like...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Marshall Nichols <small
                                                            class="text-muted font-12">27 min</small></span>
                                                    <span class="message">But we’re probably gonna need a new
                                                        carpet.</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small
                                                            class="text-muted font-12">38 min</small></span>
                                                    <span class="message">It’s not that bad...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Lisa Garett <small class="text-muted font-12">45
                                                            min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane vivify fadeIn" id="chat-Groups">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Apolog Hospital<small
                                                            class="text-muted font-12">10 min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Family Groups <small
                                                            class="text-muted font-12">18 min</small></span>
                                                    <span class="message">I've forgotten how it felt before</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Friends holic <small
                                                            class="text-muted font-12">23 min</small></span>
                                                    <span class="message">Wasup for the third time like...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">New Hospital <small class="text-muted font-12">45
                                                            min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane vivify fadeIn" id="chat-Contact">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Dr. John Smith <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">johnsmith@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Merri Diamond <small class="text-muted"><i
                                                                class="fa fa-heart"></i></small></span>
                                                    <span class="message">hermanbeck@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Dr. Louis Henry <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">maryadams@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Andrew Patrick <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">mikethimas@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Claire Peters <small class="text-muted"><i
                                                                class="fa fa-heart"></i></small></span>
                                                    <span class="message">clairepeters@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Pro. Debra Stewart <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">It’s not that bad...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Dr. Lisa Garett <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">eringonzales@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">MD. Louis Henry <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">susiewillis@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="text-muted"><i
                                                                class="fa fa-star"></i></small></span>
                                                    <span class="message">johnsmith@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stiky note div  -->
            <div class="sticky-note">
                <a href="javascript:void(0);" class="right_note"><i class="fa fa-close"></i></a>
                <div class="form-group c_form_group">
                    <label>Write your note here</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter here...">
                        <div class="input-group-append"><button class="btn btn-dark btn-sm" type="button">Add</button>
                        </div>
                    </div>
                </div>
                <div class="note-body">
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>Commit code on github branch development</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star active"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>Meeting with client for new project.</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>making this the first true generator on the Internet</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>it look like readable English. Many desktop publishing</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main body part  -->
            @yield('content')

        </div>
    </div>

    @include('backend.layout.scripts')
    @yield('scripts')

</body>

</html>
