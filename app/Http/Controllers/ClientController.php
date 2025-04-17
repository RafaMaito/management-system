<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::paginate(5);

        return view('market.client.index', ['title' => 'Clients', 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $units = Unit::all();
        $suppliers = Supplier::all();

        return view('market.client.create', ['title' => 'Create a Client', 'units' => $units, 'client' => null, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email',
        ]);

        Client::create($request->all());

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);

        return view('market.client.show', ['title' => 'Client', 'client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);

        return view('market.client.create', ['title' => 'Edit Client', 'client' => $client, 'units' => null, 'suppliers' => null]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('client.show', ['client' => $client->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}