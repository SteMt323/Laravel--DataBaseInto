<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $producto = Product::all();
        return view('producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $products = new Product();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        if ($request->iva == 'on'){
            $products->iva = true;
        }else{
            $products->iva = false;
        }
        if ($request->discount == 'on'){
            $products->discount = true;
        }else{
            $products->discount = false;
        }
        $products->discount_percent = $request->discount_percent;
        $products->stock = $request->stock;
        $products->save();
        return redirect()->route('producto.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Product::find($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $producto = Product::find($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto = Product::find($id);
        $producto->name = $request->input('name');
        $producto->description = $request->input('description');
        $producto->price = $request->input('price');
        if ($request->iva == 'on'){
            $producto->iva = 1;
        }else{
            $producto->iva = 0;
            }
        if ($request->discount == 'on'){
            $producto->discount = 1;
        }else{
            $producto->discount = 0;
            }
        $producto->discount_percent = $request->input('discount_percent');
        $producto->stock = $request->input('stock');
        $producto->save();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Product::find($id);
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
