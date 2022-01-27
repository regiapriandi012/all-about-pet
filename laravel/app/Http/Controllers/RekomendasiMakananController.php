<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RekomendasiMakanan;

class RekomendasiMakananController extends Controller
{
    public function create()
    {
        return view('admin.rekomendasimakanan');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new RekomendasiMakanan();
        $tipsmerawathewan->title = $validateData['title'];
        $tipsmerawathewan->author = $validateData['author'];
        $tipsmerawathewan->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $tipsmerawathewan->image = $path;
        }

        $tipsmerawathewan->timestamps = false;
        $tipsmerawathewan->save();
        $request->session()->flash('pesan', 'Upload Artikel Berhasil');
        return redirect()->route('rekomendasimakanan.create');
    }

    public function show($id)
    {
        $rekomendasimakanan = RekomendasiMakanan::findOrFail($id);
        return view('artikelrekomendasimakanan', ['rekomendasimakanan' => $rekomendasimakanan]);
    }

    public function edit($id)
    {
        $rekomendasimakanan = RekomendasiMakanan::findOrFail($id);
        return view('updaterekomendasimakanan', ['rekomendasimakanan' => $rekomendasimakanan]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $rekomendasimakanan = RekomendasiMakanan::findOrFail($id);
        $rekomendasimakanan->title = $validateData['title'];
        $rekomendasimakanan->author = $validateData['author'];
        $rekomendasimakanan->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $rekomendasimakanan->image = $path;
        }

        $rekomendasimakanan->timestamps = false;
        $rekomendasimakanan->save();
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $rekomendasimakanan = RekomendasiMakanan::find($id);
    $rekomendasimakanan->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}