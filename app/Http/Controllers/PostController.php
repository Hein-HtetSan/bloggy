<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::get();
        return view('backend.post.index', compact('posts'));
    }

    public function detail($id){
        $post = Post::find($id);
        if($post){
            return view('backend.post.detail', compact('post'));
        }else{
            return view('errors.404Page');
        }
    }

    public function create(){
        $category = Category::get();
        return view('backend.post.create', compact('category'));
    }

    public function post(Request $request){
        $validate = validator($request->all(), [
            'title' => 'required|min:3',
            'category' => 'required',
            'description' => 'required|min:3',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,mp4,mov,ogg|max:1024'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }

        // image upload 
        if(file_exists($request->cover)){
            $cover_name = 'cover-img-'.uniqid().'.'.$request->cover->getClientOriginalExtension();
            // image name 
            $request->cover->move('assets/images/'.$cover_name);
            $cover_path = 'assets/images/'.$cover_name;
        }else{
            $cover_name = 'assets/images/default-cover.jpg';
        }

        $data = [
            'title' => $request->title,
            'category_id' => $request->category,
            'description' => $request->description,
            'cover' => $cover_path,
            'user_id' => 1,
        ];

        // dd($data);

        $post = Post::create($data);

        if($post) {
            return redirect('posts/list')->with('success', "Created Post Successfully");
        }else{
            return view('errors.500Page');
        }
    }

    public function edit($id){
        $cateogry = Category::get();
        $post = Post::find($id);
        return view('backend.post.edit', compact('category', 'post'));
    }

    public function update($id, Request $request){
        $validate = validator($request->all(), [
            'title' => 'required|min:3',
            'category' => 'required',
            'description' => 'required|min:3',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $post = Post::find($id);
        // remove old image and upload new image
        if($request->hasFile('cover')){
            $request->validate([
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,mp4|max:1024',
            ]);
            if(file_exists($post->cover)){
                unlink($post->cover);
            }
            $cover_name = 'cover_img-'.uniqid().'.'.$request->cover->getClientOriginalExtension();
            $request->cover->move('assets/images/', $cover_name);
            $cover_path = 'assets/images/'.$cover_name;
        }else{
            $cover_path = $post->cover;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => 1,
            'cover' => $cover_path,
        ]);
        return redirect('posts/list')->with('success', "Updated Successfully");
    }
}
