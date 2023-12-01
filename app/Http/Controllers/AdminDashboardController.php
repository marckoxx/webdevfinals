<?php

namespace App\Http\Controllers;

use App\Models\Motorcycles;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $motorcycles = Motorcycles::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/dashboard', [
            'motorcycles' => $motorcycles,
        ]);
    }
}
