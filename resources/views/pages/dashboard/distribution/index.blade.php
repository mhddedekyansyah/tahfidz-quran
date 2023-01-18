@extends('layout.app', ['title' => 'Dashboard | Distribution'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('partials.alert_message')
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <div class="row">
                  <div class="col-2">
                  <a href="{{ route('distribution.create') }}" class="btn btn-primary"><i class="ion ion-plus"></i>Tambah Data</a>
                </div>
                
                <div class="col-2">
                  
                  <a href="{{ route('export') }}" class="btn btn-success">Cetak Laporan</a>
                </div>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Rumah Tahfidz</th>
                    <th>Batch</th>
                    <th>Jumlah Beras</th>
                    <th>Dokumentasi Penyaluran</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($distributions as $key => $distribution)
                        <tr>
                          <td>{{ $key + 1}}</td>
                          <td>{{ $distribution->tahfidzHouse->name }}</td>
                          <td>{{ $distribution->batch->batch }}</td>
                          <td>{{ $distribution->total_rice }}</td>

                          <td><img src="{{ url($distribution->image_url) }}" class="rounded"style="width: 50px; height:50px;"></td>
                          <td class="d-flex">
                              <a href="{{ route('distribution.edit', $distribution->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit">edit</i></a>
                              <form action="{{ route('distribution.destroy', $distribution->id) }}" method="POST">
                                  @csrf
                                  @method("delete")
                                <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash">hapus</i></button>
                                </form>
                          </td> 
                        </tr>
                    @endforeach
                  </tbody>
                </table>
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
  $(document).ready(function() {
        $('#table').DataTable();
      });
  $(document).ready(function() {
      window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    }); 
</script>

@endpush