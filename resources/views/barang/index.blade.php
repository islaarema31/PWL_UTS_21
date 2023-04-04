@extends('barang.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Mahasiswa</a>
 </div>
 </div>
 </div>

 <div class="row justify-content-between">
    <div class="col-md-4">
        <form action="{{ route('barang.index') }}" method="GET" role="search">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan Nama">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </span>
            </div>
        </form>
    </div>
</div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif

 <table class="table table-bordered">
 <tr>
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Kategori Barang</th>
 <th>Harga</th>
 <th>Qty</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($barang as $Barang)
 <tr>

 <td>{{ $Barang->kode_barang }}</td>
 <td>{{ $Barang->nama_barang }}</td>
 <td>{{ $Barang->kategori_barang }}</td>
 <td>{{ $Barang->harga }}</td>
 <td>{{ $Barang->qty }}</td>
 <td>
 <form action="{{ route('barang.destroy',$Barang->kode_barang) }}" method="POST">

 <a class="btn btn-info" href="{{ route('barang.show',$Barang->kode_barang) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('barang.edit',$Barang->kode_barang) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
    <div class="d-flex">
        {!! $barang->links() !!}
    </div>
@endsection