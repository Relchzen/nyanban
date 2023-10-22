<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (auth()->attempt($validate)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('');
    }


    public function signup()
    {
        $validate = request()->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'birthdate' => 'required',
                'gender' => 'required',
                'email' => 'required|email|unique:users,email',
                'username' => 'required|min:5|max:30|unique:users,username',
                'password' => 'required|confirmed|min:8|max:40'
            ]
        );

        $validate['password'] = bcrypt($validate['password']);

        $user = User::create($validate);

        auth()->login($user);

        return redirect('/');
    }
}
