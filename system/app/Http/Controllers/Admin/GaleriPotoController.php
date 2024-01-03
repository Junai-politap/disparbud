<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriPoto;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class GaleriPotoController extends Controller
{
    
    public function index()
    {
        $data['list_galeri_poto'] = GaleriPoto::all();

        return view('admin.galeri-poto.index', $data);
    }
    
    public function store(Request $request)
    {
        $galeri_poto = New GaleriPoto();
        $galeri_poto->judul = request('judul');
        $galeri_poto->handleUploadPoto();
        $galeri_poto->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }
    
    public function update($galeri_poto)
    {
        $galeri_poto = GaleriPoto::find($galeri_poto);
        $galeri_poto->judul = request('judul');
        $galeri_poto->handleUploadPoto();
        $galeri_poto->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($galeri_poto)
    {
        GaleriPoto::destroy($galeri_poto);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
