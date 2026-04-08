<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ContactController extends GlobalController
{
    
    public function contact_request()
    {
        $cm = Contact::latest('id')->get();
        return view('admin/contact')
            ->with('globalinfo', $this->globalinfo())
            ->with('contact', $cm);
    }  
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email|max:255',
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:255',
            'textarea' => 'nullable|string',
        ]);
    
        // Save message in DB
        $contact = Contact::create($validated);
    
        // Send email to the user and CC to admin
        Mail::to($contact->email)
            ->cc('info@theaccity.com')
            ->send(new ContactMail($validated));
    
        return back()->with('success', 'Message sent successfully! Confirmation email sent.');
    }
}

