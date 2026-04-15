<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $query = Karyawan::with('jabatan');

        if ($request->search) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $data = $query->latest()->get();
        return view('karyawan.index', compact('data'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('karyawan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        Karyawan::create($request->all());
        return redirect('/karyawan');
    }
}
