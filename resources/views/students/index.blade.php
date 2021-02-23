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
                                <th style="width: 120px">Jurusan</th>
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
        $('#datatable').DataTable();
    } );
    </script>
@endsection