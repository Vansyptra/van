@extends('layouts.master')
@section('content')  
    
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Form Tambah Barang</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Tambah Barang</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="/barang/store" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control" name="nm_barang">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Merek</label>
                                                <select name="merek" id="" class="form-control">
                                                    @foreach ($merek as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Jumlah</label>
                                                <input type="number" class="form-control" name="jumlah">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Harga Satuan</label>
                                                <input type="number" class="form-control" name="harga">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            <a href="/merek" class="btn btn-danger">Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->
                    <!-- Begin page -->

@endsection