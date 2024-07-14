@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manajemen Gudang</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk Baru</a>
        <form action="{{ route('products.index') }}" method="GET" class="form-inline my-2 my-lg-0">
            <input type="text" name="query" class="form-control mr-sm-2" placeholder="Search..." value="{{ request('query') }}">
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
        </form>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada produk yang ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
