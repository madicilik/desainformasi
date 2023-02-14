@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container">
        <form action="{{ url('berita/update', $dt->id_berita) }}" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Data Berita</h5>
              </div>
              <div class="card-body">

               <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $dt->judul }}">
                  </div>

               <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $dt->nama }}">
                  </div>

                  <div class="form-group">
                    <label>Slug Berita</label>
                    <input type="text" name="slug_berita" class="form-control" value="{{ $dt->slug_berita }}">
                  </div>

                   <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $dt->deskripsi }}">
                  </div>

                   <div class="form-group">
                    <label>Tanggal Upload</label>
                    <input type="date" name="tgl_upload" class="form-control" value="{{ $dt->tgl_upload }}">
                  </div>

                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                    <img src="{{ asset('foto_informasi/'. $dt->foto) }}" class="mt-2" alt="width="200px" height="200px">
                  </div>

                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
 