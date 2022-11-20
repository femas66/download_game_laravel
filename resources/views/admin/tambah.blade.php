@extends('layout.master')
@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Download Game</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homeadmin') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Tambah game</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" style="color: red;">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <hr>
        <h2>Tambah game</h2>
        <hr>
    <form action="{{ route('actiontambah') }}" method="post" enctype="multipart/form-data">
    @csrf
        <label for="nm" class="label-form">Nama game</label>
        <input type="text" name="nama_game" placeholder="Nama game" id="nm" class="form-control">
        <div class="mb-3">
            <label for="formFile" class="form-label">Icon game</label>
            <input class="form-control" type="file" id="formFile" name="icon_game">
        </div>
        <label for="kt" class="label-form">Kategori</label>
        <input type="text" name="kategori" placeholder="kategori" class="form-control" id="kt">
        <label for="ds" class="label-form">Deskripsi</label>
        <div class="form-floating">
            <textarea name="deskripsi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
            <label for="floatingTextarea2">Deskripsi</label>
        </div>
        <input type="hidden" name="total_view" value="1">
        <hr>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>
@endsection