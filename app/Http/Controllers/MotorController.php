<?php

namespace App\Http\Controllers;

use App\Models\MotorOsis;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        "nama_motor"   => "required|string",
        "harga_motor"  => "required|integer",
        "kilo_motor"   => "required|integer",
        "tahun_motor"  => "required|integer",
        "foto_motor"   => "required|image|mimes:jpg,jpeg,png|max:2048",
    ]);

    // Default null kalau user nggak upload
    $path = null;

    // Kalau user upload foto
    if ($request->hasFile('foto_motor')) {
        // simpan ke folder storage/app/public/motors
        $path = $request->file('foto_motor')->store('image', 'public');
    }

    // Simpan data ke database
    MotorOsis::create([
        'nama_motor'   => $request->nama_motor,
        'harga_motor'  => $request->harga_motor,
        'kilo_motor'   => $request->kilo_motor,
        'tahun_motor'  => $request->tahun_motor,
        'foto_motor'   => $path, // simpan path ke kolom foto_motor
    ]);

    return redirect('motor')->with('success', 'Motor berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
