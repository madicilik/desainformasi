@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="m-0">Daftar Gallery</h1>
                     @if (session('status'))
                           <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                            {{ session('status') }}
                        </div>
                    @endif
                  
                     <a href="{{ url('gallery/create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="container-fluid">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Gallery</h3>
              </div>
              <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Foto Gallery</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                <?php $no=1; ?>
                    @foreach ($galleri as $g)
                   
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td> <img src="{{ asset('foto_gallery/'. $g->foto_galleri) }}" width="150px" height="100px"> </td>
                        <td>
                            <a href="{{ url('gallery/edit',$g->id_galleri) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $g->id_galleri }}">
                                <i class="fa fa-trash"></i>&nbsp; Delete
                            </button>
                        </td>
                    </tr>
                     @endforeach
               </tbody>
           </table>
        </div>
        </div>
    </div>
</div>



@foreach ($galleri as $h)
   <div class="modal fade" id="delete{{ $h->id_galleri }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Alert...???</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini...???</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="{{ url('gallery/delete', $h->id_galleri) }}" class="btn btn-danger">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endforeach
@endsection
