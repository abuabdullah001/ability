<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\champaign;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Project;
use App\Models\Transection;

class ExpenseController extends Controller
{
    public function store(Request $request)
    {
        $eventSupport = new Expense();
        $eventSupport->event_id = $request->event_id;
        $eventSupport->champaign_id = $request->champaign_id;
        $eventSupport->projects_id = $request->projects_id;
        $eventSupport->type = $request->type;
        $eventSupport->amount = $request->amount;
        $eventSupport->note = $request->note;
        $eventSupport->save();

        return redirect()->route('event_support.index')->with('success', 'Expense information saved successfully!');
    }

    public function fetchEvents(Request $request)
    {
        $category = $request->category;

        $events = null;
        $champaign = null;
        $projects = null;

        if ($category == 'event') {
            $events = Event::all();
        } elseif ($category == 'champaign') {
            $champaign = Champaign::all();
        } elseif ($category == 'project') {
            $projects = Project::all();
        }

        // Return the view with the appropriate data
        return view('helpers', compact('events', 'champaign', 'projects'));
    }


    public function create(){

        return view('admin.pages.expense.create');
    }

public function show($id){
    $eventSupport = Expense::findOrFail($id);
        return view('admin.pages.expense.edit', compact('eventSupport'));
}

    public function edit($id)
    {
        $eventSupport = Expense::findOrFail($id);
        return view('admin.pages.expense.edit', compact('eventSupport'));
    }

    public function update(Request $request, $id)
    {
        $eventSupport = Expense::findOrFail($id);
        $eventSupport->event_id = $request->event_id;
        $eventSupport->type = $request->type;
        $eventSupport->champaign_id = $request->champaign_id;
        $eventSupport->projects_id = $request->projects_id;
        $eventSupport->amount = $request->amount;
        $eventSupport->note = $request->note;
        $eventSupport->save();

        return redirect()->route('event_support.index')->with('success', 'Expense information updated successfully!');
    }

    public function destroy($id)
    {
        $eventSupport = Expense::findOrFail($id);
        $eventSupport->delete();

        return redirect()->back()->with('success', 'Expense information saved successfully!');
    }

    public function index()
    {
        $eventSupports = Expense::all();
        return view('admin.pages.expense.index', compact('eventSupports'));
    }


}
