<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('contents.dashboard.team.team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.team.create');
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

        $dtUpload = new Team;
        $dtUpload->nama = $request->nama;
        $dtUpload->jabatan = $request->jabatan;
        $dtUpload->foto = $namaFile;

        $nm->move(public_path().'/foto_team', $namaFile);
        $dtUpload->save();      

        return redirect('team')->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_team)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_team)
    {
        $dt = Team::findorfail($id_team);     
        return view('contents.dashboard.team.edit', compact('dt'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_team)
    {
        $ubah = Team::findorfail($id_team);
        $awal = $ubah->foto;

        $dt = [
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'foto' => $awal,
        ];
        
        $request->foto->move(public_path().'/foto_team', $awal);
        $ubah->update($dt);      

        return redirect('team')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_team)
    {
        $hapus = Team::findorfail($id_team);

        $file = public_path('/foto_team/').$hapus->foto;
        // Cek jika ada gambar
        if (file_exists($file)) {
            // Maka hapus file di folder public/img
            @unlink($file);
        }

        //Hapus data di database
        $hapus->delete();
        return redirect('team')->with('status', 'Data Berhasil Dihapus');
    }
}
