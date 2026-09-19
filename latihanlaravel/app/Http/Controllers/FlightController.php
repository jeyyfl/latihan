<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    // 1. READ: Menampilkan semua data di tabel
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    // 2. CREATE: Menampilkan halaman form tambah data
    public function create()
    {
        return view('flights.create');
    }

    // 3. STORE: Memproses dan menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'flight_number' => 'required',
            'destination' => 'required'
        ]);

        $flight = new Flight();
        $flight->flight_number = $request->flight_number;
        $flight->destination = $request->destination;
        $flight->save();

        return redirect('/flights')->with('success', 'Data Penerbangan berhasil ditambahkan!');
    }

    // 4. EDIT: Menampilkan halaman form edit beserta data lama
    public function edit($id)
    {
        $flight = Flight::find($id);
        return view('flights.edit', compact('flight'));
    }

    // 5. UPDATE: Memproses dan menyimpan data editan ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'flight_number' => 'required',
            'destination' => 'required'
        ]);

        $flight = Flight::find($id);
        $flight->flight_number = $request->flight_number;
        $flight->destination = $request->destination;
        $flight->save();

        return redirect('/flights')->with('success', 'Data Penerbangan berhasil diubah!');
    }

    // 6. DESTROY: Menghapus data dari database
    public function destroy($id)
    {
        $flight = Flight::find($id);
        $flight->delete();

        return redirect('/flights')->with('success', 'Data Penerbangan berhasil dihapus!');
    }
}