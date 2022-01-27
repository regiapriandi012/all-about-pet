<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipsMengatasiHewanSakit;

class TipsMengatasiHewanSakitController extends Controller
{
    public function create()
    {
        return view('admin.tipsmengatasihewansakit');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new TipsMengatasiHewanSakit();
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
        return redirect()->route('tipsmengatasihewansakit.create');
    }

    public function show($id)
    {
        $tipsmengatasihewansakit = TipsMengatasiHewanSakit::findOrFail($id);
        return view('artikeltipsmengatasihewansakit', ['tipsmengatasihewansakit' => $tipsmengatasihewansakit]);
    }

    public function edit($id)
    {
        $tipsmengatasihewansakit = TipsMengatasiHewanSakit::findOrFail($id);
        return view('updatetipsmengatasihewansakit', ['tipsmengatasihewansakit' => $tipsmengatasihewansakit]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $tipsmengatasihewansakit = TipsMengatasiHewanSakit::findOrFail($id);
        $tipsmengatasihewansakit->title = $validateData['title'];
        $tipsmengatasihewansakit->author = $validateData['author'];
        $tipsmengatasihewansakit->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $tipsmengatasihewansakit->image = $path;
        }

        $tipsmengatasihewansakit->timestamps = false;
        $tipsmengatasihewansakit->save();
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $tipsmengatasihewansakit = TipsMengatasiHewanSakit::find($id);
    $tipsmengatasihewansakit->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}
