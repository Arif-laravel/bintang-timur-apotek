<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();

        return view('staff.index', compact('staffs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        Staff::create($request->only([
            'nama',
            'alamat',
            'tanggal_lahir',
            'tempat_lahir',
            'no_hp',
        ]));

        return redirect()->route('staff.index')
            ->with('success', 'Data staf berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $staff = Staff::findOrFail($id);

        $staff->update($request->only([
            'nama',
            'jabatan',
            'alamat',
            'tanggal_lahir',
            'tempat_lahir',
            'no_hp',
        ]));

        return redirect()->route('staff.index')
            ->with('success', 'Data staf berhasil diperbarui');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);

        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success', 'Data staf berhasil dihapus');
    }
}