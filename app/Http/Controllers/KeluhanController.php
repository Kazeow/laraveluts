<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::all();
        return view('keluhan.index', compact('keluhans'));
    }

    public function create()
    {
        return view('keluhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keluhan' => 'required|min:3|unique:keluhans,keluhan',
            'biaya' => 'required'
        ]);

        Keluhan::create($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan created successfully.');
    }

    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        return view('keluhan.edit', compact('keluhan'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'keluhan' => 'required|min:3|unique:keluhans,keluhan,' . $keluhan->id,
            'biaya' => 'required'
        ]);

        $keluhan->update($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan updated successfully.');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with('success', 'Keluhan deleted successfully.');
    }
}
