@extends('layout.app', ['title' => 'Dashboard | Batch'])
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('partials.alert_message')
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <a href="{{ route('batch.create') }}" class="btn btn-primary"><i class="ion ion-plus"></i>Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Batch</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($batchs as $key => $batch)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $batch->batch }}</td>
                             <td class="d-flex">
                  <a href="{{ route('batch.edit', $batch->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit">edit</i></a>
                  <form action="{{ route('batch.destroy', $batch->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
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