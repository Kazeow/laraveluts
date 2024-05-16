<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5',
            'jeniskelamin' => 'required|min:5',
            'jabatan' => 'required',
            'status' =>'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'jabatan' => $request->jabatan,
            'status' => $request->status
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pegawai.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pegawai.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
