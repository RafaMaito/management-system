<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $suppliers = ['Sup1', 'Sup2', 'Sup3', 'Sup4', 'Sup5'];
        return view('market.supplier.index', compact('suppliers'));
    }
}
