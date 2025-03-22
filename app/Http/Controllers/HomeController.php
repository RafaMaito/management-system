<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $contact_reasons = [
            '1' => 'Question',
            '2' => 'Complaint',
            '3' => 'Compliment',
        ];
        
       return view('site.home', ['contact_reasons' => $contact_reasons]);
    }
}
