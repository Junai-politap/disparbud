<?php

namespace App\Models;

use App\Models\ModelBase;
use Illuminate\Support\Str;

class TentangDinas extends ModelBase
{
    protected $table ="tentang_dinas";
    

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "Dinas";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
