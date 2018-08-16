<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $collection = collect([1, 2, 3]);
        echo $collection->first(); */
        $employees=Employee::all();
        return view('home',compact('employees'));
    }
}
