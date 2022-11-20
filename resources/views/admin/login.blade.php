@extends('layout.master')
@section('content')
    
    @if($errors->any())
        @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{ $item }}
        </div>          
        @endforeach
    @endif
    @if($msg = Session::get('msg'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('msg') }}
    </div>
    @endif
    <form action="{{ route('actionlogin') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form to login.</p>
        <hr>
        <label for="email" class="form-label">Email</label>
        <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required>
      
        <label for="psw" class="form-label">Password</label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" class="form-control" required>
        <hr>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    </form>
@endsection