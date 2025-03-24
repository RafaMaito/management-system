<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;
use App\Models\ContactReason;

class ContactController extends Controller
{
    public function contact(Request $request) {

        // Get all contact reasons.
        $contact_reasons = ContactReason::all();

        return view('site.contact', ['title' => 'Contact', 'contact_reasons' => $contact_reasons]);
    }

    public function save (Request $request) {

        // Validate the request data.
        $request->validate([
            'name' => 'required|min:3|max:30',
            'phone' => 'required|min:14|max:15',
            'email' => 'required|email',
            'contact_reasons_id' => 'required',
            'message' => 'required|max:2000'
        ]);
        SiteContact::create($request->all());

        return redirect()->route('site.home')->with('success', 'Your message has been sent successfully!');
    }
}
// Study the code below:
        // dd is a helper function that dumps the variable and ends the execution of the script.
        // dd($request);

        // Print the request data.
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';

        // Get the data from the request.
        // $request->input('name');
        // $request->input('email');
        // $request->input('message');

        // $contact = new SiteContact();
        // $contact->name = $request->input('name');
        // $contact->phone = $request->input('phone');
        // $contact->email = $request->input('email');
        // $contact->contact_reason = $request->input('contact_reason');
        // $contact->message = $request->input('message');
        // $contact->save();

        // If you don't need to treat the data before saving it, you can use the create method.
        // $contact = SiteContact::create($request->all());
        // print_r($contact->getAttributes());
