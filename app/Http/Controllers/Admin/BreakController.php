<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listmenu;
use App\User;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreakController extends Controller
{
    public function index()
    {
    	$menu = Auth::user()->daftarMenu()->where('id_menu','=',1)->get();
    	return view('admin.breakfast-table',compact('menu'));
    }
    public function create()
    {
    	return view('admin.breakfast-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'id_menu' => 'required',
    		'description' => 'required',
    		'price' => 'required'
    	]);
    	// $menu = new Listmenu;
    	// $menu->create($request->except('_token'));
    	// return redirect(route('admin.break'));
        // komentar di atas adalah tanpa Auth::user()
        Auth::user()->daftarMenu()->create($request->except('_token'));
        return redirect(route('admin.break'));

    }
    public function edit($id)
    {
    	// $break = Listmenu::findOrFail($id);
    	// return view('admin.breakfast-edit',compact('break'));

        $break = Auth::user()->daftarMenu()->findOrFail($id);
        return view('admin.breakfast-edit',[
            'mybreakfast' => $break
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
        return redirect(route('admin.break'));
    }
    public function delete($id)
    {
    	// \App\Listmenu::findOrFail($id)->delete();
    	// return redirect(route('admin.break'));
        Auth::user()->daftarMenu()->findOrFail($id)->delete();
        return redirect(route('admin.break'));
    }
    public function getJsonData()
    {
        $break = 
        $query = Auth::user()->daftarMenu()->where('id_menu','=',1)->get();
        return Datatables::of($query)->make(true);

    }
}
