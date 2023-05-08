<?php

namespace App\Http\Controllers;
use App\Models\lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    
    public function leadindex()
    {
        $leads = Lead::orderBy('id','desc')->paginate(5);
        return view('leads.index', compact('leads'));
    }

    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);
        
        Lead::create($request->post());

        return redirect()->route('leads.index')->with('status','Lead has been created successfully.');
    }

    public function show(Lead $lead)
    {
        return view('leads.show',compact('lead'));
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit',compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);
        
        $lead->fill($request->post())->save();

        return redirect()->route('leads.index')->with('success','Lead Has Been updated successfully');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('success','Lead has been deleted successfully');
    }
}