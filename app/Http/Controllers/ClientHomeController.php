<?php

namespace App\Http\Controllers;

class ClientHomeController extends Controller
{
    public function index()
    {
        return view('market.client.home', ['title' => 'Client home']);
    }
}
