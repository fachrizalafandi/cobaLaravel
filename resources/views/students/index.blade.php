@extends('layout.main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
  <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->nim }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->jurusan }}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-dark btn-sm mt-1"><i class="fas fa-info-circle"></i></i></a>
                                    <a href="#" class="btn btn-outline-success btn-sm mt-1"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-outline-danger btn-sm mt-1"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection