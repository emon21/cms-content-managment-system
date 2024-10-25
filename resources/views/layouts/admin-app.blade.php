@include('backend.components.Header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.components.TopBar')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('backend.components.SideBar')

    @yield('content')

@include('backend.components.Footer')
