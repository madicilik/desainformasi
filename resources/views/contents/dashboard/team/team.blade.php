@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="m-0">Daftar Team</h1>
                    @if (session('status'))
                           <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                            {{ session('status') }}
                        </div>
                    @endif
                     <a href="{{ url('team/create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="container-fluid">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Team </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Jabatan</th>
                       <th>Foto</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                <?php $no=1; ?>
                    @foreach ($teams as $t)
                   
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->jabatan }}</td>
                        <td> <img src="{{ asset('foto_team/'. $t->foto) }}" width="100px" height="100px"> </td>
                        <td>
                            <a href="{{ url('edit',$t->id_team) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $t->id_team }}">
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


@foreach ($teams as $h)
   <div class="modal fade" id="delete{{ $h->id_team }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{ $h->nama }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini...???</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="{{ url('delete', $h->id_team) }}" class="btn btn-danger">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endforeach
@endsection
