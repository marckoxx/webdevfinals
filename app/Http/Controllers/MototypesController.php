<?php

namespace App\Http\Controllers;

use App\Models\Mototypes;
use Illuminate\Http\Request;

class MototypesController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $types = Mototypes::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/types/index', [
            'types' => $types,
        ]);
    }

    public function create()
    {
        return inertia('admin/types/create');
    }

    public function store(Request $request)
    {
        Mototypes::create([
            'name' => $request->name,
        ]);
        return redirect()->route('types.index');
    }

    public function edit(Mototypes $type)
    {
        return inertia('admin/types/edit', compact('type'));
    }

    public function update(Request $request, Mototypes $type)
    {
        $type->update([
            'name' => $request->name,
        ]);
        return redirect()->route('types.index');
    }

    public function destroy(Mototypes $type)
    {
        $type->delete();
        return redirect()->route('types.index');
    }
}
