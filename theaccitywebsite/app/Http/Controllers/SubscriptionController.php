<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class SubscriptionController extends GlobalController
{
    
    public function subscribe_request()
    {
        $cm = Subscription::latest('id')->get();
        return view('admin/subscribes')
            ->with('globalinfo', $this->globalinfo())
            ->with('subscribes', $cm);
    }  
    
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:subscriptions,email',
        ]);

        Subscription::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Thank you for subscribing!'
        ]);
    }
}

