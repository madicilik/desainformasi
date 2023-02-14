@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container">
        <form action="{{ url('gallery/update',$dt->id_galleri) }}" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Data Gallery</h5>
              </div>
              <div class="card-body">
    
                  <div class="form-group">
                    <label>Foto Gallery</label>
                    <input type="file" name="foto_galleri" class="form-control">
                    <img src="{{ asset('foto_gallery/'. $dt->foto_galleri) }}" class="mt-2" alt="width="200px" height="200px">
                  </div>

                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
 