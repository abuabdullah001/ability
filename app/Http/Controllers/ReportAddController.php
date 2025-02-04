<?php

namespace App\Http\Controllers;

use App\Models\ReportAdd;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ReportAddController extends Controller
{
    public function create(){
        return view('admin.pages.reportadd.create');
    }
    public function index(){
        $repos=ReportAdd::all();
        Return view('admin.pages.reportadd.index',compact('repos'));
    }

    public function store(Request $request){
        $repo= new ReportAdd();

        $repo->name= $request->name;
        $repo->description=$request->description;

        if ($request->hasFile('image')) {
            $img_ext = $request->file('image')->getClientOriginalExtension();
            $filename = 'event-' . time() . '.' . $img_ext;
            $path = $request->file('image')->move(public_path('images/event'), $filename);
            $imagepath = '/images/event/' . $filename;
            $repo->image = $imagepath;
        }

        if ($request->hasFile('pdf')) {
            $img_ext = $request->file('pdf')->getClientOriginalExtension();
            $filename = 'event-' . time() . '.' . $img_ext;
            $path = $request->file('pdf')->move(public_path('images/event'), $filename);
            $imagepath = '/images/event/' . $filename;
            $repo->pdf = $imagepath;
        }

        $repo->save();
    }
}
