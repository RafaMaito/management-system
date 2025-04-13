<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $suppliers = Supplier::all();

        return view('market.supplier.index', ['title' => 'Suppliers', 'suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $products = Product::all();

        return view('market.supplier.create', ['title' => 'Create a Supplier', 'product' => $products, 'supplier' => null]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'site' => 'required',
            'uf' => 'required|min:2|max:2',
            'email' => 'required|email',
        ]);

        Supplier::creat($request->all());

        return redirect()->route('supplier.index');
    }

    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('market.supplier.show', ['title' => 'Supplier', 'supplier' => $supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('market.supplier.create', ['title' => 'Edit Supplier', 'products' => null, 'supplier' => $supplier]);
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('supplier.show', ['supplier' => $supplier->id]);
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index');
    }
}
