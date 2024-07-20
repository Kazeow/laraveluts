<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|min:3|unique:barangs',
            'jenis_barang' => 'required|in:E,NE'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang created successfully.');
    }

    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|min:3|unique:barang,nama_barang,' . $barang->id,
            'jenis_barang' => 'required|in:E,NE'
        ]);

        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang updated successfully.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully.');
    }
}
