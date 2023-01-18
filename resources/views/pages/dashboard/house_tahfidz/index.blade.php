@extends('layout.app', ['title' => 'Rumah Tahfidz | Rumah Tahfidz'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             @include('partials.alert_message')
            <div class="card mt-3">
              <div class="card-header">
                <a href="{{ route('tahfidzhouse.create') }}" class="btn btn-primary"><i class="ion ion-plus"></i>Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Jumlah Santri</th>
                    <th>Jumlah Santri Yatim</th>
                    <th>Jumlah Santri Dhuafa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($tahfidzHouses as $key => $tahfidzHouse)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $tahfidzHouse->name }}</td>
                          <td>{{ $tahfidzHouse->address }}</td>
                          <td>{{ $tahfidzHouse->contact }}</td>
                          <td>{{ $tahfidzHouse->total_santri }}</td>
                          <td>{{ $tahfidzHouse->total_santri_yatim }}</td>
                          <td>{{ $tahfidzHouse->total_santri_dhuafa }}</td>
                          </td>
                  <td class="d-flex">
                  <a href="{{ route('tahfidzhouse.edit', $tahfidzHouse->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit">edit</i></a>
                  <form action="{{ route('tahfidzhouse.destroy', $tahfidzHouse->id) }}" method="POST">
                      @csrf
                      @method("delete")
                     <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash">hapus</i></button>
                    </form>
                    </td> 
                </tr>
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