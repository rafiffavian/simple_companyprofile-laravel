<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\frontup;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontupController extends Controller
{
    public function index()
    {
    	$image = Auth::user()->frontUp();
    	return view('admin.frontup-table',compact('image'));
    }
    public function create()
    {
    	return view('admin.frontup-create');
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'file' => 'required'

    	]);
       
		 $path = $request->file('file')->store('public/fileupload');
		 $data = (array)$request->except('_token');
         $data['file'] = $path;

		 // $donasi = new frontup;

		 
         Auth::user()->frontUp()->create($data);
        return redirect(route('admin.frontup'));
  
    }
    public function edit($id)
    {
         $donasi = frontup::findOrFail($id);
        return view('admin.frontup-edit',compact('donasi'));

    }
    public function update(Request $request ,$id)
    {
       $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
       $data = (array)$request->except(['_token','file']);
       if ($request->has('file')){
        $path = $request->file('file')->store('public/fileupload');
         $data['file'] = $path;
       }
      $donasi = Auth::user()->frontUp()->findOrFail($id);

         $donasi->update($data);
         $donasi->save();
        return redirect(route('admin.frontup'));  
    }
    public function delete($id)
    {
        \App\frontup::findOrFail($id)->delete();
        return redirect(route('admin.frontup'));
    }
}
