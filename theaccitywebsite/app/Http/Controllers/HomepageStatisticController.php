<?php

namespace App\Http\Controllers;

use App\Models\HomepageStatistic;
use Illuminate\Http\Request;

class HomepageStatisticController extends GlobalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = HomepageStatistic::orderBy('display_order')->get();
        return view('admin.statistics.index', compact('statistics'))
               ->with('globalinfo', $this->globalinfo());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistics.add')
               ->with('globalinfo', $this->globalinfo());
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|integer',
            'suffix' => 'nullable|string|max:10',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'integer',
        ]);

        $input = $request->all();

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $name = $image->hashName();
            $destinationPath = public_path('/web-assets/imgs/statistics');
            $image->move($destinationPath, $name);
            $input['icon'] = 'web-assets/imgs/statistics/' . $name;
        }

        HomepageStatistic::create($input);

        return redirect()->route('admin.statistics.index')
                        ->with('success', 'Statistic created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $statistic = HomepageStatistic::findOrFail($id);
        return view('admin.statistics.edit', compact('statistic'))
               ->with('globalinfo', $this->globalinfo());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|integer',
            'suffix' => 'nullable|string|max:10',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'integer',
        ]);

        $statistic = HomepageStatistic::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $name = $image->hashName();
            $destinationPath = public_path('/web-assets/imgs/statistics');
            $image->move($destinationPath, $name);
            $input['icon'] = 'web-assets/imgs/statistics/' . $name;
            
            // Optional: Delete old image if exists
            /*
            if(file_exists(public_path($statistic->icon))){
                unlink(public_path($statistic->icon));
            }
            */
        }

        $statistic->update($input);

        return redirect()->route('admin.statistics.index')
                        ->with('success', 'Statistic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $statistic = HomepageStatistic::findOrFail($id);
        
        // Optional: Delete image
        /*
        if(file_exists(public_path($statistic->icon))){
            unlink(public_path($statistic->icon));
        }
        */
        
        $statistic->delete();

        return redirect()->route('admin.statistics.index')
                        ->with('success', 'Statistic deleted successfully.');
    }
}
