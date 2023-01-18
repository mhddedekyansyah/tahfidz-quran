@include('partials.header')
<!-- Site wrapper -->
<div class="wrapper">
  @include('partials.navbar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('../../../assets/img/ic_logo.jpeg') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rumah Tahfidz</span>
    </a>

   @include('partials.sidebar')
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
@yield('content')
</div>

  @include('partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('partials.js')
