 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">Dedek</a>
        </div>
      </div> --}}


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link{{ request()->is('dashboard') ? ' active' : ' ' }}">
              <i class="nav-icon ionicons ion-speedometer"></i>
                <p>Dashboard</p>
            </a>
          </li> 
        
          {{-- <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link{{ request()->is('dashboard/admin*') ? ' active' : '' }}">
              <i class="nav-icon ion ion-person"></i>
                <p>Admin</p>
            </a>
          </li>  --}}
        
          <li class="nav-item">
            <a href="{{ route('tahfidzhouse.index') }}" class="nav-link{{ request()->is('dashboard/tahfidzhouse*') ? ' active' : '' }}">
              <i class="nav-icon ion ion-home"></i>
                <p>Info Rumah Tahfidz</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="{{ route('distribution.index') }}" class="nav-link{{ request()->is('dashboard/distribution*') ? ' active' : '' }}">
              <i class="nav-icon ionicons ion-android-bookmark"></i>
                <p>Info Penyaluran Beras</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{ route('batch.index') }}" class="nav-link{{ request()->is('dashboard/batch*') ? ' active' : '' }}">
              <i class="nav-icon ionicons ion-pricetag"></i>
                <p>Info Batch</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="{{ route('info') }}" class="nav-link{{ request()->is('dashboard/info*') ? ' active' : ' ' }}">
                <i class="nav-icon ionicons ion-alert"></i>
                <p>Info</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->