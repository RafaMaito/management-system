@extends('market.layouts.app')

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
            <div style="width: 20%; margin-left: auto; margin-right: auto;">
                <table border="1">
                    <tr>
                        <td>Name:</td>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <td>Weight:</td>
                        <td>{{ $product->weight }}</td>
                    </tr>
                    <tr>
                        <td>Measure unit</td>
                        <td>{{ $product->unit_id }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
