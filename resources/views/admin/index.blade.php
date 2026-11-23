@extends('admin.layout')

@section('content')
    <a href="/admin/create" class="btn btn-primary mb-3">+ Tambah Admin</a>
    <table class="table table-bordered bg-white">
        <thead class="table-light">
            <tr><th>ID</th><th>Username</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($admins as $row)
            <tr>
                <td>{{ $row->id_admin }}</td>
                <td>{{ $row->username }}</td>
                <td>
                    <a href="/admin/{{ $row->id_admin }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form method="post" action="/admin/{{ $row->id_admin }}" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection