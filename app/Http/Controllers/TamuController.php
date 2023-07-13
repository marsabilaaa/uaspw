<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        Tamu::create($request->all());
        return redirect()->route('tamus.index');
    }

    public function edit(Tamu $tamu)
    {
        return view('tamu.edit', compact('tamu'));
    }

    public function update(Request $request, Tamu $tamu)
    {
        $tamu->update($request->all());
        return redirect()->route('tamus.index');
    }

    public function destroy(Tamu $tamu)
    {
        $tamu->delete();
        return redirect()->route('tamus.index');
    }
}
