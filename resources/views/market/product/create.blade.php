@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Product</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('product.index') }}">Back</a></li>
                <li><a href="{{ route('product.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('market.product._components.form_create_edit', [
                    'product' => $product,
                    'units' => $units,
                    'suppliers' => $suppliers,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
