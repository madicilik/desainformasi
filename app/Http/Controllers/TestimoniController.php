<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('contents.dashboard.testimoni.testimoni', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.testimoni.create');
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

        $dtUpload = new Testimoni;
        $dtUpload->nama = $request->nama;
        $dtUpload->jabatan = $request->jabatan;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->foto = $namaFile;

        $nm->move(public_path().'/foto_testimoni', $namaFile);
        $dtUpload->save();      

        return redirect('testimoni')->with('status', 'Data Berhasil Disimpan');
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
    public function edit($id_testimoni)
    {
        $dt = Testimoni::findorfail($id_testimoni);     
        return view('contents.dashboard.testimoni.edit', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_testimoni)
    {
        $ubah = Testimoni::findorfail($id_testimoni);
        $awal = $ubah->foto;

        $dt = [
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'deskripsi' => $request['deskripsi'],
            'foto' => $awal,
        ];
        
        $request->foto->move(public_path().'/foto_testimoni', $awal);
        $ubah->update($dt);      

        return redirect('testimoni')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_testimoni)
    {
        $hapus = Testimoni::findorfail($id_testimoni);

        $file = public_path('/foto_testimoni/').$hapus->foto;
        // Cek jika ada gambar
        if (file_exists($file)) {
            // Maka hapus file di folder public/img
            @unlink($file);
        }

        //Hapus data di database
        $hapus->delete();
        return redirect('testimoni')->with('status', 'Data Berhasil Dihapus');
    }
}
