@extends('layout.main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Mahasiswa</h1>

      <table class="table">
          <thead class="thead-dark">
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Email</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col"></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Mochammad Fachrizal Afandi</td>
                  <td>160533611436</td>
                  <td>rizal@gmail.com</td>
                  <td>Informatika</td>
                  <td>
                      <a href="" class="badge badge-success">edit</a>
                      <a href="" class="badge badge-danger">hapus</a>
                  </td>
              </tr>
          </tbody>
      </table>

    </div>
  </div>
</div>
@endsection