<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
           @auth   
              <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                @csrf
                    <button type="submit" class="btn btn-tranparent btn-sm">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                    </button>
              </form>  
                      
          @endauth
      </li></ul>
  </nav>
  <!-- /.navbar -->