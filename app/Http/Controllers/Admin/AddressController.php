<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
    	$address = Address::all();
    	return view('admin.address-table',compact('address'));
    }

    public function create()
    {
    	return view('admin.address-create');
    }
    public function store(Request $request)
    {
    	$address = new Address;
    	$address->create($request->except('_token'));
    	return redirect(route('admin.address'));
    }
}
