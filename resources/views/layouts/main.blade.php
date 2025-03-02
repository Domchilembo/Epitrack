<!DOCTYPE html>
<html lang="pt-pt">
<!-- [Head] start -->

<head>
  <title>Epitrack</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="/assets/images/1.1LOGO.png" type="image/x-icon"> 
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/assets/fonts/tabler-icons.min.css" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="/assets/fonts/feather.css" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome.css" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="/assets/fonts/material.css" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/assets/css/style.css" id="main-style-link" >
    <link rel="stylesheet" href="/assets/css/style-preset.css" >

</head>
<!-- [Head] end -->

<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="/" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="/assets/images/1.2LOGO.png" class="img-fluid logo-lg" alt="logo">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="/dashboard" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>
  
          @if(Auth::check() && Auth::user()->role == 'admin')
          <li class="pc-item pc-caption">
            <label>Gerenciamento</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item">
            <a href="/usuarios" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">Usuários</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/d_casos" class="pc-link">
              <span class="pc-micon"><i class="ti ti-disc"></i></span>
              <span class="pc-mtext">Casos Ativos</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/d_mapa" class="pc-link">
              <span class="pc-micon"><i class="ti ti-map-2"></i></span>
              <span class="pc-mtext">Mapa</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/d_alertas" class="pc-link">
              <span class="pc-micon"><i class="ti ti-alert-octagon"></i></span>
              <span class="pc-mtext">Alertas</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/relatorios" class="pc-link">
              <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
              <span class="pc-mtext">Relatórios</span>
            </a>
          </li>
          @endif
  
          @if(Auth::check() && Auth::user()->role == 'user')
            <li class="pc-item pc-caption">
              <label>Área do Usuário</label>
              <i class="ti ti-news"></i>
            </li>
            <li class="pc-item">
              <a href="/meus-casos" class="pc-link">
                <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
                <span class="pc-mtext">Meus Casos</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="/relatorios-medicos" class="pc-link">
                <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
                <span class="pc-mtext">Relatórios Médicos</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="/alertas-saude" class="pc-link">
                <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
                <span class="pc-mtext">Alertas de Saúde</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="/mapa" class="pc-link">
                <span class="pc-micon"><i class="ti ti-map-2"></i></span>
                <span class="pc-mtext">Mapa</span>
              </a>
            </li>
          @endif
  
        </ul>
      </div>
    </div>
  </nav>
<!-- [ Sidebar Menu ] end --> 
<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  @if(Auth::check())
    <ul class="list-unstyled">
        <li class="dropdown pc-h-item header-user-profile">
            <a
                class="pc-head-link dropdown-toggle arrow-none me-0"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="false"
                data-bs-auto-close="outside"
                aria-expanded="false"
            >
                <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                <div class="dropdown-header">
                    <div class="d-flex mb-1">
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                            <span>
                                @if(Auth::user()->role == 'admin')
                                    Administrador
                                @else
                                    Usuário Comum
                                @endif
                            </span>
                        </div>
                        <a href="{{ route('logout') }}" class="pc-head-link bg-transparent"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-power text-danger"></i>
                        </a>
                    </div>
                </div>
                <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                        class="nav-link active"
                        id="drp-t1"
                        data-bs-toggle="tab"
                        data-bs-target="#drp-tab-1"
                        type="button"
                        role="tab"
                        aria-controls="drp-tab-1"
                        aria-selected="true"
                        ><i class="ti ti-user"></i> Profile
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="mysrpTabContent">
                    <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                        <a href="{{ route('profile.show') }}" class="dropdown-item">
                            <i class="ti ti-user"></i>
                            <span>View Profile</span>
                        </a>
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('dashboard') }}" class="dropdown-item">
                                <i class="ti ti-settings"></i>
                                <span>Admin Dashboard</span>
                            </a>
                        @else
                            <a href="{{ route('dashboard') }}" class="dropdown-item">
                                <i class="ti ti-layout"></i>
                                <span>User Dashboard</span>
                            </a>
                        @endif
                        <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
  @endif

</div>
</header>
<!-- [ Header ] end -->

    @yield('content')

  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
          <p class="m-0">
            Epitreck .
          </p>
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="/">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- [Page Specific JS] start -->
  <script src="/assets/js/plugins/apexcharts.min.js"></script>
  <script src="/assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="/assets/js/plugins/popper.min.js"></script>
  <script src="/assets/js/plugins/simplebar.min.js"></script>
  <script src="/assets/js/plugins/bootstrap.min.js"></script>
  <script src="/assets/js/fonts/custom-font.js"></script>
  <script src="/assets/js/pcoded.js"></script>
  <script src="/assets/js/plugins/feather.min.js"></script>



</body>
<!-- [Body] end -->

</html>