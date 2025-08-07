<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $request->validate([
        "nama_mobil"   => "required|string",
        "harga_mobil"  => "required|numeric",
        "kilo_mobil"   => "required|integer",
        "tahun_mobil"  => "required|integer",
        "foto_mobil"   => "required|image|mimes:jpg,jpeg,png",
    ]);

    // Default null kalau user nggak upload
    $path = null;

    // Kalau user upload foto
    if ($request->hasFile('foto_mobil')) {
        // simpan ke folder storage/app/public/mobils
        $path = $request->file('foto_mobil')->store('image', 'public');
    }

    // Simpan data ke database
    Mobil::create([
        'nama_mobil'   => $request->nama_mobil,
        'harga_mobil'  => $request->harga_mobil,
        'kilo_mobil'   => $request->kilo_mobil,
        'tahun_mobil'  => $request->tahun_mobil,
        'foto_mobil'   => $path, // simpan path ke kolom foto_mobil
    ]);

    return redirect('mobil')->with('success', 'Mobil berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
