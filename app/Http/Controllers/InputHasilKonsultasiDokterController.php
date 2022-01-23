<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KonsultasiDokter;

class InputHasilKonsultasiDokterController extends Controller
{
    public function edit($konsultasi_id)
    {
        $result = KonsultasiDokter::findOrFail($konsultasi_id);
        return view('admin.inputDataKonsul', ['hasilkonsul' => $result]);
    }

    public function update(Request $request, $konsultasi_id)
    {
        $validateData = $request->validate([
            'hasilkonsul' => 'required|min:3|max:1000'
        ]);
        $result = KonsultasiDokter::findOrFail($konsultasi_id);
        $result->hasil_konsultasi = $validateData['hasilkonsul'];
        $result->timestamps = false;
        $result->save();
        $request->session()->flash('pesan', 'Input Data data berhasil');
        return redirect()->route('admin.inputKonsul', ['hasilkonsul' => $result->id]);
    }

    public function show()
    {
        $datakonsul = KonsultasiDokter::all();
        return view('admin.inputKonsul', ['databanyak' => $datakonsul]);
    }
}
