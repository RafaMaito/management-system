@extends('market.layouts.app')

@section('title', $title)


@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Orders</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('order.create') }}">New</a></li>
                <li><a href="{{ route('order.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div class="table-container" style="width: 80%; margin: 0 auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Order number</th>
                            <th>Client</th>
                            <th>Add product</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->client_id }}</td>
                                <td><a href="{{ route('product-order.create', $order->id) }}">Add products</a></td>
                                <td><a href="{{ route('order.show', $order->id) }}">View</a></td>
                                <td><a href="{{ route('order.edit', $order->id) }}">Edit</a></td>
                                <td>
                                    <form id="form_{{ $order->id }}" method="POST"
                                        action="{{ route('order.destroy', ['order' => $order->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $order->id }}').submit()">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $orders->appends($request)->links() }}
                {{ $orders->count() }}
                {{ $orders->total() }} records found
                {{ $orders->firstItem() }} to {{ $orders->lastItem() }}
                <br>
                Showing {{ $orders->count() }} of {{ $orders->total() }} records
                <br>
                {{ $orders->firstItem() }} to {{ $orders->lastItem() }}
                <br>
                {{ $orders->links() }} --}}
            </div>
        </div>
    </div>
@endsection
