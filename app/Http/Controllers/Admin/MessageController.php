<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
    	return view('admin.message-table');
    }
    public function delete($id)
    {
    	\App\message::findOrFail($id)->delete();
    	return redirect(route('admin.message'));
    }
}
