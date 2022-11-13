<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserController extends Controller
{


    public function profile()
    {
        return view('user/profiluser');
    }

    public function profileadmin()
    {
        return view('admin/ProfileAdmin');
    }

    public function update_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'address' => 'required',

        ]);

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->save();
        $request->session()->regenerate();

        if (Auth::user()->role == 1) {
            return redirect()->route('profile')->with('success', 'data updated!');
        } else  if (Auth::user()->role == 3) {

            return redirect()->route('profileadmin')->with('success', 'data updated!');
        }
    }

    public function change_password()
    {
        return view('user/change-password');
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->regenerate();
        if (Auth::user()->role == 1) {
            return redirect()->route('profile')->with('success', 'data updated!');
        } else  if (Auth::user()->role == 3) {

            return redirect()->route('profileadmin')->with('success', 'data updated!');
        }
    }
}
