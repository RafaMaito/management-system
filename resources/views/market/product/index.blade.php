@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Products</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('product.create') }}">New</a></li>
                <li><a href="{{ route('product.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div class="table-container" style="width: 80%; margin: 0 auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Weigth</th>
                            <th>Unit ID</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->weight }}</td>
                                <td>{{ $product->id }}</td>
                                <td><a href="{{ route('product.show', ['product' => $product]) }}">View</a></td>
                                {{-- <td><a href="{{ route('market.product.edit', $product->id) }}">Edit</a></td>
                            <td><a href="{{ route('market.product.delete', $product->id) }}">Delete</a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $products->appends($request)->links() }} --}}
            </div>
        </div>
    </div>
@endsection
