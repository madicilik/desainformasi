@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container">
        <form action="{{ url('testimoni') }}" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Tambah Data Testimoni</h5>
              </div>
              <div class="card-body">
               
               <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
                  </div>

                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" placeholder="Enter Jabatan Anda">
                  </div>

                   <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="Enter Deskripsi">
                  </div>
                   
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                  </div>

                
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
