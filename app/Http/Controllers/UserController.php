<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    /**
     * @throws ValidationException
     */
    public function postSignup(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
            'name' => 'required'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password'=> bcrypt($request->input('password')),
            'name' => $request->input('name')
        ]);
        $user->save();

        return redirect()->route('user.profile');
    }

    public function getLogin()
    {
        return view('user.login');
    }

    /**
     * @throws ValidationException
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile()
    {
        return view('user.profile');
    }
}
