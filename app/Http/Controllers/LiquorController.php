<?php

namespace App\Http\Controllers;

use App\Models\Liquor;
use Illuminate\Http\Request;

class LiquorController extends Controller
{
    public function index()
    {
        $liquors = Liquor::all();
        return view('liquor.index', compact('liquors'));
    }

    public function show($id)
    {
        $liquors = Liquor::all();
        $liquor = Liquor::findOrFail($id);
        return view('liquor.show', compact('liquors', 'liquor'));
    }
}
