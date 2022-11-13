<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function add_deposit(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deposits_value' => 'required',
            'deposits_total' => 'required',
            'deposits_date' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/deposit'), $imageName);

        $deposit = new Deposit([
            'image' => $imageName,
            'id_user' => $request->id_user,
            'deposits_value' => $request->deposits_value,
            'deposits_total' => $request->deposits_total,
            'deposits_date' => $request->deposits_date

        ]);

        $deposit->save();
        $request->session()->regenerate();
        return redirect()->route('admin.addads')->with('success', 'data updated!');
    }
}
