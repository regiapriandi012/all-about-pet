<?php

namespace App\Http\Controllers;

use App\PemesananKlinik;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PemesananKlinikApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesananklinik = PemesananKlinik::all()->toJson(JSON_PRETTY_PRINT);
        return response($pemesananklinik, 200);
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
            'nama_hewan' => 'required|min:3|max:100'
        ]);
        if ($validateData->fails()) {
            return response($validateData->errors(), 400);
        } else {

            $pemesananklinik = new PemesananKlinik();
            $pemesananklinik->nama = $request->nama;
            $pemesananklinik->alamat = $request->alamat;
            $pemesananklinik->jenis_hewan = $request->jenis_hewan;
            $pemesananklinik->nama_hewan = $request->nama_hewan;
            function randomName()
        {
            $klinik = array(
                'Soedirman Health Centre',
                'Klinik Jayanti',
                'Klinik Amanah',
                'Klinik bunda mulia',
                'Klinik Utama Nuraya',
                'Klinik Pratama',
                'Vira Medika Clinic',

            );
            return $klinik[rand(0, count($klinik) - 1)];
        }
        $klinik = array(
            'Soedirman Health Centre' => 'jalan boulevard sudirman, purwokerto utara no 23',
            'Klinik Jayanti' => 'jalan geriliya, purwokerto selatan no 90',
            'Klinik Amanah' => 'ruko summarecon, sudirman trade center, purwokerto timur no 56',
            'Klinik bunda mulia' => 'ruko perumahan adiyaksa, purwokerto utara no 12',
            'Klinik Utama Nuraya' => 'jalan boulevard purwokerto raya, purwokerto tengah no 44',
            'Klinik Pratama' => 'ruko mall purwokerto super block, purwokerto tengah no 32 ',
            'Vira Medika Clinic' => 'ruko mall pwt super mall, purwokerto tengah no 987'

        );
        $randomklinik = randomName();
        $pemesananklinik->nama_klinik = $randomklinik;
        $pemesananklinik->alamat_klinik = $klinik[$randomklinik];
        $pemesananklinik->kode_boking = rand(10, 100000);

        
            $pemesananklinik->timestamps = false;
            $pemesananklinik->save();
            return response()->json(["message" => "Pemesanan Klinik Berhasil Dibuat"], 201);
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
        if (PemesananKlinik::where('id', $id)->exists()) {
            $validateData = Validator::make($request->all(), [
                'nama' => 'required|min:3|max:100',
                'alamat' => 'required|min:3|max:100',
                'jenis_hewan' => 'required|min:3|max:100',
                'nama_hewan' => 'required|min:3|max:100'
            ]);
            if ($validateData->fails()) {
                return response($validateData->errors(), 400);
            } else {
                $pemesananklinik = PemesananKlinik::find($id);
                $pemesananklinik->nama = $request->nama;
                $pemesananklinik->alamat = $request->alamat;
                $pemesananklinik->jenis_hewan = $request->jenis_hewan;
                $pemesananklinik->nama_hewan = $request->nama_hewan;
                function randomName()
        {
            $klinik = array(
                'Soedirman Health Centre',
                'Klinik Jayanti',
                'Klinik Amanah',
                'Klinik bunda mulia',
                'Klinik Utama Nuraya',
                'Klinik Pratama',
                'Vira Medika Clinic',

            );
            return $klinik[rand(0, count($klinik) - 1)];
        }
        $klinik = array(
            'Soedirman Health Centre' => 'jalan boulevard sudirman, purwokerto utara no 23',
            'Klinik Jayanti' => 'jalan geriliya, purwokerto selatan no 90',
            'Klinik Amanah' => 'ruko summarecon, sudirman trade center, purwokerto timur no 56',
            'Klinik bunda mulia' => 'ruko perumahan adiyaksa, purwokerto utara no 12',
            'Klinik Utama Nuraya' => 'jalan boulevard purwokerto raya, purwokerto tengah no 44',
            'Klinik Pratama' => 'ruko mall purwokerto super block, purwokerto tengah no 32 ',
            'Vira Medika Clinic' => 'ruko mall pwt super mall, purwokerto tengah no 987'

        );
        $randomklinik = randomName();
        $pemesananklinik->nama_klinik = $randomklinik;
        $pemesananklinik->alamat_klinik = $klinik[$randomklinik];
        $pemesananklinik->kode_boking = rand(10, 100000);
                $pemesananklinik->timestamps = false;
                $pemesananklinik->save();
                return response()->json(["message" => "Data Pemesanan Klinik Updated"], 201);
            }
        } else {
            return response()->json(["message" => "Data Pemesanan Klinik Tidak Ditemukan"], 404);
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
        if (PemesananKlinik::where('id', $id)->exists()) {
            $pemesananklinik = PemesananKlinik::find($id);
            $pemesananklinik->delete();
            return response()->json(["message" => "Pemesanan Klinik Berhasil Dihapus"], 201);
        } else {
            return response()->json(["message" => "Pemesanan Klinik Tidak Ditemukan"], 404);
        }
    }
}
