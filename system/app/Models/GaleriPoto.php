<?php

namespace App\Models;
use App\Models\ModelBase;
use Illuminate\Support\Str;

class GaleriPoto extends ModelBase
{
    protected $table ="galeri_poto";
    

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "galeri-poto";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
