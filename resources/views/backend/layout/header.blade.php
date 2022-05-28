<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-right">
            <div id="navbar-menu"></div>
                <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen"
                            class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="icon-menu"><i class="fa fa-power-off"></i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
