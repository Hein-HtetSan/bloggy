<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showAdminProfile(){
        return view('backend.admin');
    }
}
