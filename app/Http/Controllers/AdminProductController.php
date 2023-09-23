<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{

    function index(){
        $product = Product::all();
        return view('admin.products.index', compact('product'));
    }

    function add(){
        return view('admin.products.add');
    }
    function store(Request $request){

        //return Auth::user()->id;

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return back()->with('success', 'The product has be updated successfully');
    }
    function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));

    }
}
