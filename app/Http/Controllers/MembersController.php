<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
class MembersController extends Controller
{
    //
    function dbOperations(){

        return DB::table('members')
        ->where('Address', 'Bangem')->get();

    }
}
