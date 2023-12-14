<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showAdminProfile(){
        return view('backend.admin');
    }

    public function updateAdminProfile(Request $request){
        $validate = validator($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->npassword){
            if($request->password == $request->npassword){
                $new_password = Hash::make($request->npassword);
            }else{
                return back()->withErrors('Password does not match');
            }
        }

        $admin = User::find(Auth::user()->id);
        if($admin){
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $new_password,
            ]);
            return redirect('posts/list')->with('Success', "Successfully updated Profile");
        }else{
            return view('errors.404Page');
        }
    }
}
