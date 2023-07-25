<?php

namespace App\Http\Controllers\AdminKacab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminKacab\DataAnak;
use GuzzleHttp\Psr7\Response;
use Datatables;

class DataAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()){
            return datatables()->of(Dataanak::select('*'))
            ->addColumn('action', 'dataanak-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('adminkacab.pages.tables');
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
        $dataanakId = $request->id;

        $dataanak = Dataanak::updateOrCreate(
            [
                'id' => $dataanakId,
            ],
            [
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggl_lahir' => $request->tanggl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]
            );
            return Response()->json($dataanak);
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