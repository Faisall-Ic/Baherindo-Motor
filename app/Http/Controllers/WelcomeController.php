<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $motor = [
        ['nama' => "Yamaha MT-25", "harga" => 80000000, "kilo" => 37000, "tahun" => 2023, "foto" => "/image/mt-25.jpeg"],
        ['nama' => "Honda S1000-RR", "harga" => 610000000, "kilo" => 3000, "tahun" => 2018, "foto" => "/image/s1000-rr.jpeg" ],
        ['nama' => "Yamaha MT-25", "harga" => 80000000, "kilo" => 37000, "tahun" => 2023, "foto" => "/image/mt-25.jpeg" ],
        ['nama' => "Yamaha MT-25", "harga" => 80000000, "kilo" => 37000, "tahun" => 2023, "foto" => "/image/mt-25.jpeg" ],
        ['nama' => "Yamaha MT-25", "harga" => 80000000, "kilo" => 37000, "tahun" => 2023, "foto" => "/image/mt-25.jpeg" ]
       ];
        return view('welcome', compact('motor'));
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
        //
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
