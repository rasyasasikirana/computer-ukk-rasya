<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    public function index()
    {
        $transactions = Kasir::orderBy('tgl_transaksi', 'asc')->get();
        $transactions = Kasir::with(['user', 'product'])->get();
        return view('pimpinan.export', compact('transactions'));
    }
}
