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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route ('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Tambah Produk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Produk</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama_produk" placeholder="Nama Produk">
                      @error('nama_produk')
                        <small>{{ $message }}</small>   
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Photo Kain</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="Photo Kain">
                      @error('image')
                        <small>{{ $message }}</small>   
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail</label>
                      <textarea  class="form-control" id="exampleInputEmail1" name="detail" placeholder="Tuliskan Detail Keterangan"></textarea>
                      @error('detail')
                        <small>{{ $message }}</small>   
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Harga</label>
                      <input type="text" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Harga">
                      @error('harga')
                        <small>{{ $message }}</small>   
                      @enderror
                    </div>
                    </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
  
            </div>
            <!--/.col (left) -->

          </div>
        </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>    

@endsection