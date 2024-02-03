<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataLoker = Loker::all();
        return view('loker.indexLoker', ['loker'=>$dataLoker]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loker.createLoker');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'jenis_pekerjaan' => 'required',
            'persyaratan' => 'required',
            'jobdesk' => 'required',
            'kontak_person' => 'required',
            'kontak_email' => 'required|email',
            'batas_waktu_pendaftaran' => 'required|date',
        ]);

        
        // Explicitly set 'status' to 'buka' when creating a new record
        $loker = new Loker($request->all());
        $loker->status = 'buka';
        $loker->save();

        return redirect()->route('loker.index')->with('success', 'Data berhasil ditambahkan');
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
