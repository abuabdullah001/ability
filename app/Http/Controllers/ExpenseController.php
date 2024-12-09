<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Transection;

class ExpenseController extends Controller
{
    public function store(Request $request)
    {
        $eventSupport = new Expense();
        $eventSupport->event_id = $request->event_id;
        $eventSupport->amount = $request->amount;
        $eventSupport->note = $request->note;
        $eventSupport->save();

        return redirect()->route('event_support.index')->with('success', 'Expense information saved successfully!');
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
