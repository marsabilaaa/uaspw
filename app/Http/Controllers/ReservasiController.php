<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::all();
        return view('reservasi.index', compact('reservasis'));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        Reservasi::create($request->all());
        return redirect()->route('reservasis.index');
    }

    public function edit(Reservasi $reservasi)
    {
        return view('reservasi.edit', compact('reservasi'));
    }

    public function update(Request $request, Reservasi $reservasi)
    {
        $reservasi->update($request->all());
        return redirect()->route('reservasis.index');
    }

    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect()->route('reservasis.index');
    }
}
