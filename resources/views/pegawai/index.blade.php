<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>
    <table>
        {{-- baris header --}}
        <tr>
            {{-- kolom header --}}
            <th>nama</th>
            <th>jabatan</th>
            <th>divisi</th>
            <th>aksi</th>
        </tr>

        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->divisi->nama }}</td>
                <td>edit & hapus</td>               
            </tr>
        @endforeach
    </table>
</body>
</html>