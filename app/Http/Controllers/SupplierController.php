<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private $button_func = '';

    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('market.supplier.index', ['title' => 'Supplier']);
    }

    public function register(Request $request)
    {
        $msg_supplier = '';
        $button_func = 'Register';
        if (!empty($request->input('_token'))) {
            if (empty($request->input('id'))) {
                $request->validate([
                    'name' => 'required|min:3|max:30',
                    'site' => 'required',
                    'uf' => 'required|min:2|max:2',
                    'email' => 'required|email',
                ]);

                $supplier = new Supplier();
                $supplier->create($request->all());
                $msg_supplier = 'Supplier registered successfully';
            }
            if ($request->input('id')) {
                $supplier = Supplier::find($request->input('id'));
                $supplier_update = $supplier->update($request->all());

                if ($supplier_update) {
                    $msg_supplier = 'Supplier '.$supplier->name.' edited successfully';
                } else {
                    $msg_supplier = 'Fail to edit Supplier '.$supplier->name.'';
                }

                return redirect()->route('market.supplier.edit', ['id' => $request->input('id'), 'msg' => $msg_supplier]);
            }
        }

        return view('market.supplier.register', ['title' => 'Register Supplier', 'msg_reg_edit' => $msg_supplier, 'button_func' => $button_func]);
    }

    public function list(Request $request)
    {
        $suppliers = Supplier::where('name', 'like', '%'.$request->input('name').'%')->get();
        if (empty($suppliers)) {
            $suppliers = Supplier::where('id', 'like', $request->$supplier->id)->get();
        }

        return view('market.supplier.list', ['title' => 'Suppliers List', 'suppliers' => $suppliers]);
    }

    public function edit($id, $msg = '')
    {
        $button_func = 'Edit';
        $supplier = Supplier::find($id);

        return view('market.supplier.register', ['title' => 'Edit Supplier', 'supplier' => $supplier, 'button_func' => $button_func, 'msg_supplier' => $msg]);
    }
}