<nav class="navbar has-shadow is-fixed-top" >
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/bulma-logo.png')}}" alt="Agenda App Logo">
      </a>
      @if (Request::segment(1) == "manage")
      <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
        <span class="icon">
          <i class="fa fa-arrow-circle-right"></i>
        </span>
      </a>
      @endif
      <button class="button navbar-burger">
      <span></span>
      <span></span>
      <span></span>
      </button>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item  is-active">Learn</a>
        <a class="navbar-item ">Discuss</a>
        <a class="navbar-item ">Share</a>
        </div> <!-- end of .navbar-start -->
        <div class="navbar-end nav-menu" style="">
          @guest
          <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
          <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
          @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Hey {{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="icofont icofont-ui-user"></i>
                </span>Profile
              </a>
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="icofont icofont-notification"></i>
                </span>Notifications
              </a>
              <a href="{{route('manage.dashboard')}}" class="navbar-item">
                <span class="icon ">
                  <i class="icofont icofont-options"></i>
                </span>Manage
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="icofont icofont-logout"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </nav>