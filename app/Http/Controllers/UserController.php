<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    /**
     * @throws ValidationException
     */
    public function postSignup(Request $request)
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

        return redirect()->route('product.index');
    }
}
