<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;


class AdsController extends Controller
{
    public function add_iklan(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'running_text' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/iklan'), $imageName);

        $iklan = new Ads([
            'image' => $imageName,
            'running_text' => $request->running_text

        ]);

        $iklan->save();
        $request->session()->regenerate();
        return redirect()->route('admin.addads')->with('success', 'data updated!');
    }
}
