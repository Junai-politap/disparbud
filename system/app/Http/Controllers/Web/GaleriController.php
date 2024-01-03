<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\GaleriPoto;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeriPhoto(){
        $data['list_galeri_poto'] = GaleriPoto::orderBy('id', 'DESC')->get();
        return view('web.galeri.photo', $data);
    }

    public function galeriVideo(){
        $data['list_galeri_video'] = GaleriVideo::orderBy('id', 'DESC')->get();
        return view('web.galeri.video', $data);
    }
}
