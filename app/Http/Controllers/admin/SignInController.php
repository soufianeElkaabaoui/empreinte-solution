<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (!Company::find(1)) {
                return view('admin.company_information');
            }
            return redirect()->intended('/master/home');
        }

        return back()->withErrors([
            'status' => 'Les données saisis ne sont pas correctes.',
        ]);
    }
}
