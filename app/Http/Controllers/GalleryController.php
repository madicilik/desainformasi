<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleri = Gallery::all();
        return view('contents.dashboard.gallery.gallery', compact('galleri'));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->foto_galleri;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Gallery;
        $dtUpload->foto_galleri = $namaFile;

        $nm->move(public_path().'/foto_gallery', $namaFile);
        $dtUpload->save();      

        return redirect('gallery')->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_galleri)
    {
        $dt = Gallery::findorfail($id_galleri);     
        return view('contents.dashboard.gallery.edit', compact('dt'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_galleri)
    {
        $ubah = Gallery::findorfail($id_galleri);
        $awal = $ubah->foto_galleri;

        $dt = [
            'foto_galleri' => $awal,
        ];
        
        $request->foto_galleri->move(public_path().'/foto_gallery', $awal);
        $ubah->update($dt);      

        return redirect('gallery')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_galleri)
    {
        $hapus = Gallery::findorfail($id_galleri);

        $file = public_path('/foto_gallery/').$hapus->foto_galleri;
        // Cek jika ada gambar
        if (file_exists($file)) {
            // Maka hapus file di folder public/img
            @unlink($file);
        }

        //Hapus data di database
        $hapus->delete();
        return redirect('gallery')->with('status', 'Data Berhasil Dihapus');
    }
}
