<?php

/*namespace App;

use App\Library;*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LibraryAdminController extends Controller
{
    public function index()
    {
    	// $libraries = App\Library::all()->toArray();
    	$libraries = [];
    	
    	return view('admin.libraries.libraries', compact('libraries'));
    }
}
