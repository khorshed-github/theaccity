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
        $agents = Application::orderBy('id', 'desc')->get();
        $pending = Application::where('status', 'pending')->count();
        $approved = Application::where('status', 'approved')->count();
        $rejected = Application::where('status', 'rejected')->count();

        return view('admin/agents')
            ->with('globalinfo', $this->globalinfo())
            ->with('agents', $agents)
            ->with('pending', $pending)
            ->with('approved', $approved)
            ->with('rejected', $rejected);
    }

    public function agent_update_status(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'admin_note' => 'nullable|string|max:1000',
        ]);

        $application = Application::findOrFail($id);
        $application->status = $request->status;
        $application->admin_note = $request->admin_note;
        $application->save();

        return back()->with('success', 'Application status updated successfully.');
    }

    public function agent_destroy($id)
    {
        Application::findOrFail($id)->delete();
        return back()->with('success', 'Application deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20|unique:applications,number',
            'email' => 'required|email|max:255|unique:applications,email',
            'address' => 'required|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'country' => 'nullable|string|max:100',
        ]);

        Application::create($validated);

        return back()->with('success', 'Your application has been submitted successfully! We will review it and get back to you soon.');
    }

}
