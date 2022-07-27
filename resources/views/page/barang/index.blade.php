@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Barang</h3>
      <div style="float:right">
        <a href="/barang/form" class="btn btn-outline-success btn-md"><b>+</b> Tambah Data</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Merek</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>  
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($barang as $item)
          <tr>
              <td>{{$nomor++}}</td>
              <td>{{$item->nama_barang}}</td>
              <td>{{$item->mereks->nama}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->harga}}</td>
              <td>
                <a href="/barang/edit/{{$item->id}}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></a>
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
                            Yakin ingin menghapus merek <b>{{$item->nama_barang}}</b> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <form method="POST" action="/barang/{{$item->id}}">
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
                  <td colspan="6">Tidak Ada Data
              </tr>
          @endforelse
      </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection