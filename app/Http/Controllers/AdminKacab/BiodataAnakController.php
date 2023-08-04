<?php

namespace App\Http\Controllers\AdminKacab;

use App\Http\Controllers\Controller;
use App\Models\AdminKacab\DataAnak;
use Illuminate\Http\Request;

class BiodataAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // Logika untuk mengambil data anak berdasarkan ID
        // $dataAnak = DataAnak::find($id);

        // // Kembalikan halaman tampilan baru dan kirimkan data anak ke dalam view
        // return view('adminkacab.pages.biodataanak', compact('dataAnak'));
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
