<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function user_edit(){
        return view('backend.user.edit');
    }

    function user_update(Request $request){
        $request->validate([
         'name'=>'required',
       //  'email'=>'required|email|unique:users',
        ],[
            'name.required' => 'name na dile hobe na', //Custome Error Message
            'email.email' => 'email @ daw nai',
        ]);
        User::find(Auth::id())->update([
         'name' => $request->name,

        ]);
        return back()->with('success','User Update Successfully');
    }
}
