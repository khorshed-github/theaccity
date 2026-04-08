<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuController extends GlobalController
{
    public function index(){
        $salesman = DB::table('menu')->get();
        return view('admin/menu')
        ->with('globalinfo',$this->globalinfo())
        ->with('menu',$salesman); 
    }
    
    public function addMenuForm(){
        
        return view('admin.addMenu')
        ->with('globalinfo',$this->globalinfo());
    }


    public function MenuRegisterForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        // Insert data into the 'customers' table
        $inserted = DB::table('menu')->insert([
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
            'loginid' =>  Auth::id(), // Assuming the user is authenticated
            'created_at' => now(),
            'updated_at' => now(),
            'login_username' => Auth::getUser()->name,
            'status'  => 1,
        ]);

        // Return response
        if ($inserted) {
            
            return response()->json(['success'=>1,'message' => 'Menu information has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added Menu Info.'], 500);
        }
    }



    public function updateMenuForm(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:menu,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
    
        $updated = DB::table('menu')->where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'login_username' => Auth::getUser()->name,
            'updated_at' => now(),
        ]);
    
        // Return response
        if ($updated) {
            
            return response()->json(['success'=>1,'message' => 'Menu information has been updated successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to update Menu Info.'], 500);
        }
    }

}
