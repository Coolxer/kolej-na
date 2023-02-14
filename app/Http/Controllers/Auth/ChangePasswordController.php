<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Rules\MatchOldPasswordRule;
use App\Models\User;

class ChangePasswordController extends Controller
{
    /**
     * Display the change-password view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.change_password');
    }

    /**
     * Handle an incoming change-password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new MatchOldPasswordRule()],
            'new_password' => ['required', Rules\Password::defaults()],
            'confirm_new_password' => ['required', 'same:new_password'],
        ]);

        # update user password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'Hasło zostało zmienione!');
    }
}
