<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipsMerawatKandang;

class TipsMerawatKandangController extends Controller
{
    public function create()
    {
        return view('admin.tipsmerawatkandang');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new TipsMerawatKandang();
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
        return redirect()->route('tipsmerawatkandang.create');
    }

    public function show($id)
    {
        $tipsmerawatkandang = TipsMerawatKandang::findOrFail($id);
        return view('artikeltipsmerawatkandang', ['tipsmerawatkandang' => $tipsmerawatkandang]);
    }

    public function edit($id)
    {
        $tipsmerawatkandang = TipsMerawatKandang::findOrFail($id);
        return view('updatetipsmerawatkandang', ['tipsmerawatkandang' => $tipsmerawatkandang]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $tipsmerawatkandang = TipsMerawatKandang::findOrFail($id);
        $tipsmerawatkandang->title = $validateData['title'];
        $tipsmerawatkandang->author = $validateData['author'];
        $tipsmerawatkandang->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $tipsmerawatkandang->image = $path;
        }

        $tipsmerawatkandang->timestamps = false;
        $tipsmerawatkandang->save();
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $tipsmerawatkandang = TipsMerawatKandang::find($id);
    $tipsmerawatkandang->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}
