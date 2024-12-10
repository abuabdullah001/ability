<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
        return view('admin.pages.blog.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $blog=new Blog();

        $blog->name=$request->name;
        $blog->date = date('Y-m-d', strtotime($request->date));
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post'), $imageName);
            $blog->image = $imageName;
        }

        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog added successfully!');
    }
    public function index(){
        $blogs=Blog::all();
        return view('admin.pages.blog.index',compact('blogs'));
    }
}
