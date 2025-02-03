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

        $imagePaths = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = 'partner-' . time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->move(public_path('images/partners'), $filename);
                $imagePaths[] = '/images/partners/' . $filename;
            }
        }

        $partner->images = $imagePaths;
        $partner->save();

        return redirect()->route('partner.index')->with('success', 'Partner added successfully.');
    }
    public function index()
    {
        $partners = Partner::all();
        return view('admin.pages.partner.index', compact('partners'));
    }
}
