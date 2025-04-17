<?php

namespace App\Http\Controllers;

use App\Models\mekanik as ModelsMekanik;
use Illuminate\Http\Request;

class mekanik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsMekanik::get();
        return view('Mekanik.tampilMekanik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsMekanik();
        $data->nm_mekanis=$request->nm_mekanik;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->alamat=$request->alamat;
        $data->nik=$request->nik;
        $data->no_hp=$request->no_hp;
        $data->save();
        return redirect('mekanik-');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsMekanik::where('id', '=', $id)->get();
        return view('mekanik-.editMekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsMekanik::where('id', 'id', $id);
        $data->update([
            'nm_mekanik'=>$request->nm_mekanik,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'nik'=>$request->nik,
            'no_hp'=>$request->no_hp,
        ]);
        return redirect('mekanik-');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsMekanik::where('id', '=', $id);
        $data->delete();
        return redirect('mekanik-');
    }
}
