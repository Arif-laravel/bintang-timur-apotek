<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // Menampilkan halaman daftar obat
    public function index()
    {
        $obats = Obat::all();

        return view('obat.index', compact('obats'));
    }

    // Menambahkan obat melalui form web
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        Obat::create($request->only([
            'nama_obat',
            'jenis',
            'harga',
            'stock',
            'tanggal_kadaluarsa',
        ]));

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil disimpan');
    }

    // Mengubah data obat melalui form web
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $obat = Obat::findOrFail($id);

        $obat->update($request->only([
            'nama_obat',
            'jenis',
            'harga',
            'stock',
            'tanggal_kadaluarsa',
        ]));

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil diperbarui');
    }

    // Menghapus obat melalui form web
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil dihapus');
    }

    // API: Menampilkan semua obat
    public function apiIndex()
    {
        return response()->json(Obat::all(), 200);
    }

    // API: Menambahkan obat
    public function apiStore(Request $request)
    {
        $data = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $obat = Obat::create($data);

        return response()->json([
            'message' => 'Data obat berhasil ditambahkan',
            'data' => $obat,
        ], 201);
    }

    // API: Menampilkan satu obat
    public function apiShow($id)
    {
        $obat = Obat::findOrFail($id);

        return response()->json($obat, 200);
    }

    // API: Mengubah data obat
    public function apiUpdate(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $data = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $obat->update($data);

        return response()->json([
            'message' => 'Data obat berhasil diperbarui',
            'data' => $obat,
        ], 200);
    }

    // API: Menghapus obat
    public function apiDestroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return response()->json([
            'message' => 'Data obat berhasil dihapus',
        ], 200);
    }
}