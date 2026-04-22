<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CareerController extends GlobalController
{
    public function index()
    {
        return view('web/career');
    }

    public function career_request()
    {
        $careers = Career::orderBy('id', 'desc')->get();
        return view('admin/careers')
            ->with('globalinfo', $this->globalinfo())
            ->with('careers', $careers);
    }

    public function destroy($id)
    {
        Career::findOrFail($id)->delete();
        return back()->with('success', 'Application deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName'    => 'required|string|max:255',
            'address'     => 'required|string',
            'phone'       => 'required|string|max:20',
            'email'       => 'required|email|max:255',
            'immigration' => 'required|string',
            'nationality' => 'required|string|max:255',
            'education'   => 'required|string',
            'cv'          => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('cv')) {
            $fileName = time() . '_' . $request->file('cv')->getClientOriginalName();
            $request->file('cv')->move(public_path('assets/images/cvs'), $fileName);
            $validated['cv'] = 'assets/images/cvs/' . $fileName;
        }

        // Save in DB
        Career::create($validated);

        // Send email to admin
        $adminEmail = 'info@theaccity.com';
        $cvFullPath = $request->hasFile('cv') ? public_path($validated['cv']) : null;
        
        Mail::to($adminEmail)->send(new CareerMail($validated, $cvFullPath));

        return back()->with('success', 'Application submitted successfully!');
    }
}
