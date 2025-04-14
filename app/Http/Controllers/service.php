<?php

namespace App\Http\Controllers;

use App\Models\service as ModelsService;
use Illuminate\Http\Request;

class service extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsService::get();
        return view('Service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Service.tambahService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsService();
        $data->keluhan=$request->keluhan;
        $data->tgl_masuk=$request->tgl_masuk;
        $data->tgl_keluar=$request->tgl_keluar;
        $data->save();
        return redirect('service-');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsService::where('id', '=', $id)->get();
        return view('service-.editService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsService::where('id', 'id', $id);
        $data->update([
            'keluhan'=>$request->keluhan,
            'tgl_masuk'=>$request->tgl_masuk,
            'tgl_keluar'=>$request->tgl_keluar,
        ]);
        return redirect('service-');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsService::where('id', '=', $id);
        $data->delete();
        return redirect('service-');
    }
}
