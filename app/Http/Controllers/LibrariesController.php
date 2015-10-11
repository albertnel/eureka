<?php

namespace App\Http\Controllers;

use App\Library;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    public function index()
    {
    	$libraries = Library::all();
    	
    	return view('libraries.index', compact('libraries'));
    }

    public function edit($id)
    {
    	$library = Library::findOrFail($id);

    	return view('libraries.edit', compact('library'));
    }
}
