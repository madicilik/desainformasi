<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('contents.dashboard.berita.berita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Berita;
        $dtUpload->judul = $request->judul;
        $dtUpload->nama = $request->nama;
        $dtUpload->slug_berita = $request->slug_berita;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->tgl_upload = $request->tgl_upload;
        $dtUpload->foto = $namaFile;

        $nm->move(public_path().'/foto_informasi', $namaFile);
        $dtUpload->save();      

        return redirect('berita')->with('status', 'Data Berhasil Disimpan');
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
    public function edit($id_berita)
    {
        $dt = Berita::findorfail($id_berita);     
        return view('contents.dashboard.berita.edit', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_berita)
    {
        $ubah = Berita::findorfail($id_berita);
        $awal = $ubah->foto;

        $dt = [
            'judul' => $request['judul'],
            'nama' => $request['nama'],
            'slug_berita' => $request['slug_berita'],
            'deskripsi' => $request['deskripsi'],
            'tgl_upload' => $request['tgl_upload'],
            'foto' => $awal,
        ];
        
        $request->foto->move(public_path().'/foto_informasi', $awal);
        $ubah->update($dt);      

        return redirect('berita')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_berita)
    {
        $hapus = Berita::findorfail($id_berita);

        $file = public_path('/foto_informasi/').$hapus->foto;
        // Cek jika ada gambar
        if (file_exists($file)) {
            // Maka hapus file di folder public/img
            @unlink($file);
        }

        //Hapus data di database
        $hapus->delete();
        return redirect('berita')->with('status', 'Data Berhasil Dihapus');
    }
}
