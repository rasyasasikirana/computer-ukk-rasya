@extends('admin.layouts.app')
@section('content')
   <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Tambah Transaksi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="card">
        <div class="card-header">
            <h5>Tambah Transaksi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="member_id">Nama Member</label>
                    <select name="member_id" id="member_id" class="form-control">
                        <option value="">-- Pilih Member --</option>
                        @foreach ($members as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_id">Nama Barang</label>
                    <select name="product_id" id="product_id" class="form-control">
                        <option value="">-- Pilih Barang --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah</label>
                    <input type="number" class="form-control" id="qty" name="qty" required>
                </div>
                <div class="form-group">
                    <label for="total">Total Harga</label>
                    <input type="text" class="form-control" id="total" name="total" required>
                </div>
                <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
