@extends('layout.master')
@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('tambahgame') }}"><i class="fa fa-plus"></i> Tambah game</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" style="color: red;"><i class="fa fa-sign-out"></i> Logout</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <hr>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-striped table-hover">
        <tr>
            <th>Icon</th>
            <th>Nama game</th>
            <th>Kategori</th>
            <th>deskripsi</th>
        </tr>
        @if ($total > 0)
            @foreach ($listgame as $item)
            <tr>
                <td><img src='/img/{{ $item->icon_game }}' width="80" height="80"></td>
                <td>{{ $item->nama_game }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->deskripsi }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Tidak ada game</td>
            </tr>
        @endif    
    </table>
    </div>
@endsection