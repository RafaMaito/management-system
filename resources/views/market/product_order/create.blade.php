@extends('market.layouts.app')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Orders</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('order.index') }}">Back</a></li>
                <li><a href="{{ route('order.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <p>Order ID: {{ $order->id }}</p>
            <p>Client ID: {{ $order->client_id }}</p>
            <p>Products order</p>
            <table border='1' width='30%' style='margin: 0 auto;'>
                <p>Number of products: {{ count($order->products) }}</p>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('market.product_order._components.form_create_edit', [
                    'products' => $products,
                    'order' => $order,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
