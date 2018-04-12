<section class="hero is-primary">
<!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container">
      <h1 class="title">@yield('top-title')</h1>
      <h2 class="subtitle">
        Subtitle
      </h2>
    </div>
  </div>
  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-boxed">
      <div class="container">
        <ul>
          <li class="{{Nav::isRoute('manage.dashboard')}}"><a href="{{route('manage.dashboard')}}">General</a></li>
          <li class="{{Nav::isResource('posts', 2)}}"><a href="{{route('posts.index')}}">Posts</a></li>
          <li><a>Staff</a></li>
          <li><a>Students</a></li>
          <li><a>Parents</a></li>
          <li><a>Config</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<!-- End Section Hero -->
<!-- Start Menu Section Manage -->
<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-tabs">
      <a href="{{route('manage.dashboard')}}" class="navbar-item is-tab {{Nav::isRoute('manage.dashboard')}}">Dashboard</a>
      <a href="" class="navbar-item is-tab"></a>
      <a href="" class="navbar-item is-tab"></a>
    </div>
  </div>
</nav>
<!-- End Menu Section Manage -->
<div class="side-menu" id="admin-side-menu" style="display: none;">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Content
    </p>
    <ul class="menu-list">
      <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Blog Posts</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
      <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li>
      <li>
        <a class="has-submenu">Example Accordion</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
      <li>
        <a class="has-submenu">Another Example</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>