<?php

namespace App\Http\Controllers;

use App\Category;
use App\Library;
use App\Http\Requests\LibraryRequest;
use App\Http\Controllers\Controller;
use Request;

class LibrariesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
    	$libraries = Library::all();

    	return view('admin/libraries/index', compact('libraries'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin/libraries/create', compact('categories'));
    }

    public function store(LibraryRequest $request)
    {
        Library::create($request->all());

        return redirect('admin/libraries');
    }

    public function show($id)
    {
    	$library = Library::findOrFail($id);

    	return view('admin/libraries/show', compact('library'));
    }

    public function edit($id)
    {
        $library = Library::findOrFail($id);
        $categories = Category::all();

        return view('admin/libraries/edit', compact('library', 'categories'));
    }

    public function update(LibraryRequest $request, $id)
    {
        $library = Library::findOrFail($id);
        $library->update($request->all());

        return redirect('admin/libraries');
    }
}
