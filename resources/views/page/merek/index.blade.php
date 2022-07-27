@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Merek</h3>
      <div style="float:right">
        <a href="/merek/form" class="btn btn-outline-success btn-md"><b>+</b> Tambah Data</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Merek</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($merek as $item)
          <tr>
            <td>{{$nomor++}}</td>
            <td>{{$item->nama}}</td>
            <td>
              <a href="/merek/edit/{{$item->id}}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></a>
                  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#a{{$item->id}}">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                        </div>
                        <div class="modal-body">
                          Yakin ingin menghapus merek <b>{{$item->nama}}</b> ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form method="POST" action="/merek/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Hapus</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
          </td>
          </tr>
          @empty
              <tr>
                  <td colspan="3">Tidak Ada Data
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection