@extends('kasir.layouts.app')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Data Transaksi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Daftar Transaksi</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <a href="{{ route('PDF.generatePDF') }}"
                                style="background-color: #FF2171; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-left: 10px;">
                                Cetak PDF
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Member</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->user->name }}</td>
                                        <td>{{ $transaction->product->nama_barang }}</td>
                                        <td>{{ $transaction->qty }}</td>
                                        <td>Rp{{ number_format($transaction->total, 0, ',', '.') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($transaction->tgl_transaksi)->format('d M Y') }}</td>
                                        {{-- <td class="d-flex justify-content-end">
                                            <div class="pr-2">
                                                <a href="{{ route('transaction.edit',['transaction'=>$transaction->id]) }}" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                    Edit
                                                </a>
                                            </div>
                                            <form action="{{ route('transaction.destroy', ['transaction' => $transaction->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background-color: #fb0000; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Tidak ada data transaksi</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Total Pendapatan -->
                    <div class="card-footer text-right">
                        <h8 style="font-weight: bold; color: #FF2171;">
                            Total Pendapatan: Rp{{ number_format($transactions->sum('total'), 0, ',', '.') }}
                        </h8>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
