<?php

namespace App\Http\Controllers;

use App\Models\Odms;
use Illuminate\Http\Request;

class OdmsController extends Controller
{
    public function index(){

        $odmss=Odms::all();
        // dd($odmss);
        return view('frontend.pages.odms.index',compact('odmss'));
    }

    public function create(){
        return view('frontend.pages.odms.create');
    }

    public function store(Request $request){
       $odms= new Odms;
       $imageName='';
       if($image=$request->file('image')){
           $imageName=time().'-'.uniqid().'-'.$image->getClientOriginalExtension();
           $image->move(public_path('images/post'),$imageName);
       }
       $odms->image =$imageName;

       $odms->title= $request->title;
       $odms->descrition=$request->descrition;
       $odms->save();

       return redirect()->route('odms.index')->with('success', 'ODMS created successfully!');
    }

    public function delete($id){
      $odmss=Odms::find($id);
      $odmss->delete();

      return redirect()->back()->with('success', 'ODMS created successfully!');
    }
}
