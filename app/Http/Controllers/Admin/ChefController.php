<?php

namespace App\Http\Controllers\Admin;

use App\Chefs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index()
    {
        $chef = Chefs::all();
    	return view('admin.chef-table', compact('chef'));
    }
    public function create()
    {
    	return view('admin.chef-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'file' => 'required',
    		'description' => 'required'
    	]);
    	 $path = $request->file('file')->store('public/chefupload');
		 $data = (array)$request->except('_token');
         $data['file'] = $path;
		 
    	$chef = new Chefs;
        $chef->create($data);
        return redirect(route('admin.chef'));
    }
    public function edit($id)
    {
        $chef = Chefs::findOrFail($id);
        return view('admin.chef-edit',compact('chef'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'description' =>'required'
        ]);

         $data = (array)$request->except(['_token','file']);
         if ($request->has('file')){
            $path = $request->file('file')->store('public/chefupload');
            $data['file'] = $path;
         }
      $chef = Chefs::findOrFail($id);

         $chef->update($data);
         $chef->save();
        return redirect(route('admin.chef'));  
    }
    public function delete($id)
    {
        \App\Chefs::findOrFail($id)->delete();
        return redirect(route('admin.chef'));
    }
}
