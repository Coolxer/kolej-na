<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => [
                'required_without:is_company',
                'nullable',
                'string',
                'min:3',
                'max:50',
            ],
            'last_name' => [
                'required_without:is_company',
                'nullable',
                'string',
                'min:3',
                'max:50',
            ],
            'company' => [
                'required_with:is_company',
                'nullable',
                'string',
                'min:3',
                'max:50',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                'unique:users',
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password'],
            'terms_of_service' => ['required', 'accepted'],
            'policy' => ['required', 'accepted'],
        ]);

        $user = User::create([
            'first_name' => !$request->is_company ? $request->first_name : null,
            'last_name' => !$request->is_company ? $request->last_name : null,
            'company' => $request->is_company ? $request->company : null,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
