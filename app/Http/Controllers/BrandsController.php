<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $brands = Brands::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/brands/index', [
            'brands' => $brands,
        ]);
    }

    public function create()
    {
        return inertia('admin/brands/create');
    }

    public function store(Request $request)
    {
        Brands::create([
            'name' => $request->name,
        ]);
        return redirect()->route('brands.index');
    }

    public function edit(Brands $brand)
    {
        return inertia('admin/brands/edit', compact('brand'));
    }

    public function update(Request $request, Brands $brand)
    {
        $brand->update([
            'name' => $request->name,
        ]);
        return redirect()->route('brands.index');
    }

    public function destroy(Brands $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
