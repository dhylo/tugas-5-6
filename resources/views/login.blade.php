<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="{{ route('proses.login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Masukkan Email">
        <input type="password" name="password" placeholder="Masukkan Password">
        
        <button type="submit">Login</button>
</body>
</html>