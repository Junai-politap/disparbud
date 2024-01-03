<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Misi;
use App\Models\Slide;
use App\Models\TentangDinas;
use App\Models\Visi;
use Illuminate\Http\Request;

class WebController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(6)->get();
        $data['list_visi'] = Visi::orderBy('id', 'DESC')->take(1)->get();
        $data['list_misi'] = Misi::orderBy('id', 'DESC')->take(1)->get();
        $data['list_tentang_dinas'] = TentangDinas::orderBy('id', 'DESC')->take(1)->get();
        return view('web.index', $data);
    }

    public function detailBerita($berita){
        $data['berita'] = Berita::find($berita);
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();
        return view('web.detail-berita', $data);
        
    }

    
    
}
