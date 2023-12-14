<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Guest;
use App\Models\Category;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function home(){
        $categories = Category::all();
        $posts = Post::latest()->paginate(4);
        $feature_post = Post::latest()->first();
        $latest_posts = Post::latest('created_at')->take(7)->get();
        return view('frontend.index', compact('categories', 'posts', 'feature_post', 'latest_posts'));
    }

    public function detail($id){
        $post = Post::find($id);
        $latest_posts = Post::latest('created_at')->take(7)->get();
        return view('frontend.detail', compact('post', 'latest_posts'));
    }

    public function index(){
        return view('auth.login');
    }

    public function userLogin(){
        return view('frontend.login');
    }

    public function userRegister() {
        return view('frontend.register');
    }

    public function store(Request $request){
        $validate = validator($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
        ];
        $user = Guest::create($data);
        if($user){
            return redirect('/')->with('success', "Login success");
        }else{
            return view('errors.500Page');
        }
    }
}
