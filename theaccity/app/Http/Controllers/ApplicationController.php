<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends GlobalController
{
    
    public function agent_request()
    {
        $cm = Application::all();
        return view('admin/agents')
            ->with('globalinfo', $this->globalinfo())
            ->with('agent', $cm);
    } 
    
   public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'number'     => 'required|string|max:20|unique:applications,number',
            'email'      => 'required|email|max:255|unique:applications,email',
            'address'    => 'required|string|max:255',
            'occupation' => 'nullable|string|max:255',
        ]);
    
        Application::create($validated);
    
        return back()->with('success', 'Application submitted successfully.');
    }

}

