@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content mt-3">
        <div class="container">
        <form action="{{ url('mitra') }}" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Tambah Data Mitra</h5>
              </div>
              <div class="card-body">

                  <div class="form-group">
                    <label>Foto Mitra</label>
                    <input type="file" name="foto" class="form-control">
                  </div>

                
                  <button type="submit" class="btn btn-primary">Save</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
