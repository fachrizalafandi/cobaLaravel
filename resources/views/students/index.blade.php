@extends('layout.main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
  <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
      $(document).ready(function() {
        var t = $('#datatable').DataTable({
                  processing:true,
                  serverside:true,
                  ajax:"{{ route('ajax.get.students') }}",
                  "columns": [
                    {data: 'id'},
                    {data: 'nama'},
                    {data: 'nim'},
                    {data: 'email'},
                    {data: 'jurusan'}
                  ],
                  "columnDefs":[{
                    "searchable":false,
                    "orderable": false,
                    "targets":0
                  }],
                  "order":[[0,'desc']]
                });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            });
        }).draw();
    } );
    </script>
@endsection