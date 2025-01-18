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

    public function edit($id){
        $odmss=Odms::findOrFail($id);
        return view('frontend.pages.odms.edit',compact('odmss'));
    }

    public function update(Request $request, $id)
    {
        $odmss = Odms::findOrFail($id);

        if ($request->hasFile('image')) {
            if (!empty($odmss->image) && file_exists(public_path('images/post/' . $odmss->image))) {
                unlink(public_path('images/post/' . $odmss->image));
            }
            $image = $request->file('image');
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post'), $imageName);
            $odmss->image = $imageName;
        }
        $odmss->title = $request->input('title');
        $odmss->descrition = $request->input('descrition');
        $odmss->update();
        return redirect()->route('odms.index')->with('success', 'ODMS updated successfully!');
    }


    public function delete($id){
      $odmss=Odms::find($id);
      $odmss->delete();

      return redirect()->back()->with('success', 'ODMS created successfully!');
    }
}
