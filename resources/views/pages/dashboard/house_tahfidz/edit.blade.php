@extends('layout.app', ['title' => 'Rumah Tahfidz | Rumah Tahfidz Edit'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <p>Edit Rumah Tahfidz</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('tahfidzhouse.update', $tahfidzHouse) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-4">
                    <div class="form-group">
                      <label for="name">Nama Rumah Tahfidz</label>
                      <input type="text" value="{{ old('name') ?? $tahfidzHouse->name }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                       @error('name')
                    <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                    @enderror
                    </div>
                   
                   <div class="form-group">
                  <label for="address">Alamat</label>
                  <textarea class="form-control  @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address') ?? $tahfidzHouse->address }}</textarea>
                  @error('address')
                    <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                    @enderror
                  </div>
                    <div class="form-group">
                      <label for="contact">Kontak</label>
                      <input value="{{ old('contact') ?? $tahfidzHouse->contact }}" class="form-control  @error('contact') is-invalid @enderror" id="contact" type="number" name="contact">
                      @error('contact')
                      <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                      @enderror
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                      <label for="total_santri">Jumlah Santri</label>
                      <input type="number" value="{{ old('total_santri') ?? $tahfidzHouse->total_santri }}" class="form-control  @error('total_santri') is-invalid @enderror" id="total_santri" name="total_santri">
                      @error('total_santri')
                      <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="total_santri_yatim">Jumlah Santri Yatim</label>
                      <input type="number" value="{{ old('total_santri_yatim') ?? $tahfidzHouse->total_santri_yatim }}" class="form-control @error('total_santri_yatim') is-invalid @enderror" id="total_santri_yatim" name="total_santri_yatim">
                      @error('total_santri_yatim')
                      <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="total_santri_dhuafa">Jumlah Santri Dhuafa</label>
                      <input type="number" value="{{ old('total_santri_dhuafa') ?? $tahfidzHouse->total_santri_dhuafa }}" class="form-control @error('total_santri_dhuafa') is-invalid @enderror" id="total_santri_dhuafa" name="total_santri_dhuafa">
                      @error('total_santri_dhuafa')
                      <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                      @enderror
                    </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('js')


@endpush