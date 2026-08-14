<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('divisi.store') }}" method="POST">
        @csrf
        <label>Kode Divisi</label>
        <input name="kode" class="form-control">
        @error('kode')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

        <label>Nama Divisi</label>
        <input name="nama" class="form-control">

        <button>Simpan</button>
    </form>
</body>
</html>