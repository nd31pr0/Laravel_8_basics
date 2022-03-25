<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function list(){
        $data=Member::all();
        return view('list', ['members'=> $data]);
        /*
        $member = new Member;
        $member->Id =$req->Id;
        $member->name =$req->Name;
        $member->email =$req->email;
        $member->Address =$req->Address;
        $member->save();
        return redirect('add');*/
    }
    function delete($id){
        $data=Member::find($id);
        $data->delete();
        return redirect('list');
    }
}
