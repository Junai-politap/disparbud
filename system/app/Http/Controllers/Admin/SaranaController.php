<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sarana;
use Illuminate\Http\Request;

class SaranaController extends Controller
{
    
    public function index()
    {
        $data['list_sarana'] = Sarana::all();

        return view('admin.sarana.index', $data);
    }

    
    public function create()
    {
        return view('admin.sarana.create');
    }

    
    public function store(Request $request)
    {
        $sarana = New Sarana();
        $sarana->title = request('title');
        $sarana->handleUploadPoto();
        $sarana->save();

        return redirect('admin/sarana')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($sarana)
    {
        $data['sarana'] = Sarana::find($sarana);

        return view('admin.sarana.show', $data);
    }

    
    public function edit($sarana)
    {
        $data['sarana'] = Sarana::find($sarana);

        return view('admin.sarana.edit', $data);
    }

    
    public function update($sarana)
    {
        $sarana = Sarana::find($sarana);
        $sarana->title = request('title');
        $sarana->handleUploadPoto();
        $sarana->save();

        return redirect('admin/sarana')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($sarana)
    {
        Sarana::destroy($sarana);

        return back()->with('danger','Data Berhasil di Hapus');
    }
}
