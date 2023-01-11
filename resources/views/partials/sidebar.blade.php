 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">Dedek</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item{{ request()->routeIs('dashboard.*') ? ' active' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon ionicons ion-speedometer"></i>
                <p>Dashboard</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon ion ion-person"></i>
                <p>Admin</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon ion ion-home"></i>
                <p>Info Rumah Tahfidz</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon ionicons ion-android-bookmark"></i>
                <p>Info Penyaluran Beras</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon ionicons ion-alert"></i>
                <p>Info</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->