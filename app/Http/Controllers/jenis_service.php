<?php

namespace App\Http\Controllers;

use App\Models\jenis_service as ModelsJenis_service;
use Illuminate\Http\Request;

class jenis_service extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsJenis_service::get();
        return view('jenis_Service.tampilJenisService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jenis_Service.tambahJenisService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsJenis_service();
        $data->jns_service=$request->jns_service;
        $data->keterangan=$request->keterangan;
        $data->save();
        return redirect('jenis-service');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsJenis_service::where('id', '=', $id)->get();
        return view('jenis-service.editJenisService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsJenis_service::where('id', 'id', $id);
        $data->update([
            'jns_service'=>$request->nm_jns_kendaraan,
            'keterangan'=>$request->keterangan,
        ]);
        return redirect('jenis-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsJenis_service::where('id', '=', $id);
        $data->delete();
        return redirect('jenis-service');
    }
}
