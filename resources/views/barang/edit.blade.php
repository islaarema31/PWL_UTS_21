@extends('barang.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
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
                    <form method="post" action="{{ route('barang.update', $Barang->kode_barang) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" class="formcontrol" id="kode_barang" value="{{ $Barang->kode_barang }}" ariadescribedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" class="formcontrol" id="nama_barang" value="{{ $Barang->nama_barang }}" ariadescribedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="text" name="kategori_barang" class="formcontrol" id="kategori_barang" value="{{ $Barang->kategori_barang }}" ariadescribedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="formcontrol" id="harga" value="{{ $Barang->harga }}" ariadescribedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="text" name="qty" class="formcontrol" id="qty" value="{{ $Barang->jurusan }}" ariadescribedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection