<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends GlobalController
{
    /**
     * Display settings management page
     */
    public function index()
    {
        $allSettings = Setting::all();
        $headerSettings = $allSettings->where('setting_group', 'header');
        $footerSettings = $allSettings->where('setting_group', 'footer');
        $homepageSettings = $allSettings->where('setting_group', 'homepage');
        
        return view('admin.settings.index', compact('headerSettings', 'footerSettings', 'homepageSettings'))
               ->with('globalinfo', $this->globalinfo());
    }
    
    /**
     * Update settings
     */
    public function update(Request $request)
    {
        try {
            foreach ($request->except('_token') as $key => $value) {
                // Skip file uploads for now, handle separately
                if ($request->hasFile($key)) {
                    $file = $request->file($key);
                    $filename = $file->hashName();
                    $file->move(public_path('assets/images/settings'), $filename);
                    $value = 'assets/images/settings/' . $filename;
                }
                
                Setting::where('setting_key', $key)->update(['setting_value' => $value]);
            }
            
            return redirect()->back()->with('success', 'Settings updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating settings: ' . $e->getMessage());
        }
    }
    
    /**
     * Get settings by group for AJAX
     */
    public function getByGroup($group)
    {
        $settings = Setting::where('setting_group', $group)->get();
        return response()->json($settings);
    }
}
