@extends('layout.auth', ['title' => 'Rumah Tahfidz | Login'])
@section('content')
      @include('partials.alert_message')
    <div class="login-box">
  <div class="login-logo">
    <p><b>Rumah</b> Tahfidz</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your journey</p>

      <form action="{{ route('store.login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
          @enderror
        <div class="row d-flex justify-content-center">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block ">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      {{-- <p class="mb-0 d-flex justify-content-center">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p> --}}
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

@push('js')
    <script>
      $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    });    
    </script>
@endpush



