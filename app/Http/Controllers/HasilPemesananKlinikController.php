<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PemesananKlinik;

class HasilPemesananKlinikController extends Controller
{
    public function create()
    {
        return view('hasilbooking.hasilBookKlinik');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required|min:1|max:10,unique:id',
        ]);
        $id = $validateData['id'];
        try {
            $result = PemesananKlinik::findOrFail($id);
            $request->session()->flash('nama_klinik', ''.$result->nama_klinik.'');
            $request->session()->flash('alamat', ''.$result->alamat_klinik.'');
            $request->session()->flash('kode_booking', ''.$result->kode_boking.'');
            return redirect()->route('hasilbooking.hasilBookKlinik');
        } catch (\Exception $e){
            $request->session()->flash('data_kosong', 'Data Tidak Ditemukan');
            return redirect()->route('hasilbooking.hasilBookKlinik');
        }
    }
}
