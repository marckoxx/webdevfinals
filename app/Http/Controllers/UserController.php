<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barangay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $users = User::with(['barangay'])
            ->when($search, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhereHas('barangay', function ($query) use ($search) {
                            $query->where('name', 'like', '%' . $search . '%');
                        });
                });
            })->get();

        return inertia('admin/users/index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $barangays = Barangay::all();
        return inertia('admin/users/create', [
            'barangays' => $barangays,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Password::defaults()],
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
            'is_admin' => $request->is_admin,
        ];

        if ($request->filled('phone_number')) {
            $userData['phone_number'] = $request->phone_number;
        }

        User::create($userData);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        $barangays = Barangay::all();
        return inertia('admin/users/edit', compact('user', 'barangays'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'type_id' => $request->type_id,
            'year' => $request->year,
            'daily_rate' => $request->daily_rate,
            'availability' => $request->availability,
        ]);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
