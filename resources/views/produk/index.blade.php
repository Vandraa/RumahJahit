@extends('layout.main')
    @section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Data Produk</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <a href="{{ route('produk.create')}}" class="btn btn-primary mb-3">Tambah Produk</a>
                <div class="card">
                    <div class="card-header">
                        <!-- Form Pencarian -->
                        <div class="card-tools">
                            <form action="{{ route('produk.index') }}" method="GET">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $request->get('search') }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id Produk</th>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Detail</th>
                            <th>Harga</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->idProduk}}</td>
                                <td>{{ $d->nama_produk}}</td>
                                <td><img src="{{ Storage::url($d->image) }}" alt="" width="70px"></td>
                                <td>{{ $d->detail}}</td>
                                <td>{{ $d->harga}}</td>
                            <td>
                                <a href="{{ route('produk.edit', ['id' => $d->id]) }}" class="btn btn-primary col mb-2">Edit</a>
                                <button type="button" class="btn btn-danger col" data-toggle="modal" data-target="#modal-hapus{{ $d->id }}">Hapus</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-hapus{{ $d->id }}">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Kofirmasi Hapus Data </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>Apakah Kamu Yakin Ingin Menghapus Data Produk <b>{{$d->nama_produk}}</b></p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <form action="{{ route('produk.delete',['id'=> $d->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Ya Hapus Data</button>
                                </form>
                    
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @endsection