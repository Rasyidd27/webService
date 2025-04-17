<?php

namespace App\Http\Controllers;

use App\Models\kendaraan as ModelsKendaraan;
use Illuminate\Http\Request;

class kendaraan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsKendaraan::get();
        return view('Kendaraan.tampilKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Kendaraan.tambahKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsKendaraan();
        $data->no_pol=$request->no_pol;
        $data->tahun_kendaraan=$request->tahun_kendaraan;
        $data->no_mesin=$request->no_mesin;
        $data->no_rangka=$request->no_rangka;
        $data->kapasitas_mesin=$request->kapasitas_mesin;
        $data->transmisi=$request->transmisi;
        $data->save();
        return redirect('kendaraan-');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsKendaraan::where('id', '=', $id)->get();
        return view('kendaraan-.editKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsKendaraan::where('id', 'id', $id);
        $data->update([
            'no_pol'=>$request->no_pol,
            'tahun_kendaraan'=>$request->tahun_kendaraan,
            'no_mesin'=>$request->no_mesin,
            'no_rangka'=>$request->no_rangka,
            'kapasitas_mesin'=>$request->kapasitas_mesin,
            'transmisi'=>$request->transmisi,
        ]);
        return redirect('kendaraan-');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsKendaraan::where('id', '=', $id);
        $data->delete();
        return redirect('kendaraan-');
    }
}
