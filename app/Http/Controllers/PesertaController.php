<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Peserta',
            'data' => $pesertas
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'peserta_name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'jenis_anggota' => 'required',
            'tenant_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 400);
        }

        $peserta = Peserta::create([
            'user_id' => auth()->user()->id,
            'peserta_name' => $request->peserta_name,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'jenis_anggota' => $request->jenis_anggota,
            'tenant_id' => $request->tenant_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Profil berhasil dibuat',
            'data' => $peserta
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        $peserta = Peserta::find($peserta->id);
        return response()->json([
            'success' => true,
            'message' => 'Profil Peserta',
            'data' => $peserta
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        $validator = Validator::make(request()->all(), [
            'peserta_name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'jenis_anggota' => 'required',
            'tenant_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 400);
        }

        $peserta = Peserta::find($peserta->id);
        $peserta->update([
            'user_id' => auth()->user()->id,
            'peserta_name' => $request->peserta_name,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'jenis_anggota' => $request->jenis_anggota,
            'tenant_id' => $request->tenant_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Profil berhasil diupdate',
            'data' => $peserta
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        $peserta = Peserta::find($peserta->id);
        $peserta->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data profil berhasil dihapus',
            'data' => $peserta
        ], 200);
    }
}
