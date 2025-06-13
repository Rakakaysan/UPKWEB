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
            // $user = Auth::guard("web")->user();
            // return response()->json([
            //     "login_ok" => "ok",
            //     "user" => $user
            // ]);

            return redirect("/");

            // return redirect()->route("dashboardSiswa");
        }

        return redirect()->route("login")->with("errors", "Username atau password salah");
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("login"));
    }

    public function loginAdminView()
    {
        return view('public.login_admin');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = [
            "username" => $request->input("username"),
            "password" => $request->input("password"),
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            // $user = Auth::guard("web")->user();
            // return response()->json([
            //     "login_ok" => "ok",
            //     "user" => $user
            // ]);

            return redirect(route('manajemen_pengguna.index'));

            // return redirect()->route("dashboardSiswa");
        }

        return redirect()->route("login.admin")->with("errors", "Username atau password salah");
    }

    public function logoutAdmin()
    {
        auth("admin")->logout();

        return redirect(route("login.admin"));
    }
}
