<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriPoto;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
   
    public function index()
    {
        $data['list_galeri_video'] = GaleriVideo::all();
        return view('admin.galeri-video.index', $data);
    }

   
    public function store(Request $request)
    {
        $galeri_video = New GaleriVideo();
        $galeri_video->judul = request('judul');
        $galeri_video->link = request('link');
        $galeri_video->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

      
    public function update($galeri_video)
    {
        $galeri_video = GaleriVideo::find($galeri_video);
        $galeri_video->judul = request('judul');
        $galeri_video->link = request('link');
        $galeri_video->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

   
    public function destroy($galeri_video)
    {
        GaleriVideo::destroy($galeri_video);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
