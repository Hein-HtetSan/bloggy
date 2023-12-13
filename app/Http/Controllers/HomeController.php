<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $category = Category::all();
        return view('frontend.index', compact('category'));
    }
}
