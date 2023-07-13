<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotel.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_hotel' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Hotel::create($validatedData);

        return redirect()->route('hotel.index')->with('success', 'Hotel created successfully.');
    }

    public function edit($hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, $hotel_id)
    {
        $validatedData = $request->validate([
            'nama_hotel' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $hotel = Hotel::find($hotel_id);
        $hotel->update($validatedData);

        return redirect()->route('hotel.index')->with('success', 'Hotel updated successfully.');
    }

    public function destroy($hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        $hotel->delete();

        return redirect()->route('hotel.index')->with('success', 'Hotel deleted successfully.');
    }
}
