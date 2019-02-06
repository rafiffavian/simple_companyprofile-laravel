<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listmenu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DessertsController extends Controller
{
    public function index()
    {
    	return view('admin.desserts-table');
    }
    public function create()
    {
    	return view('admin.desserts-create');
    }
    public function store(Request $request)
    {
    	Auth::user()->daftarMenu()->create($request->except('_token'));
    	return redirect(route('admin.desserts'));
    }
    public function edit($id)
    {
    	$desserts = Auth::user()->daftarMenu()->findOrFail($id);
    	return view('admin.desserts-edit',[
    		'mydesserts' => $desserts
    	]);
    }
    public function update(Request $request,$id)
    {
    	$desserts = Auth::user()->daftarMenu()->findOrFail($id);
    	$desserts->fill($request->except(['_token','_method']))->save();
    	return redirect(route('admin.desserts'));
    }
    public function delete($id)
    {
    	Auth::user()->daftarMenu()->findOrFail($id)->delete();
    	return redirect(route('admin.desserts'));
    }
}
