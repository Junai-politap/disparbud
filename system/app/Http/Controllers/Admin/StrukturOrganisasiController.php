<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    
    public function index()
    {
        $data['list_struktur_organisasi'] = StrukturOrganisasi::all();

        return view('admin.struktur-organisasi.index', $data);
    }

   
    public function store(Request $request)
    {
        $struktur_organisasi = New StrukturOrganisasi();
        $struktur_organisasi->handleUploadPoto();
        $struktur_organisasi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    
    public function update($struktur_organisasi)
    {
        $struktur_organisasi = StrukturOrganisasi::find($struktur_organisasi);
        $struktur_organisasi->handleUploadPoto();
        $struktur_organisasi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($struktur_organisasi)
    {
        StrukturOrganisasi::destroy($struktur_organisasi);

        return back()->with('danger', 'Data bErhasil di Hapus');
    }
}
