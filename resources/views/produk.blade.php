<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Keysha Batik </h2>
                </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('produk.create') }}"> Tambah Data</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Jenis</th>
                        <th>Nama Barang</th>
                        <th>Ukuran</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                    </tr>
                    @foreach ($data as $barang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->jenis?? 'Jenis Batik Tidak Ditemukan' }}</td>
                        <td>{{ $barang->nama?? 'Nama Batik Tidak Ditemukan' }}</td>
                        <td>{{ $barang->ukuran ?? 'Ukuran Tidak Ditemukan' }} m</td>
                        <td>{{ $barang->stok ?? 'Jumlah Stok Tidak Ditemukan'}}</td>
                        <td>Rp {{ $barang->harga ?? 'Jumlah Harga Tidak Ditemukan'}}</td>
                        <td><img src="{{ asset($barang->gambar) }}" width="50" height="50"></td> 
                    <td>
                    <form action="{{ route('produk.destroy',$barang->id) }}"  method="Post">
                        <a class="btn btn-primary" href="{{ route('produk.edit',$barang->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
</body>
</html>