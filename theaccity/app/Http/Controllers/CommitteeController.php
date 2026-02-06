<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CommitteeController extends GlobalController
{
    public function index()
    {
        $committee = Committee::where('status', '1')->get();
        $division = DB::table('divisions')->get();
        return view('admin.committee', compact('committee', 'division'))
        ->with('globalinfo', $this->globalinfo());
    }

    public function committee_store(Request $request)
    {
        $request->validate([
            'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $fileName = null;
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/committee'), $fileName);
        }

        $committee = Committee::updateOrCreate(
            ['id' => $request->id],
            [
                'year' => $request->year,
                'area_id' => $request->committee_area,
                'division_id' => $request->divisions,
                'district_id' => $request->districts,
                'upazila_id' => $request->upazilas,
                'union_id' => $request->unions,
                'name' => $request->name,
                'designation' => $request->designation,
                'number' => $request->number,
                'email' => $request->email,
                'address' => $request->address,
                'details' => $request->details,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'file_name' => $fileName,
                'status' => $request->status ? 1 : 0,
                'loginid' => Auth::id(),
            ]
        );

        return response()->json(['success' => true, 'message' => 'Committee saved successfully!']);
    }

    public function committee_edit($id)
    {
        $committee = Committee::find($id);
        if (!$committee) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($committee);
    }

    public function committee_destroy($id)
    {
        $committee = Committee::findOrFail($id);
        if ($committee->file_name && file_exists(public_path('assets/images/committee/' . $committee->file_name))) {
            unlink(public_path('assets/images/committee/' . $committee->file_name));
        }
        $committee->delete();
        return response()->json(['success' => true]);
    }
    
    public function website_panel_committee_show()
    {
        $committee = Committee::where('status', '1')->get();
        $division = DB::table('divisions')->get();
        return view('web.committee-info', compact('committee', 'division'));
    }
    
    
    
}


