<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index()
    {
    	// $about = About::all();
    	// return view('admin.detail-table', compact('about'));
        $about= Auth::user()->aboutGusto()->get();
        return view('admin.detail-table', compact('about'));
    }
    public function create()
    {
    	return view('admin.detail-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'judul' => 'required',
            'description' =>'required',
            'file' => 'required'
    	]);

    	$path = $request->file('file')->store('public/Aboutupload');
		 $data = (array)$request->except('_token');
         $data['file'] = $path;
		 
    	// $about = new About;
     //    $about->create($data);
     //    return redirect(route('admin.detail'));
         $about = Auth::user()->aboutGusto();
         $about->create($data);
         return redirect(route('admin.detail'));
    }   
    public function edit($id)
    {
    	// $about = About::findOrFail($id);
    	// return view('admin.detail-edit',compact('about'));
        $about = Auth::user()->aboutGusto()->findOrFail($id);
        return view('admin.detail-edit',[

                'myabout' => $about
        ]);
    }
    public function update(Request $request, $id)
    {

    	$request->validate([

            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    		'judul' => 'required',
    		'description' => 'required'
    	]);

    	$data = (array)$request->except(['_token','file']);
         if ($request->has('file')){
            $path = $request->file('file')->store('public/Aboutupload');
            $data['file'] = $path;
         }
      	// $about = About::findOrFail($id);
         $about = Auth::user()->aboutGusto()->findOrFail($id);
         $about->update($data);
         $about->save();

        return back()->with('success','Image Upload successful');
        return redirect(route('admin.detail'));  
    }
    public function delete($id)
    {
    	// \App\About::findOrFail($id)->delete();
    	// return redirect(route('admin.detail'));
        Auth::user()->aboutGusto()->findOrFail($id)->delete();
        return redirect(route('admin.detail'));
    }
}
