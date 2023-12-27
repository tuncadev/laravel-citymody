<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
					'name' => ['required', 'min:3'],
					'email' => ['required', 'email', Rule::unique('users', 'email')],
					'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
				$formFields['type'] = "talent";

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect()->back()->with('success', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
			//	dd(Config::get('app.locale'));
        return redirect()->back()->with('success', __('messages.flash-messages.success.logout'));

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect()->back()->with('success', 
						__('messages.flash-messages.greetings.welcome') . ", " . 
						Auth::user()->name . " ! " . 
						__('messages.flash-messages.success.login')
					);
        }

        return back()->withErrors(['email' => __('messages.flash-messages.danger.wrong-credentials')])->onlyInput('email')->with('danger', __('messages.flash-messages.danger.wrong-credentials'));
    }
}