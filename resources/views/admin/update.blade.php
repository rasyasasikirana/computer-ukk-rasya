@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Edit Barang</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Barang</label>
                    <input value="{{ $product->nama_barang }}" type="text" class="form-control" id="name" name="name"
                        required>
                </div>
                <div class="form-group">
                    <label for="detail_barang">Detail Barang</label>
                    <input value="{{ $product->detail_barang }}" class="form-control" id="detail_barang"
                        name="detail_barang" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input value="{{ $product->harga }}" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>

                <!-- Menampilkan foto saat ini jika ada -->
                @if ($product->foto)
                    <img src="{{ asset($product->foto) }}" alt="project-image" class="rounded"
                        style="width: 100%; max-width: 100px; height: auto;">
                @endif

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input value="{{ $product->stok }}" class="form-control" id="stok" name="stok" required>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>

@endsection