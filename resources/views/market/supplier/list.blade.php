@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Supplier</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('market.supplier.register') }}">Register</a></li>
                <li><a href="{{ route('market.supplier') }}">Search</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div class="table-container" style="width: 80%; margin: 0 auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->site }}</td>
                                <td>{{ $supplier->uf }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td><a href="{{ route('market.supplier.edit', $supplier->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
