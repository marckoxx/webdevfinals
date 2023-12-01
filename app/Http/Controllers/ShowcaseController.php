<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Mototypes;
use App\Models\Motorcycles;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function show(Motorcycles $motorcycle)
    {
        $motorcycle->load('brand');
        $motorcycle->load('type');
        return inertia('showcase', compact('motorcycle'));
    }
}
