<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InformasiVaksin;

class InformasiVaksinController extends Controller
{
    public function create()
    {
        return view('admin.informasivaksin');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new InformasiVaksin();
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
        return redirect()->route('informasivaksin.create');
    }

    public function show($id)
    {
        $informasivaksin = InformasiVaksin::findOrFail($id);
        return view('artikelinformasivaksin', ['informasivaksin' => $informasivaksin]);
    }

    public function edit($id)
    {
        $informasivaksin = InformasiVaksin::findOrFail($id);
        return view('updateinformasivaksin', ['informasivaksin' => $informasivaksin]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $informasivaksin = InformasiVaksin::findOrFail($id);
        $informasivaksin->title = $validateData['title'];
        $informasivaksin->author = $validateData['author'];
        $informasivaksin->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $informasivaksin->image = $path;
        }

        $informasivaksin->timestamps = false;
        $informasivaksin->save();
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $informasivaksin = InformasiVaksin::find($id);
    $informasivaksin->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}
