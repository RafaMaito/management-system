<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();

        return view('market.product_detail.create', ['title' => 'Product deails', 'units' => $units, 'product' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductDetail::create($request->all());

        return redirect()->route('product-detail.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_detail = ProductDetail::findOrFail($id);
        $units = Unit::all();

        return view('market.product_detail.create', ['title' => 'Edit product deails', 'units' => $units, 'product_detail' => $product_detail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product_detail = ProductDetail::findOrFail($id);
        $product_detail->update($request->all());

        return redirect()->route('product_detail.show', ['product_detail' => $product_detail->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}