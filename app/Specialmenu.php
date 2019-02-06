<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialmenu extends Model
{
    protected $table = "specialmenu";
    protected $guarded = [];

    public function tipeList()
    {
    	return $this->belongsTo(Listmenu::class,'id_listmenu');
    }

}
