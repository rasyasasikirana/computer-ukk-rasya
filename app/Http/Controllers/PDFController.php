<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Kasir;  // Pastikan untuk mengimport model Transaction

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Ambil data transaksi
        $transactions = Kasir::with('user', 'product')->get();  // Mengambil data transaksi, pastikan relasi user dan product sudah benar

        // Load view untuk PDF
        // $pdf = PDF::loadView('pimpinan.export', compact('transactions'));
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pimpinan.transactions_pdf', compact('transactions'));
        return $pdf->download('laporan_pdf.pdf');
    }
}
