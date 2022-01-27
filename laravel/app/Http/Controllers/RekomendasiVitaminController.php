<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RekomendasiVitamin;

class RekomendasiVitaminController extends Controller
{
    public function create()
    {
        return view('admin.rekomendasivitamin');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);
        $tipsmerawathewan = new RekomendasiVitamin();
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
        return redirect()->route('rekomendasivitamin.create');
    }

    public function show($id)
    {
        $rekomendasivitamin = RekomendasiVitamin::findOrFail($id);
        return view('artikelrekomendasivitamin', ['rekomendasivitamin' => $rekomendasivitamin]);
    }

    public function edit($id)
    {
        $rekomendasivitamin = RekomendasiVitamin::findOrFail($id);
        return view('updaterekomendasivitamin', ['rekomendasivitamin' => $rekomendasivitamin]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:500',
            'author' => 'required|min:3|max:500',
            'content' => 'required|min:3|max:10000',
            'image' => 'required|file|image|max:1000',
        ]);

        $rekomendasivitamin = RekomendasiVitamin::findOrFail($id);
        $rekomendasivitamin->title = $validateData['title'];
        $rekomendasivitamin->author = $validateData['author'];
        $rekomendasivitamin->content = $validateData['content'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('assets/artikelimage', $namaFile);
            $rekomendasivitamin->image = $path;
        }

        $rekomendasivitamin->timestamps = false;
        $rekomendasivitamin->save();
        $request->session()->flash('pesan', 'Update Artikel Berhasil');
        return redirect()->route('indexadmin');
    }

    public function destroy(Request $request, $id)
    {
    $rekomendasivitamin = RekomendasiVitamin::find($id);
    $rekomendasivitamin->delete();
    $request->session()->flash('pesan','Artikel berhasil dihapus');
    return redirect()->route('indexadmin');
    }
}