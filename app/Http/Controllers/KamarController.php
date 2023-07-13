<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_hotel' => 'required',
            'nama_kamar' => 'required',
            'jenis_kamar' => 'required',
            'harga' => 'required|numeric',
        ]);

        Kamar::create($validatedData);

        return redirect()->route('kamar.index')->with('success', 'Kamar created successfully.');
    }

    public function edit($kamar_id)
    {
        $kamar = Kamar::find($kamar_id);
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $kamar_id)
    {
        $validatedData = $request->validate([
             'nama_hotel' => 'required',
            'nama_kamar' => 'required',
            'jenis_kamar' => 'required',
            'harga' => 'required|numeric',
        ]);

        $kamar = Kamar::find($kamar_id);
        $kamar->update($validatedData);

        return redirect()->route('kamar.index')->with('success', 'Kamar updated successfully.');
    }

    public function destroy($kamar_id)
    {
        $kamar = Kamar::find($kamar_id);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Kamar deleted successfully.');
    }
}
