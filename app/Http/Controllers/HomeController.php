<?php

namespace App\Http\Controllers;

use App\Models\ContactReason;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all contact reasons.
        $contact_reasons = ContactReason::all();

        return view('home', ['contact_reasons' => $contact_reasons]);
    }
}