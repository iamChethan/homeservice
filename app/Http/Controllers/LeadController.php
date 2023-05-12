<?php

namespace App\Http\Controllers;
use App\Models\lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\EmailDemo;

class LeadController extends Controller
{
    
    // The user is logged in...

    public function index()
    {
        if (Auth::check()) {
            $leads = Lead::orderBy('id','desc')->paginate(5);
            return view('leads.index', compact('leads'));
        }
    else{
        return redirect()->route('login');
    }
    }

    // public function index()
    // {
    //     return view('index');
    // }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);
        
        Lead::create($request->post());
        $email='chethan.praveen@gmail.com';
        //Mail::to($email)->send(new EmailDemo($request));
        return redirect()->route('home')->with('status','Lead has been created successfully.');
        
    }

    public function show(Lead $lead)
    {
        if (Auth::check()) {
        return view('leads.show',compact('lead'));
         }
    else{
        return redirect()->route('login');
    }
    }

    public function edit(Lead $lead)
    {
        if (Auth::check()) {
        return view('leads.edit',compact('lead'));
        }
    else{
        return redirect()->route('login');
    }
    }

    public function update(Request $request, Lead $lead)
    {
         if (Auth::check()) {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);
        
        $lead->fill($request->post())->save();

        return redirect()->route('leads.index')->with('success','Lead Has Been updated successfully');
         }
    else{
        return redirect()->route('login');
    }
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('success','Lead has been deleted successfully');
    }
    
}