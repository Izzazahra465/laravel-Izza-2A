<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $data['judul']  = 'Data Admin';
        $data['admins'] = Admin::all();
        return view('admin.index', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah Admin';
        return view('admin.create', $data);
    }

    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect('/admin');
    }

    public function edit(Admin $admin)
    {
        $data['judul'] = 'Edit Admin';
        $data['admin'] = $admin;
        return view('admin.edit', $data);
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->username = $request->username;
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();

        return redirect('/admin');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect('/admin');
    }
}