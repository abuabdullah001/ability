<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function create(){
        return view('frontend.pages.manual.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $manual=new Manual;

        $manual->name=$request->name;
        $manual->phone=$request->phone;
        $manual->email=$request->email;
        $manual->address=$request->address;
        $manual->payment_method=$request->payment_method;
        $manual->payment_proof=$request->payment_proof;
        $manual->transaction_info=$request->transaction_info;
        $manual->event_type=$request->event_type;

        $manual->save();
    }

    public function index(){
        $manuals=Manual::all();
        return view('admin.manual.index',compact('manuals'));
    }
}
