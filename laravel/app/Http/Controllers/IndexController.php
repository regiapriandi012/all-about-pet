<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipsMerawatHewan;
use App\TipsMerawatKandang;
use App\TipsMengatasiHewanSakit;
use App\RekomendasiMakanan;
use App\RekomendasiVitamin;
use App\InformasiVaksin;

class IndexController extends Controller
{
    public function show()
    {
        $tipsmerawathewan = TipsMerawatHewan::all();
        $tipsmerawatkandang = TipsMerawatKandang::all();
        $tipsmengatasihewansakit = TipsMengatasiHewanSakit::all();
        $rekomendasimakanan = RekomendasiMakanan::all();
        $rekomendasivitamin = RekomendasiVitamin::all();
        $informasivaksin = InformasiVaksin::all();
        return view('index', ['tipsmerawathewan' => $tipsmerawathewan, 'tipsmerawatkandang' => $tipsmerawatkandang, 'tipsmengatasihewansakit' => $tipsmengatasihewansakit, 'rekomendasimakanan'=> $rekomendasimakanan, 'rekomendasivitamin' => $rekomendasivitamin, 'informasivaksin'=>$informasivaksin]);
    }

    public function showadmin()
    {
        $tipsmerawathewan = TipsMerawatHewan::all();
        $tipsmerawatkandang = TipsMerawatKandang::all();
        $tipsmengatasihewansakit = TipsMengatasiHewanSakit::all();
        $rekomendasimakanan = RekomendasiMakanan::all();
        $rekomendasivitamin = RekomendasiVitamin::all();
        $informasivaksin = InformasiVaksin::all();
        return view('indexadmin', ['tipsmerawathewan' => $tipsmerawathewan, 'tipsmerawatkandang' => $tipsmerawatkandang, 'tipsmengatasihewansakit' => $tipsmengatasihewansakit, 'rekomendasimakanan'=> $rekomendasimakanan, 'rekomendasivitamin' => $rekomendasivitamin, 'informasivaksin'=>$informasivaksin]);
    }
}
