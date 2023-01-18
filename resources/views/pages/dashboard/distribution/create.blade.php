@extends('layout.app', ['title' => 'Rumah Tahfidz | Rumah Tahfidz Create'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <p>Tambah Rumah Tahfidz</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('distribution.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-4">
                    <div class="form-group">
                      <label for="batch_id">Batch</label>
                      <select class="form-control @error('batch_id') is-invalid @enderror" id="batch_id" name="batch_id">
                      <option selected disabled value="{{ old('batch_id') }}">--pilih batch--</option>
                      @foreach ($batchs as $batch)
                          <option value="{{ $batch->id }}">{{ $batch->batch }}</option>
                      @endforeach
                    </select>
                       @error('batch_id')
                    <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                    @enderror
                    </div>
                   
                   <div class="form-group">
                  <label for="tahfidz_house_id">Rumah Tahfidz</label>
                  <select class="form-control @error('tahfidz_house_id') is-invalid @enderror" id="tahfidz_house_id" name="tahfidz_house_id">
                        <option selected disabled>--pilih rumah tahfidz--</option>
                      @foreach ($tahfidzHouses as $tahfidzHouse)
                          <option value="{{ $tahfidzHouse->id }}">{{ $tahfidzHouse->name }}</option>
                      @endforeach
                    </select>
                    @error('tahfidz_house_id')
                    <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="total_rice">Total Beras</label>
                      <input type="number" value="{{ old('total_rice') }}" class="form-control  @error('total_rice') is-invalid @enderror" id="total_rice" name="total_rice">
                      <small class="text-muted">Dalam bentuk kg (kilo gram)</small>
                      @error('total_rice')
                      <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                      @enderror
                    </div>
                 
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="image">Dokumentasi</label>
                        <input type="file" value="{{ old('image_url') }}" class="form-control @error('image_url') is-invalid @enderror" id="image" name="image_url">
                        @error('image_url')
                        <small class="text-muted"><p class="text-danger">{{ $message }}</p></small>
                        @enderror
                      </div>
                      <img src="" alt="Image Preview" class="rounded d-none" style="width: 100%; height:180px;" id="image-preview">
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
<script>
  $(document).ready(function (e) {
 
   
   $('#image').change(function(){
     let reader = new FileReader();
     
     reader.onload = (e) => { 
       
      $('#image-preview').removeClass('d-none')
      $('#image-preview').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
</script>

@endpush