<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max:20',
            'Userpassword'=>'required | min:5'

        ]);
            return $req->input();
    }
}
