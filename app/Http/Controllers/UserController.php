<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{

    //$userColletion = new Collection([1,2]);

    private $userList = '{
        {
        "userId":"1",
        "firstName":"John",
        "lastName":"Doe",
        "email":"john@example.com"
        },
        {
        "userId":"2",
        "firstName":"Albert",
        "lastName":"Doe",
        "email":"albert@example.com"
        },
        {
        "userId":"3",
        "firstName":"Basem",
        "lastName":"Doe",
        "email":"basem@example.com"
        }
    }';

    function UserProfile($id){
        return view('user')->with('userId',$id);
    }

    function UserList(){
        return view("userList")->with('userList',$this->$userList);
    }

    function Users(){
        return redirect("user-list");
    }
}
