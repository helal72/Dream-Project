<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Vue Controller</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <router-link to="/postCategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Category
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/post" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Post
              </p>
            </router-link>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">

      <router-view></router-view>
      
    </div>
    <!-- /.content -->
  </div>

  
 
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>