<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lili BOwL | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/css/adminlte.min.css">
  <link rel="stylesheet" href="/css/bostyles.css">


</head>

<body class="sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="/images/navbar_fixe/LILI_BOwL_logo_header.png" alt="Logo Lili BOwL" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lili BOwL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('home') }}" class="d-block">{{Auth::user() -> name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href=" {{ route('home') }}"  class="nav-link">
            <span class="material-icons">
              mail
            </span>
              <!-- <i class="far fa-circle nav-icon"></i> -->
              <p title="Voir les mails enregistrés ces derniers jours">
                Voir les derniers mails
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('displaymails') }}" class="nav-link">
            <span class="material-icons">
              mark_as_unread
            </span>
              <!-- <i class="far fa-circle nav-icon"></i> -->
              <p title="Voir tous les mails enregistrés en base de données">
                Voir tous les mails
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{ route('menuindex') }}"  class="nav-link">
            <span class="material-icons">
              restaurant_menu
            </span>
              <!-- <i class="far fa-circle nav-icon"></i> -->
              <p>
                Gérer les menus
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{ route('adminindex') }}"  class="nav-link">
            <span class="material-icons">
              admin_panel_settings
            </span>  
            <!-- <i class="far fa-circle nav-icon"></i> -->
              <p>
                Gérer les administrateurs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('newadmin') }}"  class="nav-link">
            <i class="material-icons">
              person_add
            </i>
              <!-- <i class="far fa-circle nav-icon"></i> -->
              <p title="Créer un nouveau compte administrateur">
                Créer un nouvel admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('homepage') }}" target="_blank" class="nav-link">
            <span class="material-icons">
              open_in_new
            </span>
              <!-- <i class="far fa-circle nav-icon"></i> -->
              <p title="Ouvrir un nouvel onglet pour voir le site">
                Ouvrir le site
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" id="form_id" action="{{ route('logout') }}">
              @csrf
              <a href="javascript:$('#form_id').submit();" type="button" class="nav-link btn-danger active">
              <span class="material-icons">
                logout
              </span>  
              <!-- <i class="far fa-circle nav-icon" style="margin-left:-120px"></i> -->
                <p title="Déconnexion et retour sur le site">
                Quitter
                <!--<span class="right badge badge-danger">New</span>-->
                </p>
              </a>
            </form>
          </li>
          <!--<li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Voir toutes les images postées
                <!--<span class="right badge badge-danger">New</span>-->
             <!-- </p> -->
            <!-- </a> -->
          <!-- </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col">
            <h1 style="text-align:center">Administration du site Lili BOwL</h1>
          </div><!-- /.col -->
        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>-->
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <div class="container">
      @yield("content")
    </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminLTE/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE/js/adminlte.min.js"></script>
<script src="/js/backoffice/autologout.js"></script>

<script>
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('bg-lime');

</script>

</body>
</html>
