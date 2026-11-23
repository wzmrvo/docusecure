<?php

namespace App\Http\Controllers;

use App\Models\SystemSetting;
use Illuminate\Http\Request;

class SystemSettingController extends Controller
{
    public function index()
    {
        $settings = SystemSetting::query()->orderBy('key')->get();

        return view('admin.system-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'settings' => ['required', 'array'],
            'settings.*' => ['nullable', 'string', 'max:5000'],
        ]);

        foreach ($validated['settings'] as $key => $value) {
            SystemSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value],
            );
        }

        return back()->with('success', 'System settings updated.');
    }
}
