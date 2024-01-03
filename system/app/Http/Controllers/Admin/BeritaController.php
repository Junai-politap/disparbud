<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    
    public function index()
    {
        $data['list_berita'] = Berita::all();

        return view('admin.berita.index', $data);
    }

    
    public function create()
    {
        return view('admin.berita.create');
    }

    
    public function store(Request $request)
    {
        $berita = New Berita();
        $berita->title = request('title');
        $berita->deskripsi = request('deskripsi');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->penulis = request('penulis');
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('admin.berita.show', $data);
    }

    
    public function edit($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('admin.berita.edit', $data);
    }

    
    public function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->title = request('title');
        $berita->deskripsi = request('deskripsi');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->penulis = request('penulis');
        $berita->handleUploadPoto();
        $berita->save();
        return redirect('admin/berita')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
