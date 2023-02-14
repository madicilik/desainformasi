<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitras = Mitra::all();
        return view('contents.dashboard.mitra.mitra', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.mitra.create');
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

        $dtUpload = new Mitra();
        $dtUpload->foto = $namaFile;

        $nm->move(public_path().'/foto_mitra', $namaFile);
        $dtUpload->save();      

        return redirect('mitra')->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mitra)
    {
        $dt = Mitra::findorfail($id_mitra);     
        return view('contents.dashboard.mitra.edit', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mitra)
    {
        $ubah = Mitra::findorfail($id_mitra);
        $awal = $ubah->foto;

        $dt = [
            'foto' => $awal,
        ];
        
        $request->foto->move(public_path().'/foto_mitra', $awal);
        $ubah->update($dt);     
        
        return redirect('mitra')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mitra)
    {
        $hapus = Mitra::findorfail($id_mitra);

        $file = public_path('/foto_mitra/').$hapus->foto;
        // Cek jika ada gambar
        if (file_exists($file)) {
            // Maka hapus file di folder public/img
            @unlink($file);
        }

        //Hapus data di database
        $hapus->delete();
        return redirect('mitra')->with('status', 'Data Berhasil Dihapus');
    }
}
