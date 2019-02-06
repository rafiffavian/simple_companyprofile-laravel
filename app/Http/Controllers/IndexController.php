<?php

namespace App\Http\Controllers;

use App\About;
use App\Address;
use App\message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class IndexController extends Controller
{
    public function index()
    {
        $break = \App\Listmenu::where('id_menu','1')->get();
        $Main = \App\Listmenu::where('id_menu','2')->get();
        $banner = \App\frontup::orderBy('created_at','desc')->limit(3)->get();
        $test = \App\About::orderBy('created_at','desc')->first();
        $special = \App\Specialmenu::all();
        $gege = \App\Address::orderBy('created_at','desc')->first();
    	return view('index',compact(['banner','test','break','Main','special','gege']));
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'email' => 'required',
    		'pesan' => 'required'
    	]);

    	$pesanindex = new message;
    	$pesanindex->create($request->except('_token'));
         Alert::success('Success Title', 'Data Berhasil Masuk');
        return redirect(route('index'));

    }
}
