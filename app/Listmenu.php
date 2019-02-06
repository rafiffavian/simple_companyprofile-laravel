<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listmenu extends Model
{
    protected $table = "listmenu";
    protected $guarded = [];

    public function tipeMenu()
    {
    	return $this->belongsTo(Menu::class,'id_menu');
    }
}
