<?php

namespace App\Http\Controllers;



use App\Models\User;
use App\profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class MainController extends Controller
{
    public function register()
    {
        return view('registration');
    }



    public function register_action(Request $request)
    {
        // return request()->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);


        $role = 1;

        if (Auth::check()) {

            $role = 2;
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'password' => Hash::make($request->password),
            'role' => $role
        ]);

        $user->save();
        if (Auth::check()) {
            return redirect()->route('operator.list')->with('success', 'Registration success. Please login!');
        } else {
            return redirect()->route('login-')->with('success', 'Registration success. Please login!');
        }
    }


    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();


            if (Auth::user()->role == 1) {
                return redirect()->intended('/homepage');
            } else if (Auth::user()->role == 2) {
                return redirect()->intended('/operator-homepage');
            } else if (Auth::user()->role == 3) {
                return redirect()->intended('/admin-homepage');
            }
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    // public function password()
    // {
    //     $data['title'] = 'Change Password';
    //     return view('user/password', $data);
    // }

    // public function password_action(Request $request)
    // {
    //     $request->validate([
    //         'old_password' => 'required|current_password',
    //         'new_password' => 'required|confirmed',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return back()->with('success', 'Password changed!');
    // }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->intended('login-');
    }
}
