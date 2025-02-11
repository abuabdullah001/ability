<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function create()
    {
        return view('admin.pages.partner.create');
    }

    public function store(Request $request)
    {

        $partner = new Partner;

        $partner->title = $request->title;
        $partner->description = $request->description;

        if ($request->hasFile('image')) {
            $img_ext = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $request->file('image')->move(public_path('images/event'), $filename);
            $partner->image = '/images/event/' . $filename;
        }
        $partner->save();
        return redirect()->route('partner.index')->with('success', 'Partner added successfully.');
    }
    public function index()
    {
        $partners = Partner::all();
        return view('admin.pages.partner.index', compact('partners'));
    }

    public function edit($id){
        $partners=Partner::findOrFail($id);
        return view('admin.pages.partner.edit',compact('partners'));
    }

 

}