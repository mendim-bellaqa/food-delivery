<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        $userCount = DB::table('users')->count();
        $countproducts = DB::table('products')->count();
        return view('admin.index',compact('products', 'userCount','countproducts'));
    }

    public function show(Product $product)
    {
        $products = Product::latest()->paginate(5);
        $userCount = DB::table('users')->count();
        $countproducts = DB::table('products')->count();
        return view('admin.products.index',compact('products', 'userCount','countproducts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
