<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\MotorOsis;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::paginate(10);
        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('mobil.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validateData = $request->validate([
        "nama_mobil"   => "required|string",
        "harga_mobil"  => "required|numeric",
        "kilo_mobil"   => "required|integer",
        "tahun_mobil"  => "required|integer",
        "foto_mobil"   => "required|image|mimes:jpg,jpeg,png",
    ]);

    if($request->hasFile('foto_mobil')){
        $path = $request->file('foto_mobil')->store('mobil_image','public');
        $validateData ['foto_mobil']= $path;
    }

    Mobil::create($validateData);
    return redirect('mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = Mobil::findOrFail($id);
        $validateData = $request->validate([
            "nama_mobil"=> "required|string",
            "harga_mobil"=> "required|numeric",
            "kilo_mobil"=> "required|integer",
            "tahun_mobil"=> "required|integer",
            "foto_mobil"=> "image|mimes:jpg,jpeg,png",
        ]);     

        if(
            $request->hasFile('foto_mobil')){
            $path = $request->file('foto_mobil')->store('mobil_image', 'public');
            $validateData ['foto_mobil']= $path;
        };
        
        $mobil->update( $validateData );
        return redirect ('mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return redirect('mobil');
    }
}
