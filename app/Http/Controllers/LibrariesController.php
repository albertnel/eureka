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
        $library = Library::create($request->all());

        foreach ($request->all()['categories-select'] as $key => $value) {
            $category = Category::findOrFail($value);
            $library->categories()->attach($category);
        }

        session()->flash('flash_message', 'Library "' . $library->name . '" has been created.');

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
        $selected_categories = $library->categories;

        return view('admin/libraries/edit', compact('library', 'categories', 'selected_categories'));
    }

    public function update(LibraryRequest $request, $id)
    {
        $library = Library::findOrFail($id);
        $library->update($request->all());

        foreach ($request->all()['categories-select'] as $key => $value) {
            $category = Category::findOrFail($value);
            $library->categories()->attach($category);
        }

        return redirect('admin/libraries');
    }
}
