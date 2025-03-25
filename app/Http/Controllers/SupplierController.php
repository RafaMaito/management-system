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
        return view('market.supplier.index', ['title' => 'Supplier']);
    }
}
