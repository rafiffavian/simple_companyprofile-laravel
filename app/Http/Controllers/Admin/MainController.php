<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listmenu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
    	// $menu = Listmenu::where('id_menu','2')->get();
    	// return view('admin.maincourse-table',compact('menu'));
        $menu = Auth::user()->daftarMenu()->where('id_menu','2')->get();
        return view('admin.maincourse-table',compact('menu'));
    }
    public function create()
    {
    	return view('admin.maincourse-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'id_menu' => 'required',
    		'description' => 'required',
    		'price' => 'required'
    	]);

    	$menu = Auth::user()->daftarMenu()->create($request->except('_token'));
    	return redirect(route('admin.main'));

    }
    public function edit($id)
    {
    	$main = Auth::user()->daftarMenu()->findOrFail($id);
    	return view('admin.maincourse-edit',[
            'mymain' => $main
        ]);
    }
    public function update(Request $request, $id)
    {
    	$request->validate([

    		'name' => 'required',
    		'id_menu' => 'required',
    		'description' => 'required',
    		'price' => 'required'
    	]);
    	// $menu = Listmenu::findOrFail($id);
    	// $menu->fill($request->except(['token','_method']))->save();
    	// return redirect(route('admin.break'));
        $menu = Auth::user()->daftarMenu()->findOrFail($id);
        $menu->fill($request->except(['token','_method']))->save();
        return redirect(route('admin.main'));
    }
    public function delete($id)
    {
    	// \App\Listmenu::findOrFail($id)->delete();
    	// return redirect(route('admin.break'));
        Auth::user()->daftarMenu()->findOrFail($id)->delete();
        return redirect(route('admin.main'));
    }
}
