<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $error = '';
        if ($request->get('error') == 1) {
            $error = 'Invalid credentials.';
        }

        return view('site.login', ['title' => 'Login', 'error' => $error]);
    }

    public function authenticate(Request $request)
    {
        // Validate rules.
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Custom messages.
        $messages = [
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field must be a valid email address.',
            'password.required' => 'The password field is required.',
        ];

        $request->validate($rules, $messages);

        $email = $request->input('email');
        $password = $request->input('password');

        // Check if the user exists.
        $user = User::where('email', $email)->where('password', $password)->get()->first();

        if (isset($user->name)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('client.index');
        } else {
            return redirect()->route('site.login', ['error' => 1])->with('error', 'Invalid credentials.');
        }
    }

    public function logout()
    {
        if (isset($_SESSION['name'])) {
            session_destroy();
        }

        return redirect()->route('site.login');
    }
}