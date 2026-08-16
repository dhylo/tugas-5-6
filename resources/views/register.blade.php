<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>REGISTER</h1>

    <form action="{{ route('proses.register') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Masukkan Nama">
        <input type="email" name="email" placeholder="Masukkan Email">
        <input type="password" name="password" placeholder="Masukkan Password">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>