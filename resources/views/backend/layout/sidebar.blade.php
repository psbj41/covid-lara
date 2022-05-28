<div id="left-sidebar" class="sidebar light_active">
    <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>

    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{asset('backend/assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{Auth::user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="dr-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                    {{-- <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Messages</a></li>
                    <li><a href="setting.html"><i class="fa fa-gear"></i>Settings</a></li> --}}
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Hospital</li>
                <li class="active"><a href="{{route('dashboard'
                )}}"><i class="fa fa-dashboard"></i>
                        <span>Dashboard</span></a></li>

                <li>
                    <a href="#Doctors" class="has-arrow"><i class="fa fa-user-md"></i><span>Admin Section</span></a>
                    <ul>
                        <li><a href="{{route('user.index')}}">All Users</a></li>
                        <li><a href="{{route('role.index')}}">Roles</a></li>
                        <li><a href="{{route('permission.index')}}">Permissions</a></li>
                    </ul>
                </li>

                <li><a href="{{route('appoint.index')}}"><i class="fa fa-calendar"></i><span>Appointment</span></a>
                </li>
                <li><a href="{{route('blood.index')}}"><i class="fa fa-calendar"></i><span>Blood Donation</span></a>
                </li>

            </ul>
        </nav>
    </div>
</div>
