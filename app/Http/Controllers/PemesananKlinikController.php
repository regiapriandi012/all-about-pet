<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PemesananKlinik;

class PemesananKlinikController extends Controller
{
    public function create()
    {
        return view('booking.bookKlinik');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50,unique:nama',
            'alamat' => 'required|min:3|max:50',
            'jenis_hewan' => 'required|min:3|max:50',
            'nama_hewan' => 'required|min:3|max:50'
        ]);
        $booking = new PemesananKlinik();
        $booking->nama = $validateData['nama'];
        $booking->alamat = $validateData['alamat'];
        $booking->jenis_hewan = $validateData['jenis_hewan'];
        $booking->nama_hewan = $validateData['nama_hewan'];
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
        $booking->nama_klinik = $randomklinik;
        $booking->alamat_klinik = $klinik[$randomklinik];
        $booking->kode_boking = rand(10, 100000);

        $booking->timestamps = false;
        $booking->save();
        $id = $booking->id;
        $nama = $booking->nama;
        $request->session()->flash('pesan', 'pemesanan klinik dengan Nama ' . $nama . ' dan dengan ID = ' . $id . ' Berhasil, selanjutnya dapat masuk ke menu cek hasil pemesanan dengan memasukan ID anda.');
        return redirect()->route('booking.bookKlinik');
    }

    public function show()
    {
        $data = PemesananKlinik::all();
        return view('admin.dataBooking', ['databanyak' => $data]);
    }

    public function destroy(Request $request, $book_id)
    {
        $hasil = PemesananKlinik::find($book_id);
        $hasil->delete();
        $request->session()->flash('pesan', 'Data berhasil dihapus');
        return redirect()->route('admin.dataBooking');
    }
}
