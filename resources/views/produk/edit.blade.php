@extends('layout.main')

  @section('content')
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Lapangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12"> <!-- Mengubah lebar kolom menjadi 8 -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}">
                      @error('nama_produk')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror    
                    </div>
                    <div class="form-group">
                      <label for="image">Foto</label>
                      <div>
                      <img class="w-32 h-32" src="{{ Storage::url($produk->image) }}" style="max-width: 50px; max-height: 50px;">
                      </div>
                      <input type="file" class="form-control" id="image" name="image">
                      @error('image')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror     
                    </div>
                    <div class="form-group">
                      <label for="detail">detail</label>
                      <textarea name="detail" class="form-control" id="detail">{{ $produk->detail }}</textarea>
                      @error('detail')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror  
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="number" name="harga" class="form-control" id="harga" value="{{ $produk->harga }}">
                      @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror  
                    </div>                  
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
  @endsection