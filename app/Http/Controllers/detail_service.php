<?php

namespace App\Http\Controllers;

use App\Models\detail_service as ModelsDetail_service;
use Illuminate\Http\Request;

class detail_service extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsDetail_service::get();
        return view('detail_Service.tampilDetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('detail_Service.tambahDetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsDetail_service();
        $data->sparepart=$request->sparepart;
        $data->harga=$request->harga;
        $data->save();
        return redirect('detail-service');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsDetail_service::where('id', '=', $id)->get();
        return view('detail-service.editDetailService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsDetail_service::where('id', 'id', $id);
        $data->update([
            'sparepart'=>$request->sparepart,
            'harga'=>$request->harga,
        ]);
        return redirect('detail-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsDetail_service::where('id', '=', $id);
        $data->delete();
        return redirect('detail-service');
    }
}
