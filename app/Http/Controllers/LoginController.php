<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('public.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            "username" => $request->input("username"),
            "password" => $request->input("password"),
        ];




        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard("web")->user();
            return response()->json([
                "login_ok" => "ok",
                "user" => $user
            ]);

            // return redirect()->route("dashboardSiswa");
        }

        return response()->json([
            "login_ok" => "false",
        ]);

        return redirect()->route("login")->with("error", "Username atau password salah");
    }
}
