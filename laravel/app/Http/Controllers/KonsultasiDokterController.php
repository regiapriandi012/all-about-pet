<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KonsultasiDokter;

class KonsultasiDokterController extends Controller
{
    public function create()
    {
        return view('konsultasi.konsulDok');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50,unique:nama',
            'alamat' => 'required|min:3|max:50',
            'jenis_hewan' => 'required|min:3|max:50',
            'keluhan' => 'required|min:3|max:50'
        ]);
        $konsultasi = new KonsultasiDokter();
        $konsultasi->nama = $validateData['nama'];
        $konsultasi->alamat = $validateData['alamat'];
        $konsultasi->jenis_hewan = $validateData['jenis_hewan'];
        $konsultasi->keluhan = $validateData['keluhan'];
        $konsultasi->hasil_konsultasi = "Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan";

        $konsultasi->timestamps = false;
        $konsultasi->save();
        $id = $konsultasi->id;
        $nama = $konsultasi->nama;
        $request->session()->flash('pesan', 'Konsultasi dokter dengan Nama ' . $nama . ' dan dengan ID = ' . $id . ' Berhasil, tunggu Dokter menjawab konsultasi anda dalam 10 - 25 menit kedepan, selanjutnya dapat masuk ke menu cek hasil konsultasi dengan memasukan ID anda.');
        return redirect()->route('konsultasi.konsulDok');
    }

    public function show()
    {
        $datakonsul = KonsultasiDokter::all();
        return view('admin.dataKonsul', ['databanyak' => $datakonsul]);
    }
    public function destroy(Request $request, $konsul_id)
    {
    $hasil = KonsultasiDokter::find($konsul_id);
    $hasil->delete();
    $request->session()->flash('pesan','Data berhasil dihapus');
    return redirect()->route('admin.dataKonsul');
    }
}
