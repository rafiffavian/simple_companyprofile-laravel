<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::all();
    	return view('admin.video-table',compact('video'));
    }
    public function create()
    {
    	return view('admin.video-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'file' => 'required'
    	]);

    	$video = new Video;

    	$video->create($request->except('_token'));
    	return redirect(route('admin.video'));
    }
    public function delete($id)
    {
        \App\Video::findOrFail($id)->delete();
        return redirect(route('admin.video'));
    }
}
