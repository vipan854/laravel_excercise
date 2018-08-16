<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{

    public function errorCodeAny()
    {
    	return view('errors.error');
    }

    public function errorCode404()
    {
    	return view('errors.404');
    }

    public function errorCode500()
    {
    	return view('errors.500');
    }
}
