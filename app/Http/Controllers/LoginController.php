<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index () {
        return view('site.login', ['title' => 'Login']);
    }

    public function authenticate(Request $request) {

        // Validate rules.
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        // Custom messages.
        $messages = [
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field must be a valid email address.',
            'password.required' => 'The password field is required.'
        ];

        $request->validate($rules, $messages);

        print_r($request->all());
    }
}
