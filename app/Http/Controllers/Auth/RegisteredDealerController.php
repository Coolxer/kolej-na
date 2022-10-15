<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Dealer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredDealerController extends Controller
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
            'first_name' => ['required', 'string', 'min:3', 'max:50'],
            'last_name' => ['required', 'string', 'min:3', 'max:50'],
            'company' => ['required', 'string', 'min:3', 'max:50'],
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                'unique:dealers',
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        $dealer = Dealer::create([
            'first_name' => !$request->is_company ? $request->first_name : null,
            'last_name' => !$request->is_company ? $request->last_name : null,
            'company' => $request->is_company ? $request->company : null,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($dealer));

        Auth::login($dealer);

        return redirect(RouteServiceProvider::HOME);
    }
}
