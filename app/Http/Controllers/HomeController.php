<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        
       return view('site.home', ['contact_reasons' => $contact_reasons]);
    }
}
