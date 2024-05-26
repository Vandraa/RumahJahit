@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PENJUALAN PRODUK</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penjualan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- Centering content horizontally -->
                <div class="col-lg-12"> <!-- Adjust the width of the content -->
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover fs-5" style="text-align: justify;">
                                <thead>
                                    <tr>
                                        <th>No Transaction</th>
                                        <th>Name</th>
                                        <th>jumlah</th>
                                        <th>Item</th>
                                        <th>size</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>harga</th>
                                        <th>Transaction Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->idTransaksi}}</td>
                                        <td>{{ $transaksi->name}}</td>
                                        <td>{{ $transaksi->jumlah}}</td>
                                        <td>{{ $transaksi->name_produk}}</td>
                                        <td>{{ $transaksi->size}}</td>
                                        <td>{{ $transaksi->metode}}</td>
                                        <td>{{ $transaksi->alamat}}</td>
                                        <td>{{ $transaksi->notelp}}</td>
                                        <td>{{ $transaksi->harga}}</td>
                                        <td>{{ $transaksi->created_at}}</td>
                                      </tr>
                                      @endforeach                           
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mx-3">
                          {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
</div>

@endsection
