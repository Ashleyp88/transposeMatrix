<?php

namespace App\Http\Controllers\Operation;

use \Session;
use App\Http\Requests\OperationRequest;
use App\Http\Requests\MatrixRequest;
use App\Http\Controllers\Controller;

class OperationController extends Controller
{
    /*
		* controller for matrix logic
    * index function show the index view 
    *	with variables X and Y if they exist
    */

    public function index()
    {
    	//return the index view
    	return view('index');
    }

    public function createMatrix(OperationRequest $request){
			//getting value x and y with the request paramater
    	$value = $request->only('x', 'y');

    	//put x y values on the view
    	return view('matrix', $value);

    }

    //transposeMatrix method 
    //paramater MatrixRequest
    public function transposeMatrix(MatrixRequest $request)
    {
        $tab = ($request->get('tab'));

        $return = $this->transpose($tab);

        session()->put('original', $tab);

        session()->put('transpose', $return);

    	return redirect()->route('result')->with('ok', 'Congratillation result found');
    }

    /*
    *   function doing the transpose 
    *   @PARAM the table to transpose
    */
    private function transpose($tab = [])
    {

        $keys = array_keys($tab);

        return array_map(function($tab) use ($keys) {

            return array_combine($keys, $tab);

        }, array_map(null, ...array_values($tab)));

    }

    public function resultOperation()
    {
        return view('result');
    }

}
