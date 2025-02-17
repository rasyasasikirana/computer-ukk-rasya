<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();
        $categories = Category::all();
        return view('admin.produk', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.tambah', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'detail_barang' => 'required',
            'category_id' => 'required',
            'harga' => 'required|integer',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'stok' => 'required|integer',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            
            // Simpan ke folder `public/uploads/products/`
            $file->move(public_path('uploads/products'), $filename);
            
            // Simpan path yang benar ke database
            $data['foto'] = 'uploads/products/' . $filename;
        }
    
        Product::create($data);
        return redirect()->route('product.index')->with('success', 'Barang berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        // $products = Product::all();
        $product = Product::where('id', $id)->firstOrFail();

        $categories = Category::all();
        return view('admin.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
        {
            // Validasi
            $request->validate([
                'nama_barang' => 'required',
                'detail_barang' => 'required',
                'category_id' => 'required',
                'harga' => 'required|integer',
                'stok' => 'required|integer',
                'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Update data
            $product->nama_barang = $request->nama_barang;
            $product->detail_barang = $request->detail_barang;
            $product->category_id = $request->category_id;
            $product->harga = $request->harga;
            $product->stok = $request->stok;

            // Handle Foto
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('uploads', 'public');
                $product->foto = 'storage/' . $fotoPath;
            }

            $product->save();

            // dd($product); // Cek apakah kode sampai sini
            return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
         // Hapus foto dari storage jika ada
    if ($product->foto) {
        Storage::delete('public/' . $product->foto);
    }

    // Hapus data barang dari database
    $product->delete();

    return redirect()->route('product.index')->with('success', 'Barang berhasil dihapus.');
    }
}
