<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function create()
    {
        return view('users');
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
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

        User::create($validate);

        return redirect()->route('admin.users');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.detail', compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        $validate = $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'birthdate' => 'required',
                'gender' => 'required',
                'email' => 'required|email',
                'username' => 'required|min:5|max:30',
                'is_admin' => ''
            ]
        );

        if ($request->is_admin == 'on') {
            $validate['is_admin'] = 1;
        } elseif ($request->is_admin == 'off') {
            $validate['is_admin'] = 0;
        }

        // dd($validate);

        $user->update($validate);

        return redirect()->route('admin.users');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('admin.users');
    }
}
