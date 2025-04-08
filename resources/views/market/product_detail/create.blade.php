@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Product</h1>
        </div>

        <div class="menu">
            <ul>
                {{-- <li><a href="{{ route('product-details.index') }}">Back</a></li>
                <li><a href="{{ route('product-details.index') }}">Consult</a></li> --}}
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            {{ $msg_product ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('market.product_detail._components.form_create_edit', [
                    'product_detail' => $product_detail,
                    'units' => $units,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
