@extends('layout.auth', ['title' => 'Rumah Tahfidz | Register'])
@section('content')
    <div class="register-box">
  <div class="register-logo">
    <p><b>Rumah</b> Tahfidz</p>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="{{ route('store.register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" name="name" value="{{ old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         @error('name')
          <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
          @enderror
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
           
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-solid fa-envelope"></span>
            </div>
          </div>
        </div>
         @error('email')
          <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
          @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('name') }}">
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
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center d-flex justify-content-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection
