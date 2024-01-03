<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\StrukturOrganisasi;
use App\Models\TentangDinas;
use App\Models\Visi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function tentangDinas()
    {
        $data['list_tentang_dinas'] = TentangDinas::orderBy('id', 'DESC')->take(1)->get();
        return view('web.profil.tentang-dinas', $data);
    }

    public function visiMisi()
    {
        $data['list_visi'] = Visi::orderBy('id', 'DESC')->take(1)->get();
        $data['list_misi'] = Misi::orderBy('id', 'DESC')->take(1)->get();
        return view('web.profil.visi-misi', $data);
    }

    public function strukturOrganisasi()
    {
        $data['list_struktur_organisasi'] = StrukturOrganisasi::all();
        
        return view('web.profil.struktur-organisasi', $data);
    }
}
