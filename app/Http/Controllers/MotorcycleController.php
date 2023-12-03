<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Motorcycles;
use App\Models\Mototypes;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{

    public function index(Request $request)
    {

        $search = $request->input('search');

        $motorcycles = Motorcycles::with(['brand', 'type'])
        ->when($search, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('model', 'like', '%' . $search . '%')
                    ->orWhereHas('brand', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('type', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    });
            });
        })->get();

        return inertia('admin/motorcycles/index', [
            'motorcycles' => $motorcycles,
        ]);
    }

    public function create()
    {
        $brands = Brands::all();
        $types = Mototypes::all();
        return inertia('admin/motorcycles/create', [
            'brands' => $brands,
            'types'=> $types,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'model' => 'required',
            'type_id' => 'required',
            'year' => 'required|numeric',
            'daily_rate' => 'required|numeric',
            'availability' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif', // Adjust max size as needed
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->model . $request->year .  '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName; // change during deployment
        }

        Motorcycles::create([
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'type_id' => $request->type_id,
            'year' => $request->year,
            'daily_rate' => $request->daily_rate,
            'availability' => $request->availability,
            'image_path' => $imagePath, // Store the path to the image in the database
        ]);

        return redirect()->route('motorcycles.index');
    }

    public function edit(Motorcycles $motorcycle)
    {
        $brands = Brands::all();
        $types = Mototypes::all();
        return inertia('admin/motorcycles/edit', compact('motorcycle', 'brands', 'types'));
    }

    public function update(Request $request, Motorcycles $motorcycle)
    {
        $motorcycle->update([
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'type_id' => $request->type_id,
            'year' => $request->year,
            'daily_rate' => $request->daily_rate,
            'availability' => $request->availability,
        ]);
        return redirect()->route('motorcycles.index');
    }

    public function destroy(Motorcycles $motorcycle)
    {
        $motorcycle->delete();
        return redirect()->route('motorcycles.index');
    }
}
