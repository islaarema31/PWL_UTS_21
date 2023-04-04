@extends('barang.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Barang
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('barang.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" class="formcontrol" id="kode_barang" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="formcontrol" id="nama_produk" aria-describedby="nama_produk">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="text" name="kategori_barang"" class="formcontrol" id="kategori_barang"" aria-describedby="kategori_barang"">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="formcontrol" id="harga" aria-describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">QTY</label>
                            <input type="text" name="qty" class="formcontrol" id="qty" aria-describedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection