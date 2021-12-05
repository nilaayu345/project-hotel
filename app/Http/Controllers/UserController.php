<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function registration() {
        return view('auth.register');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function saveRegistration(Request $request) {
        $validator = Validator::make($request->all(), array(
            'name'          => 'required | string | max:100',
            'email'         => 'required| unique:users,email',
            'password'      => 'required | confirmed',
            'phone'         => 'required',
        ));

        if ($validator->fails()) 
        {
            return redirect()
                ->route('registration')
                ->with('error.alert', 'Registrasi gagal');
        }

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'phone' => $request->get('phone'),
        ]);

        return redirect()->route('login');
    }
}
