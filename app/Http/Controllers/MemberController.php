<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use App\Models\Product;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('member.index', compact('products', 'categories'));
    }

   
}
