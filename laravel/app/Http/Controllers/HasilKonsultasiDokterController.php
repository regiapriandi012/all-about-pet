<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KonsultasiDokter;

class HasilKonsultasiDokterController extends Controller
{    
    public function create()
    {
        return view('hasilkonsultasi.hasilKonsulDok');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required|min:1|max:10,unique:id',
        ]);
        $id = $validateData['id'];
        try {
            $result = KonsultasiDokter::findOrFail($id);
            $request->session()->flash('pesan', ''.$result->hasil_konsultasi.'');
            return redirect()->route('hasilkonsultasi.hasilKonsulDok');

        } catch (\Exception $e){
            $request->session()->flash('data_kosong', 'Data Tidak Ditemukan');
            return redirect()->route('hasilkonsultasi.hasilKonsulDok');
        }
    }
}
