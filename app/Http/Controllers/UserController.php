<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart;

class UserController extends Controller
{
    public function showSignup()
    {
        return view('user.home');
    }
    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => "required",
            'password' => "required"
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if (Hash::check($request->password, $user->password)) {
            // Update session with user information
            auth()->login($user);

            // Continue with your existing logic
            if ($user->is_Admin == 0) {
                return redirect('/admin');
            } else {
                return redirect(route('home'));
            }
        } else {
            return back()->with('fail', 'The password does not match');
        }
    }
    public function signup(Request $request)
    {
        $request->validate([
            'username' => "required|unique:users",
            'email' => "required|email|unique:users",
            'password' => "required|min:5"
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have register success');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
