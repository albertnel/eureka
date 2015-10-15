<?php

namespace App\Http\Controllers;

use App\Library;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class LibrariesController extends Controller
{
    public function index()
    {
    	$libraries = Library::all();

    	return view('libraries.index', compact('libraries'));
    }

    public function show($id)
    {
    	$library = Library::findOrFail($id);

    	return view('libraries.edit', compact('library'));
    }

    public function create()
    {
        return view('libraries.create');
    }

    public function store()
    {
        $request = Request::all();

        Library::create($request);

        return view('libraries.index');
    }
}
