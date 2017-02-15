<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Http\Requests;

class PersonalController extends Controller
{
    public function __construct()
    { 
    	$this->middleware('auth');
    }


    public function store(Request $request)
    {
    	Personal::create($request->all());
        return redirect()->back();
    }
}
