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

    public function register()
    {
        return view('market.supplier.register', ['title' => 'Register Supplier']);
    }

    public function list()
    {
        return view('market.supplier.list', ['title' => 'List Supplier']);
    }
}
