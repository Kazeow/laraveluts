<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index()
    {
        return view('awal.index');
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
       //
    }
    
    
}

