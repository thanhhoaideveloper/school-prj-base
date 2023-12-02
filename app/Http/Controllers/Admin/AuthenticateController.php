<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\OldPasswordRule;
use Illuminate\Support\Facades\Hash;

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

    public function changPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new OldPasswordRule],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        $user = Auth::user();
        $user->find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        request()->session()->flash('success', 'Đổi mật khẩu thành công!');
        return redirect()->route('admin.dashboard');
    }

    public function changePasswordPage(){
        return view("admin.pages.auth.changepassword");
    }
}
