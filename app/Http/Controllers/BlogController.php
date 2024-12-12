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

        // $imageName = [];
        // if ($image = $request->file('image')) {
        //     $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images/post'), $imageName);
        //     $blog->image = $imageName;
        // }

        $imageNames = []; // Initialize an array to store image names
        if ($images = $request->file('image')) { // Use 'images' as the field name for multiple files
            foreach ($images as $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/post'), $imageName); // Save each image
                $imageNames[] = $imageName; // Store the image name in the array
            }
            $blog->image = json_encode($imageNames); // Save image names as a JSON string in the database
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

    public function edit($id){
        $blogs=Blog::findOrFail($id);
        return view('admin.pages.blog.edit',compact('blogs'));
    }

    public function update(Request $request, $id){
        $blogs=Blog::findOrFail($id);

        $blogs->name=$request->name;
        $blogs->date = date('Y-m-d', strtotime($request->date));
        $imageName='';
        if($image=$request->file('image')){
            $imageName=time().'-'.uniqid().'-'.$image->getClientOriginalExtension();
            $image->move(public_path('images/post'),$imageName);
        }
        $blogs->image =$imageName;
        $blogs->title=$request->title;
        $blogs->description=$request->description;
        $blogs->save();

        return redirect()->route('blog.index')->with('success','Blog update successfully done');
    }


    public function delete($id){
        $var=Blog::findOrFail($id);
        $var->delete();

        return redirect()->back()->with('success','Blog deleted successfully');

    }
}
