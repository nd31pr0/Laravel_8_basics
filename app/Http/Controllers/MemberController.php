<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function addData(Request $req){
        $member = new Member;
        $member->Id =$req->Id;
        $member->name =$req->Name;
        $member->email =$req->email;
        $member->Address =$req->Address;
        $member->save();
        return redirect('add');
    }
}
