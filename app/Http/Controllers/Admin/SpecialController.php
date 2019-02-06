<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialmenu;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    public function index()
    {
    	$special = Specialmenu::all();
    	return view('admin.special-table',compact('special'));
    }
    public function create()
    {
    	return view('admin.special-create');
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'id_listmenu' => 'required',
    		'file' => 'required',
    		'description' => 'required'
    	]);

    	 $path = $request->file('file')->store('public/fileupload');
		 $data = (array)$request->except('_token');
         $data['file'] = $path;
		 
    	$special = new Specialmenu;
        $special->create($data);
        return redirect(route('admin.special'));

    }
    public function edit($id)
    {
    	$special = Specialmenu::findOrFail($id);
    	return view('admin.special-edit',compact('special'));
    }
    public function delete($id)
    {
    	\App\Specialmenu::findOrFail($id)->delete();
    	return redirect(route('admin.special'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate([

    		'id_listmenu' => 'required',
            'description' =>'required'
        ]);

         $data = (array)$request->except(['_token','file']);
         if ($request->has('file')){
            $path = $request->file('file')->store('public/fileupload');
            $data['file'] = $path;
         }
      $special = Specialmenu::findOrFail($id);

         $special->update($data);
         $special->save();
        return redirect(route('admin.special'));  
    
    }
}
