<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangDinas;
use Illuminate\Http\Request;

class TentangDinasController extends Controller
{
    
    public function index()
    {
        $data['list_tentang_dinas'] = TentangDinas::all();

        return view('admin.tentang-dinas.index', $data);
    }

    public function store(Request $request)
    {
        $tentang_dinas = New TentangDinas();
        $tentang_dinas->nama_dinas = request('nama_dinas');
        $tentang_dinas->deskripsi = request('deskripsi');
        $tentang_dinas->handleUploadPoto();
        $tentang_dinas->save();

        return back()->with('success','Data Berhasil di Simpan');
    }

    
  public function update($tentang_dinas)
    {
        $tentang_dinas = TentangDinas::find($tentang_dinas);
        $tentang_dinas->nama_dinas = request('nama_dinas');
        $tentang_dinas->deskripsi = request('deskripsi');
        $tentang_dinas->handleUploadPoto();
        $tentang_dinas->save();

        return back()->with('success','Data Berhasil di Simpan');
    }

    
    public function destroy($tentang_dinas)
    {
        TentangDinas::destroy($tentang_dinas);

        return back()->with('danger','Data Berhasil di Hapus');
    }
}
