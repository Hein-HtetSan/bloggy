<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::orderBy('updated_at', 'desc')->get();  
        return view('backend.category.index', compact('categories'));
    }
    // , compact('categories')

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = validator($request->all(), [
            'category_name' => 'required|min:2'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $category = new Category();
        $category->name = $request->category_name;
        if($category->save()){
            return redirect('backend/category')->with('success', 'Created Success!');
        }else{
            return view('errors.500Page');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = validator($request->all(),[
            'category_name' => 'required|min:2'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }

        $category = Category::where('id', $id)->first();
        if(isset($category)){
            $category->update(['name' => $request->category_name]);
            return redirect('backend/category/')->with('success', 'Updated Success!');
        }else{
            return view('errors.500Page');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        if(isset($category)){
            $category->delete();
            return redirect('/backend/category/')->with('success', "Deleted Successfully");
        }
    }
}
