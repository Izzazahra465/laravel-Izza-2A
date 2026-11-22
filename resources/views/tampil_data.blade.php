<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
</head>
<body>
    <h1>{{ $judul }}</h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach ($employes as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->gaji }}</td>
            <td>
                <button>Edit</button> | <button>Delete</button>
            </td>
        </tr>
        @endforeach
        <p><a href="/employe/create"><button>+ Tambah Pegawai</button></a></p>
    </table>
</body>
</html>