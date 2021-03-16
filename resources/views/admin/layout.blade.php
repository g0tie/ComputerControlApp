<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Panneau d'administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini sidebar-closed layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-auto">

    <form method="post" action="/logout" class="dropdown-item m-0" />
      @csrf
        <input type="submit" value="Se Déconnecter" class="btn btn-primary"/>
    </form>

      <button class="hamburger-menu" onClick="toggleMenu()" style="color:black; border:none; outline:none;background:none;">
        <svg width="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <!-- Messages Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="background:white" src="{{ asset('/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Paneau d'administration</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">

              @if(isset($menu_users))
                <a href="/users" class="nav-link active">
              @else
                <a href="/users" class="nav-link">
              @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                @if(isset($menu_computers))
                  <a href="/computers" class="nav-link active">
                @else
                  <a href="/computers" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postes informatique</p>
                </a>
              </li>

              <li class="nav-item">
                @if(isset($menu_attributions))
                  <a href="/attributions" class="nav-link active">
                @else
                  <a href="/attributions" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attributions</p>
                </a>
              </li>
             
            </ul>
          </li>
          
             
            
        </ul>
         
    
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <!-- Main row -->
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto d-flex flex-column justify-content-center">
               @yield('content')
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>2021 Computer Control</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('scripts')
<script>
  let body = document.body;

  function toggleMenu() {
    if (body.classList.contains('sidebar-closed')) {
      body.classList.remove('sidebar-closed');
      body.classList.add('sidebar-open');
    } else {
      body.classList.remove('sidebar-open');
      body.classList.add('sidebar-closed');
    }
  }

</script>
</body>
</html>