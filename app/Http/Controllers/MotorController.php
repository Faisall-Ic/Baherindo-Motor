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
        $motor = MotorOsis::paginate(10);
        return view('motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validateData = $request->validate([
        "nama_motor"   => "required|string",
        "harga_motor"  => "required|numeric",
        "kilo_motor"   => "required|integer",
        "tahun_motor"  => "required|integer",
        "foto_motor"   => "required|image|mimes:jpg,jpeg,png|max:2048",
    ]);

    if($request->hasFile('foto_motor')){
        $path = $request->file('foto_motor')->store('motor_image','public');
        $validateData ['foto_motor']= $path;
    }

    MotorOsis::create($validateData);
    return redirect('motor');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motor = MotorOsis::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motor = MotorOsis::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motor = MotorOsis::findOrFail($id);
        $validateData = $request->validate([
            "nama_motor"=> "required|string",
            "harga_motor"=> "required|numeric",
            "kilo_motor"=> "required|integer",
            "tahun_motor"=> "required|integer",
            "foto_motor"=> "image|mimes:jpg,jpeg,png",
        ]);     

        if(
            $request->hasFile('foto_motor')){
            $path = $request->file('foto_motor')->store('motor_image', 'public');
            $validateData ['foto_motor']= $path;
        };
        
        $motor->update( $validateData );
        return redirect ('motor');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motor = MotorOsis::findOrFail($id);
        $motor->delete();

        return redirect('motor');
    }
}
