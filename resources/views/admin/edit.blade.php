@extends('admin.layout')

@section('content')
    <form method="post" action="/admin/{{ $admin->id_admin }}" style="max-width: 400px;">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $admin->username }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password baru (kosongkan jika tidak diganti)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/admin" class="btn btn-secondary">Batal</a>
    </form>
@endsection