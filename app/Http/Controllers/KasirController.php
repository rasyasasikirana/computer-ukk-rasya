<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Kasir::with(['user', 'product'])->get();
        return view('kasir.transaksi', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('kasir.create', compact('users', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'qty' => 'required|integer|min:1',
        'tgl_transaksi' => 'required|date',
    ]);

    $product = Product::findOrFail($request->product_id);
    $totalHarga = $product->harga * $request->qty; // Hitung total harga otomatis

    // Simpan transaksi
    Kasir::create([
        'user_id' => $request->user_id,
        'product_id' => $request->product_id,
        'qty' => $request->qty,
        'total' => $totalHarga,
        'tgl_transaksi' => $request->tgl_transaksi,
    ]);

    $product->stok -= $request->qty;
    $product->save();

    return redirect()->route('kasir.index')->with('success', 'Transaksi berhasil ditambahkan!');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kasir $kasir)
    {
        $users = User::all();
        $products = Product::all();
        return view('admin.update', compact('kasir', 'users', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'tgl_transaksi' => 'required|date',
            'total' => 'required|integer|min:0',
        ]);

        $kasir->update($request->all());
        return redirect()->route('kasir.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();
        return redirect()->route('kasir.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
