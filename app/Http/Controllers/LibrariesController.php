<?php

namespace App\Http\Controllers;

use App\Library;
use App\Http\Requests;
use App\Http\Requests\LibraryRequest;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth', ['only' => 'create']);
    }

    public function index(Request $request)
    {
    	$libraries = Library::all();
        // dd($request->is('admin/libraries*'));

    	return view('admin/libraries/index', compact('request', 'libraries'));
    }

    public function create()
    {
        dd(Route::current());
        return view('admin/libraries/create');
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

        return view('admin/libraries/edit', compact('library'));
    }

    public function update($id, LibraryRequest $request)
    {
        $library = Library::findOrFail($id);
        $library->update($request->all());

        return redirect('admin/libraries');
    }
}
