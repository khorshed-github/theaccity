<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Qa;

class QaController extends GlobalController
{

    public function Question_answer(){
        $qa = Qa::where('status',1)
        ->orderBy('id','DESC')
        ->get();
        return view('admin/question-answer')
        ->with('globalinfo',$this->globalinfo())
        ->with('qaa',$qa);
    }


    public function Question_answer_Store(Request $request)
        {
        // Validate form data
        $validatedData = $request->validate([
            'type' => 'required|string', 
            'question' => 'required|string',
        ]);

        // Insert data into the 'submenu' table
        $inserted =  Qa::updateOrCreate(
        ['id' => $request->id],
        [
            'type' => $validatedData['type'],
            'question' => $validatedData['question'],
            'answer' => $request->answer,
            'loginid' =>  Auth::id(), // Assuming the user is authenticated
            'created_at' => now(),
            'updated_at' => now(),
            'status'  => 1,
        ]);

        // Return response
        if ($inserted) {
            return response()->json(['success'=>1,'message' => 'Submenu information has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added Submenu Info.'], 500);
        }
    }


    public function Question_answer_Edit($id)
       {
        $slider = Qa::find($id);
    
        if (!$slider) {
            return response()->json(['error' => 'Question & Answer not found'], 404);
        }
    
        return response()->json($slider);
        }
    
    
    public function Question_answer_Destroy($id)
        {
            $slider = Qa::findOrFail($id);
        
            // Delete the slider from the database
            $slider->delete();
        
            return response()->json(['success' => true]);
        }

}
