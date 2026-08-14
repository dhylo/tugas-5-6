<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('divisi.update', $divisi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Divisi</label>
        <input name="kode" value="{{ $divisi->kode }}">

        <label>Nama Divisi</label>
        <input name="nama" value="{{ $divisi->nama }}">

        <button>Update</button>
    </form>
</body>
</html>