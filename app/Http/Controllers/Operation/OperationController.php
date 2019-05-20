<?php

namespace App\Http\Controllers\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OperationController extends Controller
{
    /*
		* controller for matrix logic
    * index function show the index view 
    *	with variables X and Y if they exist
    */

    public function index(Request $request)
    {
    	//return the index view
    	return view('operation');
    }

    public function createMatrix(Request $request){
			//getting value x and y with the request paramater
    	$value = $request->only('x', 'y');

    	//put x y values on the view
    	return view('operation', $value);

    }

}
