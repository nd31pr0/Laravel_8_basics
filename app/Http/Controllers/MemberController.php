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
    function delete($Id){
        $data=Member::find($Id);
        $data->delete();
        return redirect('list');
    }
    function showData($id){
        $data= Member::find($id);
        return view('edit', ['data' => $data]);
    }
    function update(Request $req)
    {
        $data=Member::find($req->Id);
        $data->Id=$req->Id;
        $data->Name=$req->Name;
        $data->email=$req->email;
        $data->Address=$req->Address;
        $data->save();
        return redirect('list');
    }
}
