<?php

namespace App\Http\Controllers;

use App\Models\jenis_kendaraan as ModelsJenis_kendaraan;
use App\Models\jenis_service;
use Illuminate\Http\Request;

class jenis_kendaraan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsJenis_kendaraan::get();
        return view('jenis_Kendaraan.tampilJenisKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jenis_Kendaraan.tambahJenisKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsJenis_kendaraan();
        $data->nm_jns_kendaraan=$request->nm_jns_kendaraan;
        $data->save();
        return redirect('jenis-kendaraan');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsJenis_kendaraan::where('id', '=', $id)->get();
        return view('jenis-kendaraan.editJenisKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsJenis_kendaraan::where('id', 'id', $id);
        $data->update([
            'nm_jns_kendaraan'=>$request->nm_jns_kendaraan,
        ]);
        return redirect('jenis-kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsJenis_kendaraan::where('id', '=', $id);
        $data->delete();
        return redirect('jenis-kendaraan');
    }
}
