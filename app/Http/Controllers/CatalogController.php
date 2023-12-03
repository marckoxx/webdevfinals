<?php

namespace App\Http\Controllers;

use App\Models\Motorcycles;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CatalogController extends Controller
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
        })->paginate(10);

        return inertia('catalog', [
            'motorcycles' => $motorcycles,
        ]);
    }
}
