<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    
    public function base()
    {
        return view('admin.index');
    }

    public function index(){

        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }
    
    public function create()
    {
        return view('admin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = New Admin();
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($admin)
    {
        $data['admin'] = Admin::find($admin);

        return view('admin.admin.show', $data);
    }

    
    public function edit($admin)
    {
        $data['admin'] = Admin::find($admin);

        return view('admin.admin.edit', $data);
    }

    
    public function update($admin)
    {
        $admin = Admin::find($admin);

        $admin->nama = request('nama');
        $admin->username = request('username');
        if(request('password')) $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data Berhasil di Edit');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
