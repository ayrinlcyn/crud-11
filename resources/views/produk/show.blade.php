@extends('layoutes.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5>{{ $produk->nama }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- Gambar Produk -->
                    @empty($produk->image)
                    <img src="{{ url('image') }}/{{ $produk->foto }}" alt="{{ $produk->nama }}" class="img-fluid">
                    @else
                    <img src="{{ url('image/nophoto.jpg') }}" alt="product-image" class="img-fluid">
                    @endempty
                </div>
                <div class="col-md-6">
                    <!-- Deskripsi Produk -->
                    <p><strong>Jenis:</strong> {{ $produk->jenis }}</p>
                    <p><strong>Harga Jual:</strong> Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</p>
                    <p><strong>Harga Beli:</strong> Rp {{ number_format($produk->harga_beli, 0, ',', '.') }}</p>
                    <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
