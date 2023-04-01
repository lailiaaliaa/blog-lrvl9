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
         <div class="container">
    <div class="row mt-3">
        <h4 class="card-title text-center">Tambah Data</h4>
        <form action="/insertuser" method="POST" enctype="multipart/form-data">
            <br>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nama User</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="text" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="exampleInputPassword1">
            </div>
            </div><br>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

    </div>
</div>
            </div>
        </div></div></body>
  @endsection

