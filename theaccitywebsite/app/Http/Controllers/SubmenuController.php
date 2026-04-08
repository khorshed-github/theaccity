<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubMenuController extends GlobalController
{
    public function index(){
        $submenu = DB::table('submenu')
        ->leftJoin('menu', 'submenu.menuid', '=', 'menu.id') // Join suppliers table
        ->select('submenu.*', 'menu.name as menu_name') // Select necessary fields
        ->get();


        return view('admin/submenu')
        ->with('globalinfo',$this->globalinfo())
        ->with('submenu',$submenu); 
    }
    public function addSubmenu(){
        $submenu = DB::table('menu')->get();
        return view('admin/addSubmenu')
        ->with('globalinfo',$this->globalinfo())
        ->with('menu',$submenu);
    }


    public function SubmenuRegisterForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'menuid' => 'required|numeric', 
            'name' => 'nullable|string',
            'slug' => 'nullable|string',
        ]);

        // Insert data into the 'submenu' table
        $inserted = DB::table('submenu')->insert([
            'menuid' => $validatedData['menuid'],
            'name' => $validatedData['name'] ?? null,
            'slug' => $validatedData['slug'] ?? null,
            'loginid' =>  Auth::id(), // Assuming the user is authenticated
            'created_at' => now(),
            'updated_at' => now(),
            'login_username' => Auth::getUser()->name,
            'status'  => 1,
        ]);

        // Return response
        if ($inserted) {
            return response()->json(['success'=>1,'message' => 'Submenu information has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added Submenu Info.'], 500);
        }
    }



    public function updateSubmenuForm(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:submenu,id',
            'name' => 'nullable|string',
            'slug' => 'nullable|string',
        ]);
    
        $updated = DB::table('submenu')->where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'updated_at' => now(),
        ]);
    
        // Return response
        if ($updated) {
            
            return response()->json(['success'=>1,'message' => 'Submenu information has been updated successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to update Submenu Info.'], 500);
        }
    }

}
