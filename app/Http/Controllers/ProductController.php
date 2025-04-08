<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::paginate(5);
        // Get the products with their details from product_details table.
        foreach ($products as $key => $product) {
            $product_detail = ProductDetail::where('product_id', $product->id)->first();
            if ($product_detail) {
                $products[$key]['length'] = $product_detail->length;
                $products[$key]['height'] = $product_detail->height;
                $products[$key]['width'] = $product_detail->width;
            }
        }

        return view('market.product.index', ['title' => 'Products', 'products' => $products, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $units = Unit::all();

        return view('market.product.create', ['title' => 'Create a Product', 'units' => $units, 'product' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'description' => 'required|min:3|max:2000',
            'weight' => 'required|integer',
            'unit_id' => 'exists:units,id',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('market.product.show', ['title' => 'Product', 'product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $units = Unit::all();

        return view('market.product.create', ['title' => 'Edit Product', 'product' => $product, 'units' => $units]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index');
    }
}