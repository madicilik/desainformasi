@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container">
        <form action="{{ url('testimoni/update', $dt->id_testimoni) }}" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Data Testimoni</h5>
              </div>
              <div class="card-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $dt->nama }}">
                  </div>

                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ $dt->jabatan }}">
                  </div>

                   <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $dt->deskripsi }}">
                  </div>

                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                    <img src="{{ asset('foto_testimoni/'. $dt->foto) }}" class="mt-2" alt="width="200px" height="200px">
                  </div>

                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
 