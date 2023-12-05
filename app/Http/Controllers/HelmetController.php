<?php

namespace App\Http\Controllers;

use App\Models\Helmet;
use Illuminate\Http\Request;

class HelmetController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $helmets = Helmet::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/helmets/index', [
            'helmets' => $helmets,
        ]);
    }

    public function create()
    {
        return inertia('admin/helmets/create');
    }

    public function store(Request $request)
    {
        Helmet::create([
            'name' => $request->name,
        ]);
        return redirect()->route('helmets.index');
    }

    public function edit(Helmet $helmet)
    {
        return inertia('admin/helmets/edit', compact('helmet'));
    }

    public function update(Request $request, Helmet $helmet)
    {
        $helmet->update([
            'name' => $request->name,
        ]);
        return redirect()->route('helmets.index');
    }

    public function destroy(Helmet $helmet)
    {
        $helmet->delete();
        return redirect()->route('helmets.index');
    }
}
