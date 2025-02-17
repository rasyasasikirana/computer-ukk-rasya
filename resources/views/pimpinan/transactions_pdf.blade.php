<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Laporan Data Transaksi</h1>
    <table>
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
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->product->nama_barang }}</td>
                    <td>{{ $transaction->qty }}</td>
                    <td>Rp{{ number_format($transaction->total, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($transaction->tgl_transaksi)->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="total">
        Total Pendapatan: Rp{{ number_format($transactions->sum('total'), 0, ',', '.') }}
    </p>
</body>
</html>
