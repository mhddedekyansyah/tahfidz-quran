@extends('layout.app', ['title' => 'Rumah Tahfidz | Rumah Tahfidz Create'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <p>Edit Batch</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('batch.update', $batch->id) }}" method="POST">
                  @csrf
                  @method("put")
                  <div class="row">
                    <div class="col-4">
                    <div class="form-group">
                      <label for="batch">Batch</label>
                      <input value="{{ old('batch') ?? $batch->batch }}" class="form-control  @error('batch') is-invalid @enderror" id="batch" type="number" name="batch">
                      @error('batch')
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