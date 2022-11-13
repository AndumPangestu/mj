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
        $deposit = DB::table('deposits')
            ->where('id_user', '=', $request->id)
            ->sum('deposits_value');

        $withdraw = DB::table('withdraws')
            ->where('id_user', '=', $request->id)
            ->sum('withdraws_value');

        $saldo = $deposit - $withdraw;

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
