<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactReason;

class HomeController extends Controller
{
    public function home() {
        // Get all contact reasons.
        $contact_reasons = ContactReason::all();

        return view('site.home', ['contact_reasons' => $contact_reasons]);
    }
}
