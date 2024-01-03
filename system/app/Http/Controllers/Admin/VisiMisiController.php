<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    
    public function index()
    {
        $data['list_visi'] = Visi::all();
        $data['list_misi'] = Misi::all();

        return view('admin.visi-misi.index', $data);
    }

    
   
    public function storeVisi()
    {
        $visi = New Visi();
        $visi->title = request('title');
        $visi->deskripsi = request('deskripsi');
        $visi->save();

        return back()->with('success', 'Data Visi Berhasil di Simpan');
    }

    public function storeMisi()
    {
        $misi = New Misi();
        $misi->title = request('title');
        $misi->deskripsi = request('deskripsi');
        $misi->save();

        return back()->with('success', 'Data Misi Berhasil di Simpan');
    }

    
    public function updateVisi($visi)
    {
        $visi = Visi::find($visi);
        $visi->title = request('title');
        $visi->deskripsi = request('deskripsi');
        $visi->save();

        return back()->with('success', 'Data Visi Berhasil di Edit');
    }

    public function updateMisi($misi)
    {
        $misi = Misi::find($misi);
        $misi->title = request('title');
        $misi->deskripsi = request('deskripsi');
        $misi->save();

        return back()->with('success', 'Data Misi Berhasil di Edit');
    }

    
    public function destroyVisi($visi)
    {
        Visi::destroy($visi);

        return back()->with('danger', 'Data Visi berhasil di Hapus');
    }

    public function destroyMisi($misi)
    {
        Misi::destroy($misi);

        return back()->with('danger', 'Data Misi berhasil di Hapus');
    }
}
