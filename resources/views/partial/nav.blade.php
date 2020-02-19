<header class="header_area">	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{url('/features') }}">Features</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('core/BackEnd/admin/admin_login.php') }}">Admin Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('core/BackEnd/client/client_login.php') }}">Client Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('core/BackEnd/staff/staff_login.php') }}">Staff Login</a></li>

                        </ul>
                    </div>
                     
                </div>
            </nav>
        </div>
    </header>