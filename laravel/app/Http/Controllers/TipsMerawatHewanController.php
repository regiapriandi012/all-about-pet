<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipsMerawatHewan;

class TipsMerawatHewanController extends Controller
{
    public function create()
    {
        return view('admin.tipsmerawathewan');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new TipsMerawatHewan();
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
        return redirect()->route('tipsmerawathewan.create');
    }

    public function show($id)
    {
        $tipsmerawathewan = TipsMerawatHewan::findOrFail($id);
        return view('artikeltipsmerawathewan', ['tipsmerawathewan' => $tipsmerawathewan]);
    }

    public function edit($id)
    {
        $tipsmerawathewan = TipsMerawatHewan::findOrFail($id);
        return view('updatetipsmerawathewan', ['tipsmerawathewan' => $tipsmerawathewan]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $tipsmerawathewan = TipsMerawatHewan::findOrFail($id);
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
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $tipsmerawathewan = TipsMerawatHewan::find($id);
    $tipsmerawathewan->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}
