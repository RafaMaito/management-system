@extends('market.layouts.base')

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
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('market.supplier._components.form_create_edit', [
                    'products' => $products,
                    'supplier' => $supplier,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
