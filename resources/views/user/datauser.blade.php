@extends('layouts.app')
{{-- memberi judul pada posisi 'judul' --}}
@section('title', 'All blog posts')
@section('content')
<body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-sm-6">

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <h2 class="text-center text-primary">Data Pengguna</h2>
       <div class="container">
  <div class="row mt-3">
    <div class="col-lg-6 sm-4">
        <a href="/tambahuser" class="btn btn-outline-primary">Tambah User</a><br><br>
    </div>
                  <div class="row">
      <table class="table table-bordered" id="gas">
      <thead class= table-success>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Kata Sandi</th>
        <th scope="col">Type</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
                   @php
                  $no = 1;
                 @endphp
               @foreach ($data as $row)
                   <tr>
                                  <th scope="row">{{ $no++ }}</th>
                                  <td>{{ $row->name }}</td>
                                  <td>{{ $row->email }}</td>
                                  <td>{{ $row->type }}</td>
                                  <td>{{ $row->password }}</td>
                                  <td>
                                    <a href="/edit" class="btn btn-sm btn-primary"  data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Edit</a>
                                    <a href="/deleteuser" class="btn btn-sm btn-primary"  data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>
                                  </td>
                              </tr>
                          @endforeach
      </tr>

    </tbody>
  </table>
  @endsection

