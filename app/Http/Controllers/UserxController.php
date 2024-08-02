<?php

namespace App\Http\Controllers;


use App\Models\Userx;
use Illuminate\Http\Request;

class UserxController extends Controller
{
    public function index()
    {
        $userxes = Userx::all();
        return view('userx.index', compact('userxes'));
    }

    public function create()
    {
        return view('userx.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_use' => 'required|min:3|unique:userxes,nama_use',
            'email' => 'required',
            'level' => 'required|in:boss,admin,user'
        ]);

        Userx::create($request->all());
        return redirect()->route('userx.index')->with('success', 'User created successfully.');
    }

    public function show(Userx $userx)
    {
        return view('userx.show', compact('userx'));
    }

    public function edit(Userx $userx)
    {
        return view('userx.edit', compact('userx'));
    }

    public function update(Request $request, Userx $userx)
    {
        $request->validate([
            'nama_use' => 'required|min:3|unique:userxes,nama_use,' . $userx->id,
            'email' => 'required',
            'level' => 'required|in:boss,admin,user'
        ]);

        $userx->update($request->all());
        return redirect()->route('userx.index')->with('success', 'User updated successfully.');
    }

    public function destroy(Userx $userx)
    {
        $userx->delete();
        return redirect()->route('userx.index')->with('success', 'User deleted successfully.');
    }
}
