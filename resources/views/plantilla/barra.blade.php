<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a class="logo" href="{{ url('home') }}">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>
                APP
            </b>
            
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>
                APP
            </b>
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <button class="sidebar toggle btn btn-primary" data-toggle="push-menu">
            <i class="fas fa-align-justify text-dark">
                menu
            </i>
        </button>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell">
                        </i>
                        <span class="label label-warning">
                            10
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            You have 10 notifications
                        </li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li>
                                    <!-- start notification -->
                                    <a href="#">
                                        <i class="fas fa-bell">
                                        </i>
                                        5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">
                                View all
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <!-- The user image in the navbar-->
                        <img alt="User Image" class="user-image" src=" {{ asset('img/user2-160x160.jpg') }}"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                 {{--   {{ Auth::user()->$entidad->name }} --}}
                            
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img alt="User Image" class="img-circle" src="../img/user2-160x160.jpg"/>
                            <p>
                   {{ Auth::user()->nombre() }}                                
                                <small>
                                    {{ Auth::user()->created_at->diffForHumans() }}
                                </small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a class="btn btn-default btn-flat" href="#">
                                    Perfil
                                </a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>
</header>