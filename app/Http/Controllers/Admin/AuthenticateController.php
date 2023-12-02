<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function loginPage()
    {
        return view("admin.pages.auth.login");
    }

    public function loginHandle(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        flash()->addError(AUTHENTICATE_ERROR);
        return redirect()->route('login');
    }

    public function userLogout()
    {
        Auth::logout();
        request()->session()->flash('success', 'Đăng xuất thành công!');
        return back();
    }
}
