<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Divisi</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($divisi as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->kode }}</td>
                <td>{{ $d->nama }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <a href="{{ route('divisi.create') }}">
        <button>Tambah Divisi</button>
    </a>
</body>
</html>