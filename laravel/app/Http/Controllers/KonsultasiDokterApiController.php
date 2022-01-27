<?php

namespace App\Http\Controllers;

use App\KonsultasiDokter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class KonsultasiDokterApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsultasidokter = KonsultasiDokter::all()->toJson(JSON_PRETTY_PRINT);
        return response($konsultasidokter, 200);
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
        $validateData = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:100',
            'alamat' => 'required|min:3|max:100',
            'jenis_hewan' => 'required|min:3|max:100',
            'keluhan' => 'required|min:3|max:100'
        ]);
        if ($validateData->fails()) {
            return response($validateData->errors(), 400);
        } else {

            $konsultasidokter = new KonsultasiDokter();
            $konsultasidokter->nama = $request->nama;
            $konsultasidokter->alamat = $request->alamat;
            $konsultasidokter->jenis_hewan = $request->jenis_hewan;
            $konsultasidokter->keluhan = $request->keluhan;
            $konsultasidokter->hasil_konsultasi = "Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan";
            $konsultasidokter->timestamps = false;
            $konsultasidokter->save();
            return response()->json(["message" => "Konsultasi Dokter Berhasil Dibuat"], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (KonsultasiDokter::where('id', $id)->exists()) {
            $validateData = Validator::make($request->all(), [
                'nama' => 'required|min:3|max:100',
                'alamat' => 'required|min:3|max:100',
                'jenis_hewan' => 'required|min:3|max:100',
                'keluhan' => 'required|min:3|max:100'
            ]);
            if ($validateData->fails()) {
                return response($validateData->errors(), 400);
            } else {
                $konsultasidokter = KonsultasiDokter::find($id);
                $konsultasidokter->nama = $request->nama;
                $konsultasidokter->alamat = $request->alamat;
                $konsultasidokter->jenis_hewan = $request->jenis_hewan;
                $konsultasidokter->keluhan = $request->keluhan;
                $konsultasidokter->hasil_konsultasi = "Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan";
                $konsultasidokter->timestamps = false;
                $konsultasidokter->save();
                return response()->json(["message" => "Data Konsultasi Dokter Updated"], 201);
            }
        } else {
            return response()->json(["message" => "Data Konsultasi Dokter Tidak Ditemukan"], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (KonsultasiDokter::where('id', $id)->exists()) {
            $konsultasidokter = KonsultasiDokter::find($id);
            $konsultasidokter->delete();
            return response()->json(["message" => "Konsultasi Dokter Berhasil Dihapus"], 201);
        } else {
            return response()->json(["message" => "Konsultasi Dokter Tidak Ditemukan"], 404);
        }
    }
}
