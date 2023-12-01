<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Barangay;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        $barangays = Barangay::all(); // Fetch all barangay data
        return inertia('Auth/Register', ['barangays' => $barangays]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_number' => 'nullable|string|max:20', // Making phone_number nullable
            'street' => 'required|string|max:255',
            'sex' => 'required|in:male,female,other',
            'barangay_id' => 'required|exists:barangays,id'
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'street' => $request->street,
            'barangay_id' => $request->barangay_id,
            'sex' => $request->sex,
        ];

        if ($request->filled('phone_number')) {
            $userData['phone_number'] = $request->phone_number;
        }

        $user = User::create($userData);


        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
