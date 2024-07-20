<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    public function index()
    {
        $komputers = Komputer::all();
        return view('komputer.index', compact('komputers'));
    }

    public function create()
    {
        return view('komputer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek_komputer' => 'required|in:Asus,Acer,Lenovo,Samsung,Apple|unique:komputers,merek_komputer',
            'jenis_komputer' => 'required']);

        Komputer::create($request->all());
        return redirect()->route('komputer.index')->with('success', 'Komputer created successfully.');
    }

    public function show(Komputer $komputer)
    {
        return view('komputer.show', compact('komputer'));
    }

    public function edit(Komputer $komputer)
    {
        return view('komputer.edit', compact('komputer'));
    }

    public function update(Request $request, Komputer $komputer)
    {
        $request->validate([
            'merek_komputer' => 'required|in:Asus,Acer,Lenovo,Samsung,Apple|unique:komputers,merek_komputer,' . $komputer->id,
            'jenis_komputer' => 'required']);

        $komputer->update($request->all());
        return redirect()->route('komputer.index')->with('success', 'Komputer updated successfully.');
    }

    public function destroy(Komputer $komputer)
    {
        $komputer->delete();
        return redirect()->route('komputer.index')->with('success', 'Komputer deleted successfully.');
    }
}
