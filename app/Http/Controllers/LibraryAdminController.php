<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LibraryAdminController extends Controller
{
    public function index()
    {
    	$libraries = array(
    		array('name'=>'Library 01', 'questions'=>10),
    		array('name'=>'Library 02', 'questions'=>23),
    		array('name'=>'Library 03', 'questions'=>7),
    	);
    	
    	return view('admin.libraries.libraries', compact('libraries'));
    }
}
