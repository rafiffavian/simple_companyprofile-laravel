<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DinnerController extends Controller
{
    public function index()
    {
    	// $dinner = Listmenu::where('id_menu','3')->get();
    	// return view('admin.dinner-table',compact('dinner'));
        $dinner = Auth::user()->daftarMenu()->where('id_menu','3')->get();
        return view('admin.dinner-table',compact('dinner'));
    }
    public function create()
    {
    	return view('admin.dinner-create');
    }
    public function store(Request $request)
    {
    	// $dinner = new Listmenu;
    	// $dinner->create($request->except('_token'));
    	// return redirect(route('admin.dinner'));
        $dinner = Auth::user()->daftarMenu()->create($request->except('_token'));
        return redirect(route('admin.dinner'));

    }
    public function edit($id)
    {
    	// $dinner = Listmenu::findOrFail($id);
    	// return view('admin.dinner-edit',compact('dinner'));
        $dinner = Auth::user()->daftarMenu()->findOrFail($id);
        return view('admin.dinner-edit',[

            'mydinner' => $dinner
        ]);
    }
    public function update(Request $request, $id)
    {
        // $dinner = Listmenu::findOrFail($id);
        // $dinner->fill($request->except(['token','_method']))->save();
        // return redirect(route('admin.dinner'));
        $dinner = Auth::user()->daftarMenu()->findOrFail($id);
        $dinner->fill($request->except(['token','_method']))->save();
        return redirect(route('admin.dinner'));

    }
    public function delete($id)
    {
        // \App\Listmenu::findOrFail($id)->delete();
        // return redirect(route('admin.dinner'));
        Auth::user()->daftarMenu()->findOrFail($id)->delete();
        return redirect(route('admin.dinner'));
    }
}
