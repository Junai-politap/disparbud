<?php

namespace App\Models;

use App\Models\ModelBase;
use Illuminate\Support\Str;

class Agenda extends ModelBase
{
    protected $table ="agenda";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "agenda";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
