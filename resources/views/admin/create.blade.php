@extends('admin.layout')

@section('content')
    <form method="post" action="/admin" style="max-width: 400px;">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/admin" class="btn btn-secondary">Batal</a>
    </form>
@endsection