<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/alert.css">
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all() as $item)
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="padding: 20px; padding-bottom:20px; padding-top:20px">&times;</span>
            {{ $item }}
        </div> 
        @endforeach

    @endif
    <form action="{{ route('actionlogin') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form to login.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        <hr>
        <button type="submit" class="registerbtn">Login</button>
    </div>
    </form> 
</body>
</html>