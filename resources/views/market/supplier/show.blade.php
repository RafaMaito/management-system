@extends('market.layouts.app')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Supplier</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('supplier.index') }}">Back</a></li>
                <li><a href="{{ route('supplier.index') }}">Consult</a></li>
            </ul>
        </div>
        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div style="width: 20%; margin-left: auto; margin-right: auto;">
                <table border="1">
                    <tr>
                        <td>Name:</td>
                        <td>{{ $supplier->name }}</td>
                    </tr>
                    <tr>
                        <td>Site:</td>
                        <td>{{ $supplier->site }}</td>
                    </tr>
                    <tr>
                        <td>UF:</td>
                        <td>{{ $supplier->uf }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $supplier->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
