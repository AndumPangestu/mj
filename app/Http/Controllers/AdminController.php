<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function profile()
    // {
    //     return view('user/profiluser');
    // }

    // public function update_user(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'contact_number' => 'required',
    //         'address' => 'required',

    //     ]);

    //     $user = User::find(Auth::user()->id);

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->contact_number = $request->contact_number;
    //     $user->address = $request->address;
    //     $user->save();
    //     $request->session()->regenerate();
    //     return redirect()->route('profile')->with('success', 'data updated!');
    // }

    // public function change_password()
    // {
    //     return view('user/change-password');
    // }

    // public function password_action(Request $request)
    // {
    //     $request->validate([
    //         'password' => 'required',
    //         'confirm_password' => 'required|same:password',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return redirect()->route('profile')->with('success', 'Password changed!');
    // }


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

    public function user_list()
    {
        $user =  DB::table("users")->where('role', 1)->get();
        $data = array(
            'id' => "users",
            'users' => $user
        );
        return view('Admin/ListUserAdmin')->with($data);
    }


    public function operator_list()
    {
        $operator =  DB::table("users")->where('role', 2)->get();
        $data = array(
            'id' => "users",
            'users' => $operator
        );
        return view('Admin/ListOperatorAdmin')->with($data);
    }

    public function ads_page()
    {
        $ads =  DB::table("ads")->get();
        $data = array(
            'id' => "users",
            'users' => $ads
        );
        return view('Admin/AdsPage')->with($data);
    }

    public function deposit(Request $request)
    {
        // $deposit = DB::table("deposits")->sum('deposits_value')->where('id_user', $user->id)->get();
        // $withdraw = DB::table("withdraws")->sum('withdraws_value')->where('id_user', $user->id)->get();
        $saldo = 5;

        $data = array(
            'users' => User::find($request->id),
            'saldo' => $saldo
        );
        return view('admin/AddDepositeAdmin')->with($data);
    }


    public function withd(User $user)
    {
        $deposit = DB::table("deposits")->sum('deposit_value')->where('user_id', $user->id)->get();
        $withdraw = DB::table("withdraws")->sum('withdraw_value')->where('user_id', $user->id)->get();
        $saldo = $deposit - $withdraw;

        $data = array(
            'users' => User::find($user->id),
            'saldo' => $saldo
        );
        return view('companies.edit')->with($data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->intended('login-');
    }
}
