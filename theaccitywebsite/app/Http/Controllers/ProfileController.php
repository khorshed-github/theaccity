<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends GlobalController
    {
        
    public function index(){
        $profile = DB::table('users')->get();
        return view('admin/user-profile')
        ->with('globalinfo',$this->globalinfo())
        ->with('profiles',$profile); 
    }
    
    public function addProfile(){
        return view('admin/addProfile')
        ->with('globalinfo',$this->globalinfo());
    }


    public function ProfileRegisterForm(Request $request)
        {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'type' => 'required|int|max:1',
            'status' => 'required|int|max:1',
        ]);

        // Insert data into the 'customers' table
        $inserted = DB::table('users')->insert([
            'name' => $validatedData['name'],
            'number' => $validatedData['number'] ?? null,
            'password' => Hash::make($validatedData['password']) ?? null,
            'type' => $validatedData['type'] ?? null,
            'status' => $validatedData['status'] ?? null,
        ]);

        // Return response
        if ($inserted) {
            return response()->json(['success'=>1,'message' => 'Profile information has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added Profile Info.'], 500);
        }
    }

    public function updateProfileForm(Request $request)
        {
        $request->validate([
            'id' => 'required|integer|exists:users,id',
            'name' => 'required|string|max:255',
            'number' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
        ]);
    
        $updated = DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'number' => $request->number,
            'password' => Hash::make($request->password),
            'type' => $request->type,
            'status' => $request->status,
        ]);
    
        // Return response
        if ($updated) {
            return response()->json(['success'=>1,'message' => 'Profile information has been updated successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to update Profile Info.'], 500);
        }
    }

}
