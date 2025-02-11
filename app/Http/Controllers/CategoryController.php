<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        $category = Category::create($request->all());
        return to_route('categories.index')->with('success','Berhasil menambahkan data');
    }

    public function show(Category $category)
    {
        // return view('', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ], [
            'name.unique' => 'Nama kategori sudah ada, silakan gunakan nama lain.', 
        ]);
    
        $category->update($validatedData);
    
        return to_route('categories.index')->with('success', 'Berhasil mengubah data');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success','Berhasil menghapus data');
    }
}
